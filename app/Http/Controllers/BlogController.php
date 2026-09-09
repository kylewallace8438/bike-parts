<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::isPublished()->paginate(10);
        return view('blogs', ['blogs' => $blogs]);
    }

    public function getBlog($slug)
    {
        $blog = BlogPost::where('slug', $slug)->firstOrFail();
        return view('blog', ['blog' => $blog]);
    }
}
