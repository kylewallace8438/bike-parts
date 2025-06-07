<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ApiClientInterface $apiClient;

    public function __construct(ApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }
    public function getProducts()
    {
        $limit = config('shopify.limit_pagination');

        $response = $this->apiClient->graphql()->query([
            'query' => 'query GetFirst10Products($first: Int!, $after: String, $reverse: Boolean) {
                products(first: $first, reverse: $reverse, after: $after) {
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
                }
            }',
            'variables' => [
                'first' => $limit,
                'after' => null,
                'reverse' => false
            ]
        ]);
        return response()->json([
            'data' => data_get($response->getDecodedBody(), 'data.products.edges')
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
}
