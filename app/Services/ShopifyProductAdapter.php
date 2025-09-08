<?php

namespace App\Services;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ShopifyProductAdapter
{
    /**
     * Map dữ liệu từ Shopify JSON response sang Product model
     *
     * @param array $shopifyData
     * @return Product
     */
    public function mapToProduct(array $shopifyData): Product
    {
        $nodeData = $shopifyData['node'] ?? $shopifyData;

        return new Product([
            'shopify_id' => $this->extractShopifyId($nodeData['id']),
            'slug' => $this->generateSlug($nodeData['title'] ?? ''),
            'title' => $nodeData['title'] ?? null,
            'tags' => $nodeData['tags'] ?? [],
            'vendor' => $nodeData['vendor'] ?? null,
            'featured_image_url' => $nodeData['featuredImage']['url'] ?? null,
            'featured_image_width' => $nodeData['featuredImage']['width'] ?? null,
            'featured_image_height' => $nodeData['featuredImage']['height'] ?? null,
            'featured_image_alt_text' => $nodeData['featuredImage']['altText'] ?? null,
            'min_price' => $this->extractPrice($nodeData['priceRange']['minVariantPrice'] ?? null),
            'max_price' => $this->extractPrice($nodeData['priceRange']['maxVariantPrice'] ?? null),
            'currency_code' => $nodeData['priceRange']['minVariantPrice']['currencyCode'] ?? 'VND',
            'description' => $nodeData['description'] ?? null,
            'images' => $this->mapImages($nodeData['images'] ?? []),
            'variants' => $this->mapVariants($nodeData['variants'] ?? []),
            'metafields' => $nodeData['metafields'] ?? [],
            'shopify_updated_at' => $this->parseShopifyDate($nodeData['updatedAt'] ?? null),
        ]);
    }

    /**
     * Map nhiều sản phẩm từ Shopify response
     *
     * @param array $shopifyResponse
     * @return array
     */
    public function mapMultipleProducts(array $shopifyResponse): array
    {
        $products = [];
        $edges = $shopifyResponse['data']['products']['edges'] ?? [];

        foreach ($edges as $edge) {
            $products[] = $this->mapToProduct($edge);
        }

        return $products;
    }

    /**
     * Tạo hoặc cập nhật Product từ Shopify data
     *
     * @param array $shopifyData
     * @return Product
     */
    public function createOrUpdateProduct(array $shopifyData): Product
    {
        $nodeData = $shopifyData['node'] ?? $shopifyData;
        $shopifyId = $this->extractShopifyId($nodeData['id']);

        $productData = [
            'shopify_id' => $shopifyId,
            'slug' => $this->generateSlug($nodeData['title'] ?? ''),
            'title' => $nodeData['title'] ?? null,
            'tags' => $nodeData['tags'] ?? [],
            'vendor' => $nodeData['vendor'] ?? null,
            'featured_image_url' => $nodeData['featuredImage']['url'] ?? null,
            'featured_image_width' => $nodeData['featuredImage']['width'] ?? null,
            'featured_image_height' => $nodeData['featuredImage']['height'] ?? null,
            'featured_image_alt_text' => $nodeData['featuredImage']['altText'] ?? null,
            'min_price' => $this->extractPrice($nodeData['priceRange']['minVariantPrice'] ?? null),
            'max_price' => $this->extractPrice($nodeData['priceRange']['maxVariantPrice'] ?? null),
            'currency_code' => $nodeData['priceRange']['minVariantPrice']['currencyCode'] ?? 'VND',
            'description' => $nodeData['description'] ?? null,
            'images' => $this->mapImages($nodeData['media'] ?? []),
            'variants' => $this->mapVariants($nodeData['variants'] ?? []),
            'metafields' => $nodeData['metafields'] ?? [],
            'shopify_updated_at' => $this->parseShopifyDate($nodeData['updatedAt'] ?? null),
        ];
        return Product::updateOrCreate(
            ['shopify_id' => $shopifyId],
            $productData
        );
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
     * Map images data
     *
     * @param array $imagesData
     * @return array
     */
    private function mapImages(array $imagesData): array
    {
        $images = [];
        $edges = $imagesData['edges'] ?? $imagesData;

        foreach ($edges as $edge) {
            $imageNode = $edge['node'] ?? $edge;
            $images[] = [
                'id' => $imageNode['id'] ?? null,
                'image' => $imageNode['image']['originalSrc'] ?? null,
                'altText' => $imageNode['image']['altText'] ?? null,
            ];
        }

        return $images;
    }

    /**
     * Map variants data
     *
     * @param array $variantsData
     * @return array
     */
    private function mapVariants(array $variantsData): array
    {
        $variants = [];
        $edges = $variantsData['edges'] ?? $variantsData;

        foreach ($edges as $edge) {
            $variantNode = $edge['node'] ?? $edge;
            $variants[] = [
                'id' => $this->extractShopifyId($variantNode['id'] ?? null),
                'title' => $variantNode['title'] ?? null,
                'price' => $this->extractPrice($variantNode['price'] ?? null),
                'sku' => $variantNode['sku'] ?? null,
                'inventoryQuantity' => $variantNode['inventoryQuantity'] ?? null,
                'available' => $variantNode['availableForSale'] ?? false,
                'weight' => $variantNode['weight'] ?? null,
                'weightUnit' => $variantNode['weightUnit'] ?? null,
            ];
        }

        return $variants;
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
