<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::paginate(12);
        return view('products', [
            'products' => $products,
            'sale_banner' => false
        ]);
    }

    public function getProduct($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->first();
        if (! $product) {
            abort(404);
        }
        $last_viewed_products_session = Session::get('last_viewed_products', []);
        $last_viewed_products = collect($last_viewed_products_session)->push($product)->unique(function ($item) {
            return $item['shopify_id'];
        })->toArray();
        Session::put('last_viewed_products', $last_viewed_products);
        return view('product', [
            'product' => $product
        ]);
    }
}
