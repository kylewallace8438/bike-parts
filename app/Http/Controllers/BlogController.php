<?php

namespace App\Http\Controllers;

use BinshopsBlog\Models\BinshopsBlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Logic to fetch and display list of blog posts
        // return view('blogs.index');
    }

    public function getBlog($slug)
    {
        $blog = BinshopsBlogPost::where('slug', $slug)->firstOrFail();
        return view('blog', ['blog' => $blog]);
    }
}
