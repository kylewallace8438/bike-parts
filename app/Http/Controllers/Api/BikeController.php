<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BikeModel;
use App\Models\BikePart;
use App\Models\Brand;
use App\Models\Category;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    protected ApiClientInterface $apiClient;

    public function __construct(ApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function test()
    {
        $response = $this->apiClient->rest()->get('/products.json');
        dd($response);
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
