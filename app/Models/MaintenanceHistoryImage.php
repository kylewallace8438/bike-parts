<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceHistoryImage extends Model
{
    protected $table = 'maintenance_history_images';

    protected $fillable = [
        'maintenance_history_id',
        'image_path',
    ];

    public function maintenanceHistory()
    {
        return $this->belongsTo(MaintenanceHistory::class);
    }
}
