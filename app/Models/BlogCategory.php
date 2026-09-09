<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'binshops_blog_categories';

    protected $guarded = [];

    public function posts()
    {
        return $this->belongsToMany(
            BlogPost::class,
            'binshops_blog_post_categories',
            'binshops_blog_category_id',
            'binshops_blog_post_id'
        );
    }
}
