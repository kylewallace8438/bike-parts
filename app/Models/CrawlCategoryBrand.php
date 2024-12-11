<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrawlCategoryBrand extends Model
{
    public $fillable = [
        'url', 'name', 'brand_id'
    ];
}
