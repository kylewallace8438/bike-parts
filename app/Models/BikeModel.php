<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BikeModel extends Model
{
    public $fillable = [
        'name', 'slug', 'year', 'brand_id', 'description', 'image_url'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'bike_model_id', 'id');
    }
}
