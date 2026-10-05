<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BikeComponent extends Model
{
    protected $table = 'bike_components';

    protected $fillable = [
        'bike_id',
        'component_key',
        'custom_name',
        'specifications',
        'installed_odo',
        'installed_date',
        'interval_km',
        'interval_days',
        'warranty_months',
        'warranty_expiry_date',
        'status',
        'notes',
    ];

    protected $casts = [
        'installed_date' => 'date',
        'warranty_expiry_date' => 'date',
        'installed_odo' => 'integer',
        'interval_km' => 'integer',
        'interval_days' => 'integer',
        'warranty_months' => 'integer',
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }

    public function histories()
    {
        return $this->hasMany(BikeComponentHistory::class, 'bike_id', 'bike_id')
            ->where('component_key', $this->component_key);
    }
}
