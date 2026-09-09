<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'binshops_blog_posts';

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'posted_at'     => 'datetime',
            'is_published'  => 'boolean',
        ];
    }

    public function scopeIsPublished($query)
    {
        return $query->where('is_published', 1);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(
            BlogCategory::class,
            'binshops_blog_post_categories',
            'binshops_blog_post_id',
            'binshops_blog_category_id'
        );
    }

    public function image_url($size = 'medium')
    {
        $column = match ((string) $size) {
            'large'        => 'image_large',
            'thumbnail'    => 'image_thumbnail',
            default        => 'image_medium',
        };

        $value = (string) $this->getAttribute($column);

        if ($value === '') {
            $fallbacks = [
                'large'     => 'store/image/home1/blog/blog-big.jpg',
                'thumbnail' => 'store/image/home1/blog/blog-mini-1.jpg',
                'medium'    => 'store/image/home1/blog/blog-1.jpg',
            ];
            return asset($fallbacks[$column] ?? $fallbacks['medium']);
        }

        if (preg_match('#^https?://#i', $value)) {
            return $value;
        }

        return asset(ltrim($value, '/'));
    }
}
