<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $message = app()->getLocale() == 'vi' ? 'Miễn phí vận chuyển cho đơn hàng trên 5 triệu đồng!' : 'Free shipping for orders over 5 million VND!';
        return view('home', [
            'top_products' => $top_products,
            'message' => $message
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
