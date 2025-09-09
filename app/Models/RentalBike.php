<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentalBike extends Model
{

    protected $fillable = [
        'name',
        'model',
        'brand',
        'description',
        'color',
        'size',
        'type',
        'hourly_rate',
        'daily_rate',
        'weekly_rate',
        'monthly_rate',
        'features',
        'images',
        'status',
        'condition',
        'battery_level',
        'location',
        'qr_code',
        'last_maintenance_date',
        'next_maintenance_date',
        'total_ride_hours',
        'total_distance',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'images' => 'array',
        'hourly_rate' => 'decimal:2',
        'daily_rate' => 'decimal:2',
        'weekly_rate' => 'decimal:2',
        'monthly_rate' => 'decimal:2',
        'total_distance' => 'decimal:2',
        'last_maintenance_date' => 'date',
        'next_maintenance_date' => 'date',
        'is_active' => 'boolean',
    ];

    // Status constants
    const STATUS_AVAILABLE = 'available';
    const STATUS_RENTED = 'rented';
    const STATUS_MAINTENANCE = 'maintenance';
    const STATUS_OUT_OF_SERVICE = 'out_of_service';

    // Condition constants
    const CONDITION_EXCELLENT = 'excellent';
    const CONDITION_GOOD = 'good';
    const CONDITION_FAIR = 'fair';
    const CONDITION_POOR = 'poor';

    // Type constants
    const TYPE_MOUNTAIN = 'mountain';
    const TYPE_ROAD = 'road';
    const TYPE_HYBRID = 'hybrid';
    const TYPE_ELECTRIC = 'electric';
    const TYPE_BMX = 'bmx';
    const TYPE_CRUISER = 'cruiser';

    /**
     * Relationship với bike rentals
     */
    public function rentals(): HasMany
    {
        return $this->hasMany(BikeRental::class);
    }

    /**
     * Relationship với bike availability
     */
    public function availability(): HasMany
    {
        return $this->hasMany(BikeAvailability::class);
    }

    /**
     * Relationship với maintenance histories
     */
    public function maintenanceHistories(): HasMany
    {
        return $this->hasMany(MaintenanceHistory::class);
    }

    /**
     * Lấy rental hiện tại (active)
     */
    public function currentRental()
    {
        return $this->rentals()
            ->where('status', BikeRental::STATUS_ACTIVE)
            ->first();
    }

    /**
     * Kiểm tra xe có đang được thuê không
     */
    public function isCurrentlyRented(): bool
    {
        return $this->currentRental() !== null;
    }

    /**
     * Kiểm tra xe có available không trong khoảng thời gian
     */
    public function isAvailableForPeriod(\DateTime $startTime, \DateTime $endTime): bool
    {
        // Kiểm tra status của xe
        if ($this->status !== self::STATUS_AVAILABLE || !$this->is_active) {
            return false;
        }

        // Kiểm tra có rental nào conflict không
        $conflictingRentals = $this->rentals()
            ->where('status', '!=', BikeRental::STATUS_CANCELLED)
            ->where('status', '!=', BikeRental::STATUS_COMPLETED)
            ->where(function ($query) use ($startTime, $endTime) {
                $query->whereBetween('start_time', [$startTime, $endTime])
                    ->orWhereBetween('end_time', [$startTime, $endTime])
                    ->orWhere(function ($subQuery) use ($startTime, $endTime) {
                        $subQuery->where('start_time', '<=', $startTime)
                            ->where('end_time', '>=', $endTime);
                    });
            })
            ->exists();

        return !$conflictingRentals;
    }

    /**
     * Lấy availability cho một ngày cụ thể
     */
    public function getAvailabilityForDate(\DateTime $date)
    {
        return $this->availability()
            ->whereDate('date', $date->format('Y-m-d'))
            ->first();
    }

    /**
     * Tính giá thuê theo loại
     */
    public function getRateByType(string $type): float
    {
        return match ($type) {
            'hourly' => $this->hourly_rate,
            'daily' => $this->daily_rate,
            'weekly' => $this->weekly_rate ?? $this->daily_rate * 7 * 0.9, // 10% discount
            'monthly' => $this->monthly_rate ?? $this->daily_rate * 30 * 0.8, // 20% discount
            default => $this->hourly_rate,
        };
    }

    /**
     * Scope: Xe available
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', self::STATUS_AVAILABLE)
            ->where('is_active', true);
    }

    /**
     * Scope: Theo type
     */
    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope: Theo location
     */
    public function scopeByLocation($query, string $location)
    {
        return $query->where('location', $location);
    }

    /**
     * Get first image URL
     */
    public function getFirstImageAttribute(): ?string
    {
        $images = $this->images;
        return is_array($images) && count($images) > 0 ? $images[0] : null;
    }

    /**
     * Check if bike needs maintenance
     */
    public function needsMaintenance(): bool
    {
        if (!$this->next_maintenance_date) {
            return false;
        }

        return now()->gte($this->next_maintenance_date);
    }
}
