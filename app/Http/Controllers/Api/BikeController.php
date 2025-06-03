<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BikeModel;
use App\Models\BikePart;
use App\Models\Brand;
use App\Models\Category;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Http\Request;
use Shopify\Clients\Graphql;
use Shopify\Clients\Rest;
use Shopify\Context;

class BikeController extends Controller
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
                query GetProduct($id: ID!) {
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
                            }
                        }
                        collections(first: 10) {
                            nodes {
                                id
                                title
                            }
                        }
                    }
                }
            ',
            'variables' => [
                'id' => "gid://shopify/Product/{$id}"
            ]
        ]);
        return response()->json([
            'data' => data_get($response->getDecodedBody(), 'data.product')
        ]);
    }

    public function showBrandCategory(Request $request, $brand_id)
    {
        $brand = Brand::where('id', $brand_id)->first();
        $bikes = $brand->bikes()->get();
        return response()->json([
            'bikes' => $bikes
        ]);
    }
    public function handleSearchKTM(Request $request, $brand, $category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $bike_model = $category->bike()->first();
        $bike_parts = BikePart::where('category_id', $category_id)->get();

        return response()->json([
            'bike_parts' => $bike_parts,
            'category_name' => $category->translate,
            'category_image' => $category ? $category->image_url : '',
            'bike_model' => $bike_model->name,
        ]);
    }
}
