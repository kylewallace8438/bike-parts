<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    public $fillable = [
        'slug',
        'translation',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category_product', 'category_id', 'product_id', 'id', 'shopify_id');
    }
}
