<?php

namespace App\Services;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class ShopifyProductAdapter
{
    /**
     * Map dữ liệu từ Shopify JSON response sang Product model
     *
     * @param array $shopifyData
     * @return Product
     * @throws \Exception
     */
    public function mapToProduct(array $shopifyData): Product
    {
        try {
            $nodeData = $shopifyData['node'] ?? $shopifyData;

            if (!$this->validateShopifyData($shopifyData)) {
                throw new \InvalidArgumentException('Invalid Shopify data format');
            }

            return new Product([
                'shopify_id' => $this->extractShopifyId($nodeData['id']),
                'slug' => $this->generateSlug($nodeData['title'] ?? ''),
                'title' => $nodeData['title'] ?? null,
                'tags' => $nodeData['tags'] ?? [],
                'vendor' => $nodeData['vendor'] ?? null,
                'featured_image_url' => $this->extractFeaturedImageUrl($nodeData),
                'featured_image_width' => $this->extractFeaturedImageWidth($nodeData),
                'featured_image_height' => $this->extractFeaturedImageHeight($nodeData),
                'featured_image_alt_text' => $this->extractFeaturedImageAltText($nodeData),
                'min_price' => $this->extractPrice($nodeData['priceRange']['minVariantPrice'] ?? null),
                'max_price' => $this->extractPrice($nodeData['priceRange']['maxVariantPrice'] ?? null),
                'currency_code' => $nodeData['priceRange']['minVariantPrice']['currencyCode'] ?? 'VND',
                'description' => $nodeData['description'] ?? $nodeData['descriptionHtml'] ?? null,
                'images' => $this->mapImages($nodeData['media'] ?? $nodeData['images'] ?? []),
                'variants' => $this->mapVariants($nodeData['variants'] ?? []),
                'metafields' => $this->mapMetafields($nodeData['metafields'] ?? []),
                'shopify_updated_at' => $this->parseShopifyDate($nodeData['updatedAt'] ?? null),
            ]);
        } catch (\Exception $e) {
            Log::error('Error mapping Shopify product data', [
                'error' => $e->getMessage(),
                'shopify_data' => $shopifyData
            ]);
            throw $e;
        }
    }

    /**
     * Map nhiều sản phẩm từ Shopify response
     *
     * @param array $shopifyResponse
     * @return Collection
     */
    public function mapMultipleProducts(array $shopifyResponse): Collection
    {
        $products = collect();
        $edges = $shopifyResponse['data']['products']['edges'] ?? [];

        foreach ($edges as $edge) {
            try {
                $products->push($this->mapToProduct($edge));
            } catch (\Exception $e) {
                Log::warning('Failed to map product', [
                    'error' => $e->getMessage(),
                    'product_id' => $edge['node']['id'] ?? 'unknown'
                ]);
                continue; // Skip invalid products
            }
        }

        return $products;
    }

    /**
     * Batch create hoặc update products từ Shopify data
     *
     * @param array $shopifyResponse
     * @return array
     */
    public function batchCreateOrUpdateProducts(array $shopifyResponse): array
    {
        $results = [
            'created' => 0,
            'updated' => 0,
            'failed' => 0,
            'errors' => []
        ];

        $products = $this->mapMultipleProducts($shopifyResponse);

        foreach ($products as $productData) {
            try {
                $shopifyId = $productData->shopify_id;
                $existingProduct = Product::where('shopify_id', $shopifyId)->first();

                if ($existingProduct) {
                    $existingProduct->update($productData->toArray());
                    $results['updated']++;
                } else {
                    Product::create($productData->toArray());
                    $results['created']++;
                }
            } catch (\Exception $e) {
                $results['failed']++;
                $results['errors'][] = [
                    'shopify_id' => $productData->shopify_id ?? 'unknown',
                    'error' => $e->getMessage()
                ];
                Log::error('Failed to create/update product', [
                    'shopify_id' => $productData->shopify_id ?? 'unknown',
                    'error' => $e->getMessage()
                ]);
            }
        }

        return $results;
    }

    /**
     * Tạo hoặc cập nhật Product từ Shopify data
     *
     * @param array $shopifyData
     * @return Product
     * @throws \Exception
     */
    public function createOrUpdateProduct(array $shopifyData): Product
    {
        try {
            $nodeData = $shopifyData['node'] ?? $shopifyData;
            $shopifyId = $this->extractShopifyId($nodeData['id']);

            if (!$shopifyId) {
                throw new \InvalidArgumentException('Invalid Shopify ID');
            }

            $productData = [
                'shopify_id' => $shopifyId,
                'slug' => $this->generateSlug($nodeData['title'] ?? ''),
                'title' => $nodeData['title'] ?? null,
                'tags' => $nodeData['tags'] ?? [],
                'vendor' => $nodeData['vendor'] ?? null,
                'featured_image_url' => $this->extractFeaturedImageUrl($nodeData),
                'featured_image_width' => $this->extractFeaturedImageWidth($nodeData),
                'featured_image_height' => $this->extractFeaturedImageHeight($nodeData),
                'featured_image_alt_text' => $this->extractFeaturedImageAltText($nodeData),
                'min_price' => $this->extractPrice($nodeData['priceRange']['minVariantPrice'] ?? null),
                'max_price' => $this->extractPrice($nodeData['priceRange']['maxVariantPrice'] ?? null),
                'currency_code' => $nodeData['priceRange']['minVariantPrice']['currencyCode'] ?? 'VND',
                'description' => $nodeData['description'] ?? $nodeData['descriptionHtml'] ?? null,
                'images' => $this->mapImages($nodeData['images'] ?? []),
                'variants' => $this->mapVariants($nodeData['variants'] ?? []),
                'metafields' => $this->mapMetafields($nodeData['metafields'] ?? []),
                'shopify_updated_at' => $this->parseShopifyDate($nodeData['updatedAt'] ?? null),
            ];
            return Product::updateOrCreate(
                ['shopify_id' => $shopifyId],
                $productData
            );
        } catch (\Exception $e) {
            Log::error('Error creating/updating product', [
                'error' => $e->getMessage(),
                'shopify_data' => $shopifyData
            ]);
            throw $e;
        }
    }

    /**
     * Trích xuất Shopify ID từ GID
     *
     * @param string|null $gid
     * @return int|null
     */
    private function extractShopifyId(?string $gid): ?int
    {
        if (!$gid) {
            return null;
        }

        // Extract ID từ GID format: gid://shopify/Product/8940182864108
        $parts = explode('/', $gid);
        return isset($parts[4]) ? (int) $parts[4] : null;
    }

    /**
     * Tạo slug từ title
     *
     * @param string $title
     * @return string
     */
    private function generateSlug(string $title): string
    {
        return Str::slug($title, '-');
    }

    /**
     * Trích xuất giá từ price object
     *
     * @param array|null $priceData
     * @return float|null
     */
    private function extractPrice(?array $priceData): ?float
    {
        if (!$priceData || !isset($priceData['amount'])) {
            return null;
        }

        return (float) $priceData['amount'];
    }

    /**
     * Extract featured image URL
     *
     * @param array $nodeData
     * @return string|null
     */
    private function extractFeaturedImageUrl(array $nodeData): ?string
    {
        return $nodeData['featuredMedia']['url'] ??
               $nodeData['featuredMedia']['image']['url'] ??
               null;
    }

    /**
     * Extract featured image width
     *
     * @param array $nodeData
     * @return int|null
     */
    private function extractFeaturedImageWidth(array $nodeData): ?int
    {
        return $nodeData['featuredImage']['width'] ??
               $nodeData['featuredMedia']['image']['width'] ??
               null;
    }

    /**
     * Extract featured image height
     *
     * @param array $nodeData
     * @return int|null
     */
    private function extractFeaturedImageHeight(array $nodeData): ?int
    {
        return $nodeData['featuredImage']['height'] ??
               $nodeData['featuredMedia']['image']['height'] ??
               null;
    }

    /**
     * Extract featured image alt text
     *
     * @param array $nodeData
     * @return string|null
     */
    private function extractFeaturedImageAltText(array $nodeData): ?string
    {
        return $nodeData['featuredImage']['altText'] ??
               $nodeData['featuredMedia']['image']['altText'] ??
               null;
    }

    /**
     * Map images/media data with support for both images and media fields
     *
     * @param array $imagesData
     * @return array
     */
    private function mapImages(array $imagesData): array
    {
        $images = [];
        $nodes = $imagesData['nodes'] ?? $imagesData;

        foreach ($nodes as $node) {
            $imageNode = $node;
            $images[] = [
                'id' => $imageNode['id'] ?? null,
                'url' => $imageNode['originalSrc'] ?? $imageNode['url'] ?? null,
                'altText' => $imageNode['altText'] ?? null,
                'mediaContentType' => 'IMAGE',
            ];
        }

        return $images;
    }

    /**
     * Map variants data with enhanced information
     *
     * @param array $variantsData
     * @return array
     */
    private function mapVariants(array $variantsData): array
    {
        $variants = [];
        $edges = $variantsData['nodes'] ?? $variantsData;
        foreach ($edges as $edge) {
            $variantNode = $edge;
            $variants[] = [
                'id' => $variantNode['id'] ?? null,
                'title' => $variantNode['title'] ?? null,
                'price' => $variantNode['price'] ?? null,
            ];
        }

        return $variants;
    }

    /**
     * Map metafields data
     *
     * @param array $metafieldsData
     * @return array
     */
    private function mapMetafields(array $metafieldsData): array
    {
        $metafields = [];
        $edges = $metafieldsData['edges'] ?? $metafieldsData;

        foreach ($edges as $edge) {
            $metafieldNode = $edge['node'] ?? $edge;
            $metafields[] = [
                'id' => $metafieldNode['id'] ?? null,
                'namespace' => $metafieldNode['namespace'] ?? null,
                'key' => $metafieldNode['key'] ?? null,
                'value' => $metafieldNode['value'] ?? null,
                'type' => $metafieldNode['type'] ?? null,
                'description' => $metafieldNode['description'] ?? null,
            ];
        }

        return $metafields;
    }

    /**
     * Parse Shopify date format
     *
     * @param string|null $dateString
     * @return Carbon|null
     */
    private function parseShopifyDate(?string $dateString): ?Carbon
    {
        if (!$dateString) {
            return null;
        }

        try {
            return Carbon::parse($dateString);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Validate dữ liệu trước khi mapping
     *
     * @param array $shopifyData
     * @return bool
     */
    public function validateShopifyData(array $shopifyData): bool
    {
        $nodeData = $shopifyData['node'] ?? $shopifyData;

        // Kiểm tra các field bắt buộc
        if (!isset($nodeData['id']) || !isset($nodeData['title'])) {
            return false;
        }

        // Kiểm tra format GID
        if (!str_contains($nodeData['id'], 'gid://shopify/Product/')) {
            return false;
        }

        return true;
    }

    /**
     * Map cursor data cho pagination
     *
     * @param array $shopifyResponse
     * @return array|null
     */
    public function extractCursor(array $shopifyResponse): ?array
    {
        return [
            'cursor' => $shopifyResponse['cursor'] ?? null,
            'hasNextPage' => $shopifyResponse['data']['products']['pageInfo']['hasNextPage'] ?? false,
            'hasPreviousPage' => $shopifyResponse['data']['products']['pageInfo']['hasPreviousPage'] ?? false,
        ];
    }
}
