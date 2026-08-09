<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Garage extends Model
{
    protected $fillable = [
        'user_id',
        'namer',
        'location',
        'longitude',
        'latitude',
        'contact_number',
        'email',
        'description',
        'services_offered',
        'images',
    ];

    protected $casts = [
        'longitude' => 'double',
        'latitude' => 'double',
        'services_offered' => 'array',
        'images' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
