<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'shopify_id';
    public $fillable = [
        'shopify_id',
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
        'shopify_updated_at'
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
        'variants' => 'array',
        'metafields' => 'array',
        'shopify_updated_at' => 'datetime',
        'min_price' => 'decimal:2',
        'max_price' => 'decimal:2',
    ];
}
