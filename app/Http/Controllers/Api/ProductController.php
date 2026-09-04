<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request)
    {
        $products = Product::paginate($request->get('limit', 10));
        return ProductResource::collection($products);
    }

    public function getProduct($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return response()->json([
            'data' => $product
        ]);
    }
}
