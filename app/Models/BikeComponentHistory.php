<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BikeComponentHistory extends Model
{
    protected $table = 'bike_component_histories';

    protected $fillable = [
        'bike_id',
        'component_key',
        'old_part_name',
        'new_part_name',
        'replaced_odo',
        'replaced_date',
        'cost',
        'garage_name',
        'receipt_image_path',
        'notes',
    ];

    protected $casts = [
        'replaced_date' => 'date',
        'cost' => 'decimal:2',
        'replaced_odo' => 'integer',
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}
