<?php

namespace App\Http\Controllers;

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
        header('Link: <'.config('app.url').'/app/default.css>; rel=preload; as=style', false);
        header('Link: <'.config('app.url').'/app/index.css>; rel=preload; as=style', false);
        header('Link: <'.config('app.url').'/app/app.js>; rel=modulepreload; as=script', false);
        header('Link: <'.config('app.url').'/app/ktm_bg.webp>; rel=preload; as=image; type=image/webp; fetchpriority=high', false);
        header('Link: <'.config('app.url').'/app/hero-bg.png>; rel=preload; as=image; type=image/png; fetchpriority=high', false);
        return view('home');
    }
}
