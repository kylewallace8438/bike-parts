<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    
    protected $fillable = [
        'slug',
        'translation',
    ];

    protected $casts = [
        'translation' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category_product', 'product_category_id', 'product_shopify_id', 'id', 'shopify_id');
    }
}
