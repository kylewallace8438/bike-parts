<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCategoryResource;
use App\Models\BlogPost;
use App\Models\Product;
use App\Models\ProductCategory;
use BinshopsBlog\Models\BinshopsBlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $top_products = Product::orderBy('created_at', 'desc')->take(5)->get();
        $blogs = BlogPost::isPulished()->orderBy('posted_at', 'desc')->take(5)->get();
        return view('home', [
            'top_products' => $top_products,
            'blogs' => $blogs,
        ]);
    }

    public function changeLanguage(Request $request)
    {
        $locale = $request->get('locale');
        if (in_array($locale, ['en', 'vi'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}
