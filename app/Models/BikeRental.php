<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class BikeRental extends Model
{
    protected $fillable = [
        'rental_bike_id',
        'user_id',
        'start_time',
        'end_time',
        'actual_end_time',
        'rental_type',
        'base_price',
        'additional_fees',
        'discount',
        'total_price',
        'status',
        'payment_status',
        'payment_method',
        'pickup_location',
        'return_location',
        'notes',
        'damage_report',
        'damage_fee',
        'rating',
        'review',
        'distance_traveled',
        'route_data',
        'cancelled_at',
        'cancelled_by',
        'cancellation_reason',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'actual_end_time' => 'datetime',
        'cancelled_at' => 'datetime',
        'base_price' => 'decimal:2',
        'additional_fees' => 'decimal:2',
        'discount' => 'decimal:2',
        'total_price' => 'decimal:2',
        'damage_fee' => 'decimal:2',
        'distance_traveled' => 'decimal:2',
        'route_data' => 'array',
    ];

    // Status constants
    const STATUS_PENDING = 'pending';
    const STATUS_CONFIRMED = 'confirmed';
    const STATUS_ACTIVE = 'active';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELLED = 'cancelled';

    // Payment status constants
    const PAYMENT_UNPAID = 'unpaid';
    const PAYMENT_PAID = 'paid';
    const PAYMENT_REFUNDED = 'refunded';
    const PAYMENT_PARTIALLY_REFUNDED = 'partially_refunded';

    // Rental type constants
    const TYPE_HOURLY = 'hourly';
    const TYPE_DAILY = 'daily';
    const TYPE_WEEKLY = 'weekly';
    const TYPE_MONTHLY = 'monthly';

    /**
     * Relationship với rental bike
     */
    public function rentalBike(): BelongsTo
    {
        return $this->belongsTo(RentalBike::class);
    }

    /**
     * Relationship với user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Tính thời gian thuê (hours)
     */
    public function getDurationInHours(): float
    {
        $endTime = $this->actual_end_time ?? $this->end_time;

        if (!$endTime) {
            return 0;
        }

        return $this->start_time->diffInHours($endTime, true);
    }

    /**
     * Tính thời gian thuê (days)
     */
    public function getDurationInDays(): float
    {
        $hours = $this->getDurationInHours();
        return $hours / 24;
    }

    /**
     * Kiểm tra có quá hạn không
     */
    public function isOverdue(): bool
    {
        if ($this->status !== self::STATUS_ACTIVE) {
            return false;
        }

        return now()->gt($this->end_time);
    }

    /**
     * Tính phí quá hạn
     */
    public function getOverdueFee(): float
    {
        if (!$this->isOverdue()) {
            return 0;
        }

        $overdueHours = now()->diffInHours($this->end_time);
        $hourlyRate = $this->rentalBike->hourly_rate;

        // Phí quá hạn = 1.5x giá thuê thường
        return $overdueHours * $hourlyRate * 1.5;
    }

    /**
     * Tính tổng phí (bao gồm phí phát sinh)
     */
    public function calculateTotalPrice(): float
    {
        $total = $this->base_price + $this->additional_fees + $this->damage_fee - $this->discount;

        if ($this->isOverdue()) {
            $total += $this->getOverdueFee();
        }

        return $total;
    }

    /**
     * Cập nhật status
     */
    public function updateStatus(string $status): void
    {
        $this->status = $status;

        if ($status === self::STATUS_ACTIVE) {
            // Cập nhật status xe thành rented
            $this->rentalBike->update(['status' => RentalBike::STATUS_RENTED]);
        } elseif ($status === self::STATUS_COMPLETED || $status === self::STATUS_CANCELLED) {
            // Cập nhật status xe thành available
            $this->rentalBike->update(['status' => RentalBike::STATUS_AVAILABLE]);
        }

        $this->save();
    }

    /**
     * Scope: Active rentals
     */
    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    /**
     * Scope: Completed rentals
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', self::STATUS_COMPLETED);
    }

    /**
     * Scope: By user
     */
    public function scopeByUser($query, int $userId)
    {
        return $query->where('user_id', $userId);
    }

    /**
     * Scope: By bike
     */
    public function scopeByBike($query, int $bikeId)
    {
        return $query->where('rental_bike_id', $bikeId);
    }

    /**
     * Scope: Overdue rentals
     */
    public function scopeOverdue($query)
    {
        return $query->where('status', self::STATUS_ACTIVE)
            ->where('end_time', '<', now());
    }
}
