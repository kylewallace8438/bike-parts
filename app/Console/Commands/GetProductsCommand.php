<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Services\ShopifyProductAdapter;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class GetProductsCommand extends Command
{
    private ShopifyProductAdapter $adapter;
    protected ApiClientInterface $apiClient;
    public function __construct(
        ApiClientInterface $apiClient,
        ShopifyProductAdapter $adapter
    )
    {
        $this->apiClient = $apiClient;
        $this->adapter = $adapter;
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-products-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $limit = config('shopify.limit_pagination');
        $hasNextPage = true;
        $edgesQuery = '
            edges {
                cursor
                node {
                    id
                    title
                    images(first: 5) {
                        nodes {
                            altText
                            id
                            url
                        }
                    }
                    tags
                    vendor
                    description
                    priceRange {
                        maxVariantPrice {
                            amount
                            currencyCode
                        }
                        minVariantPrice {
                            amount
                            currencyCode
                        }
                    }
                    variants(first: 10) {
                        nodes {
                            id
                            title
                            price
                        }
                    }
                    metafields(first: 1, namespace: $namespace) {
                        edges {
                            node {
                            id
                            namespace
                            key
                            value
                            type
                            reference {
                                ... on Metaobject {
                                    id
                                    fields {
                                        key
                                        value
                                    }
                                    type
                                    handle
                                    displayName
                                    updatedAt
                                    }
                                }
                            }
                        }
                    }
                }
            }
            pageInfo {
                hasNextPage
                hasPreviousPage
                startCursor
                endCursor
            }
        ';
        $query = 'query GetProducts($limit: Int!, $reverse: Boolean, $after: String, $namespace: String!) {
            products(reverse: $reverse, first: $limit, after: $after) {
                ' . $edgesQuery . '
            }
        }';

        // $queryData['variables']['cursor'] = $cursor ?? null;
        $cursor = null;
        while ($hasNextPage) {
            $queryData = [
                'query' => $query,
                'variables' => [
                    'limit' => $limit,
                    'reverse' => true,
                    'after' => $cursor,
                    'namespace' => 'custom'
                ]
            ];
            $response = $this->apiClient->graphql()->query($queryData);
            $pageInfo = Arr::get($response->getDecodedBody(), 'data.products.pageInfo');
            $cursor = Arr::get($pageInfo, 'endCursor');
            $hasNextPage = Arr::get($pageInfo, 'hasNextPage');
            $products = Arr::get($response->getDecodedBody(), 'data.products.edges');
            foreach ($products as $product) {
                // Product::updateOrCreate([
                //     'shopify_id' => basename($product['node']['id'])
                // ], [
                //     'shopify_id' => basename($product['node']['id']),
                //     'slug' => Str::slug($product['node']['title']),
                //     'title' => $product['node']['title'],
                //     'tags' => $product['node']['tags'],
                //     'vendor' => $product['node']['vendor'],
                //     'featured_image_url' => $product['node']['featuredImage']['url'] ?? null,
                //     'featured_image_width' => $product['node']['featuredImage']['width'] ?? null,
                //     'featured_image_height' => $product['node']['featuredImage']['height'] ?? null,
                //     'featured_image_alt_text' => $product['node']['featuredImage']['altText'] ?? null,
                //     'min_price' => $product['node']['priceRange']['minVariantPrice']['amount'] ?? null,
                //     'max_price' => $product['node']['priceRange']['maxVariantPrice']['amount'] ?? null,
                //     'currency_code' => $product['node']['priceRange']['minVariantPrice']['currencyCode'] ?? null,
                //     'description' => $product['node']['description'] ?? null,
                //     'images' => $product['node']['images'] ?? null,
                //     'variants' => $product['node']['variants'] ?? null,
                //     'metafields' => $product['node']['metafields'] ?? null,
                //     'shopify_updated_at' => now(),
                // ]);
                if (!$this->adapter->validateShopifyData($product)) {
                    $this->error('Invalid Shopify data format');
                    continue;
                }
                $this->adapter->createOrUpdateProduct($product);
            }
        }
    }
}
