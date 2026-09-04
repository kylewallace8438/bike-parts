<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $fillable = [
        'slug',
        'title',
        'tags',
        'vendor',
        'featured_image_url',
        'featured_image_width',
        'featured_image_height',
        'featured_image_alt_text',
        'min_price',
        'max_price',
        'currency_code',
        'description',
        'images',
        'variants',
        'metafields',
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
        'variants' => 'array',
        'metafields' => 'array',
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
    ];

    public function product_categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_product', 'product_id', 'product_category_id', 'id', 'id');
    }
}
