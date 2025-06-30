<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function getProduct($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->first();
        if (! $product) {
            abort(404);
        }
        return view('product', [
            'product' => $product
        ]);
    }
}
