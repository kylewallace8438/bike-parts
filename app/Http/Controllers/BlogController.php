<?php

namespace App\Http\Controllers;

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
        // Logic to fetch and display a single blog post by slug
        // return view('blogs.show', ['slug' => $slug]);
    }
}
