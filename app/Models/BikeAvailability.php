<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class BikeAvailability extends Model
{
    protected $table = 'bike_availability';

    protected $fillable = [
        'rental_bike_id',
        'date',
        'start_time',
        'end_time',
        'status',
        'reason',
        'special_price',
        'is_peak_time',
        'notes',
    ];

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime:H:i:s',
        'end_time' => 'datetime:H:i:s',
        'special_price' => 'decimal:2',
        'is_peak_time' => 'boolean',
    ];

    // Status constants
    const STATUS_AVAILABLE = 'available';
    const STATUS_UNAVAILABLE = 'unavailable';
    const STATUS_MAINTENANCE = 'maintenance';
    const STATUS_RESERVED = 'reserved';

    /**
     * Relationship với rental bike
     */
    public function rentalBike(): BelongsTo
    {
        return $this->belongsTo(RentalBike::class);
    }

    /**
     * Kiểm tra available trong khoảng thời gian
     */
    public function isAvailableForTime(\DateTime $startTime, \DateTime $endTime): bool
    {
        if ($this->status !== self::STATUS_AVAILABLE) {
            return false;
        }

        $requestStartTime = $startTime->format('H:i:s');
        $requestEndTime = $endTime->format('H:i:s');

        return $requestStartTime >= $this->start_time->format('H:i:s') &&
               $requestEndTime <= $this->end_time->format('H:i:s');
    }

    /**
     * Lấy giá cho thời gian này (special price hoặc regular price)
     */
    public function getEffectivePrice(string $rateType): float
    {
        if ($this->special_price) {
            return $this->special_price;
        }

        return $this->rentalBike->getRateByType($rateType);
    }

    /**
     * Scope: Available
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', self::STATUS_AVAILABLE);
    }

    /**
     * Scope: By date
     */
    public function scopeByDate($query, \DateTime $date)
    {
        return $query->whereDate('date', $date->format('Y-m-d'));
    }

    /**
     * Scope: Peak times
     */
    public function scopePeakTime($query)
    {
        return $query->where('is_peak_time', true);
    }

    /**
     * Tạo availability cho multiple dates
     */
    public static function createForDateRange(int $bikeId, \DateTime $startDate, \DateTime $endDate, array $data = []): void
    {
        $currentDate = clone $startDate;

        while ($currentDate <= $endDate) {
            self::updateOrCreate(
                [
                    'rental_bike_id' => $bikeId,
                    'date' => $currentDate->format('Y-m-d'),
                ],
                array_merge([
                    'status' => self::STATUS_AVAILABLE,
                    'start_time' => '00:00:00',
                    'end_time' => '23:59:59',
                ], $data)
            );

            $currentDate->modify('+1 day');
        }
    }

    /**
     * Block availability cho một khoảng thời gian
     */
    public static function blockAvailability(int $bikeId, \DateTime $startDateTime, \DateTime $endDateTime, string $reason = 'reserved'): void
    {
        $startDate = clone $startDateTime;
        $startDate->setTime(0, 0, 0);

        $endDate = clone $endDateTime;
        $endDate->setTime(23, 59, 59);

        $currentDate = clone $startDate;

        while ($currentDate <= $endDate) {
            self::updateOrCreate(
                [
                    'rental_bike_id' => $bikeId,
                    'date' => $currentDate->format('Y-m-d'),
                ],
                [
                    'status' => self::STATUS_RESERVED,
                    'reason' => $reason,
                    'start_time' => $currentDate->format('Y-m-d') === $startDateTime->format('Y-m-d') ? $startDateTime->format('H:i:s') : '00:00:00',
                    'end_time' => $currentDate->format('Y-m-d') === $endDateTime->format('Y-m-d') ? $endDateTime->format('H:i:s') : '23:59:59',
                ]
            );

            $currentDate->modify('+1 day');
        }
    }
}
