<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    protected ApiClientInterface $apiClient;

    public function __construct(ApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }
    public function getProducts(Request $request)
    {
        $startCursor = $request->get('startCursor');
        $endCursor = $request->get('endCursor');
        $limit = config('shopify.limit_pagination');
        $edgesQuery = '
            edges {
                cursor
                node {
                    id
                    title
                    tags
                    vendor
                    featuredImage {
                        url
                        width
                        height
                        altText
                    }
                    priceRange {
                        minVariantPrice {
                            amount
                            currencyCode
                        }
                        maxVariantPrice {
                            amount
                            currencyCode
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
        if ($startCursor) {
            $cursor = $startCursor;
            $query = 'query GetProducts($limit: Int!, $cursor: String!, $reverse: Boolean) {
                products(reverse: $reverse, last: $limit, before: $cursor) {
                    ' . $edgesQuery . '
                }
            }';
        } else if ($endCursor) {
            $cursor = $endCursor;
            $query = 'query GetProducts($limit: Int!, $cursor: String!, $reverse: Boolean) {
                products(reverse: $reverse, first: $limit, after: $cursor) {
                    ' . $edgesQuery . '
                }
            }';
        } else {
            $cursor = null;
            $query = 'query GetProducts($limit: Int!, $reverse: Boolean) {
                products(reverse: $reverse, first: $limit) {
                    ' . $edgesQuery . '
                }
            }';
        }
        $queryData = [
            'query' => $query,
            'variables' => [
                'limit' => $limit,
                'reverse' => true
            ]
        ];
        if ($cursor) {
            $queryData['variables']['cursor'] = $cursor;
        }
        $response = $this->apiClient->graphql()->query($queryData);
        $products = data_get($response->getDecodedBody(), 'data.products.edges');
        $pageInfo = data_get($response->getDecodedBody(), 'data.products.pageInfo');
        $list_id = collect($products)->pluck('node.id')->map(function ($item) {
            return basename($item);
        })->toArray();
        $local_products = Product::whereIn('shopify_id', $list_id)->get(['shopify_id', 'slug']);
        foreach ($products as $key => $product) {
            foreach ($local_products as $local_product) {
                if (basename($product['node']['id']) == $local_product->shopify_id) {
                    $products[$key]['node']['slug'] = $local_product->slug;
                }
            }
        }
        return response()->json([
            'data' => $products,
            'pageInfo' => $pageInfo
        ]);
    }

    public function getProduct($id, Request $request)
    {
        $response = $this->apiClient->graphql()->query([
            'query' => '
                query GetProductWithMetafieldsAndMetaobjects($id: ID!, $namespace: String!) {
                    product(id: $id) {
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
            ',
            'variables' => [
                'id' => "gid://shopify/Product/{$id}",
                'namespace' => 'custom'
            ]
        ]);
        return response()->json([
            'data' => data_get($response->getDecodedBody(), 'data.product')
        ]);
    }

    public function listenProductUpdate(Request $request)
    {
        Log::info('request', $request);
    }
}
