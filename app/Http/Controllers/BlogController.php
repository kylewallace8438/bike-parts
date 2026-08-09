<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use BinshopsBlog\Models\BinshopsBlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Logic to fetch and display list of blog posts
        $blogs = BlogPost::isPublished()->paginate(10);
        return view('blogs', ['blogs' => $blogs]);
    }

    public function getBlog($slug)
    {
        $blog = BinshopsBlogPost::where('slug', $slug)->firstOrFail();
        return view('blog', ['blog' => $blog]);
    }
}
