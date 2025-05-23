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
        return view('home');
    }
}
