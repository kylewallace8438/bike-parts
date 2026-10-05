<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponentTemplate extends Model
{
    protected $table = 'component_templates';

    protected $fillable = [
        'bike_type',
        'component_key',
        'name_vi',
        'default_interval_km',
        'default_interval_days',
        'warning_threshold_pct',
        'description',
    ];

    protected $casts = [
        'warning_threshold_pct' => 'integer',
        'default_interval_km' => 'integer',
        'default_interval_days' => 'integer',
    ];
}
