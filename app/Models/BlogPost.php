<?php

namespace App\Models;

use BinshopsBlog\Models\BinshopsBlogPost;

class BlogPost extends BinshopsBlogPost
{
    protected $table = 'binshops_blog_posts';
    
    public function scopeIsPulished($query)
    {
        return $query->where('is_published', 1);
    }
}
