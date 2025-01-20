<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BikePart extends Model
{
    public $fillable = [
        'category_id', 'number', 'name', 'part', 'reference_price', 'translate'
    ];
}
