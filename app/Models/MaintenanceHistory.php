<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class MaintenanceHistory extends Model
{
    protected $fillable = [
        'bike_plate',
        'bike_model',
        'bike_brand',
        'rental_bike_id',
        'maintenance_date',
        'maintenance_type',
        'priority',
        'description',
        'parts_replaced',
        'services_performed',
        'labor_cost',
        'parts_cost',
        'total_cost',
        'technician_name',
        'technician_id',
        'workshop_location',
        'mileage_at_maintenance',
        'hours_at_maintenance',
        'status',
        'scheduled_date',
        'completed_date',
        'notes',
        'before_images',
        'after_images',
        'customer_complaint',
        'technician_findings',
        'recommendations',
        'next_maintenance_due',
        'warranty_status',
        'warranty_months_remaining',
    ];

    protected $casts = [
        'maintenance_date' => 'date',
        'scheduled_date' => 'date',
        'completed_date' => 'date',
        'next_maintenance_due' => 'date',
        'parts_replaced' => 'array',
        'services_performed' => 'array',
        'before_images' => 'array',
        'after_images' => 'array',
        'labor_cost' => 'decimal:2',
        'parts_cost' => 'decimal:2',
        'total_cost' => 'decimal:2',
    ];

    // Maintenance type constants
    const TYPE_ROUTINE = 'routine';
    const TYPE_REPAIR = 'repair';
    const TYPE_EMERGENCY = 'emergency';
    const TYPE_INSPECTION = 'inspection';
    const TYPE_UPGRADE = 'upgrade';
    const TYPE_RECALL = 'recall';

    // Priority constants
    const PRIORITY_LOW = 'low';
    const PRIORITY_NORMAL = 'normal';
    const PRIORITY_HIGH = 'high';
    const PRIORITY_URGENT = 'urgent';

    // Status constants
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELLED = 'cancelled';

    // Warranty status constants
    const WARRANTY_UNDER = 'under_warranty';
    const WARRANTY_EXPIRED = 'expired';
    const WARRANTY_NOT_APPLICABLE = 'not_applicable';

    /**
     * Relationship với rental bike (nếu có)
     */
    public function rentalBike(): BelongsTo
    {
        return $this->belongsTo(RentalBike::class);
    }

    /**
     * Tính thời gian từ maintenance này đến hiện tại
     */
    public function getDaysFromMaintenanceAttribute(): int
    {
        return $this->maintenance_date->diffInDays(now());
    }

    /**
     * Kiểm tra có quá hạn bảo trì tiếp theo không
     */
    public function isNextMaintenanceOverdue(): bool
    {
        if (!$this->next_maintenance_due) {
            return false;
        }

        return now()->gt($this->next_maintenance_due);
    }

    /**
     * Tính chi phí trung bình cho loại bảo trì này
     */
    public static function getAverageCostByType(string $type): float
    {
        return self::where('maintenance_type', $type)
            ->where('status', self::STATUS_COMPLETED)
            ->avg('total_cost') ?? 0;
    }

    /**
     * Lấy lịch sử bảo trì của một biển số xe
     */
    public static function getHistoryByPlate(string $bikePlate): \Illuminate\Database\Eloquent\Collection
    {
        return self::where('bike_plate', $bikePlate)
            ->orderBy('maintenance_date', 'desc')
            ->get();
    }

    /**
     * Lấy bảo trì gần nhất của một biển số xe
     */
    public static function getLastMaintenanceByPlate(string $bikePlate): ?self
    {
        return self::where('bike_plate', $bikePlate)
            ->where('status', self::STATUS_COMPLETED)
            ->orderBy('maintenance_date', 'desc')
            ->first();
    }

    /**
     * Lấy danh sách xe cần bảo trì
     */
    public static function getBikesDueForMaintenance(): \Illuminate\Database\Eloquent\Collection
    {
        return self::whereNotNull('next_maintenance_due')
            ->where('next_maintenance_due', '<=', now())
            ->where('status', self::STATUS_COMPLETED)
            ->orderBy('next_maintenance_due', 'asc')
            ->get();
    }

    /**
     * Scope: By bike plate
     */
    public function scopeByPlate($query, string $plate)
    {
        return $query->where('bike_plate', $plate);
    }

    /**
     * Scope: By maintenance type
     */
    public function scopeByType($query, string $type)
    {
        return $query->where('maintenance_type', $type);
    }

    /**
     * Scope: By status
     */
    public function scopeByStatus($query, string $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope: Completed maintenance
     */
    public function scopeCompleted($query)
    {
        return $query->where('status', self::STATUS_COMPLETED);
    }

    /**
     * Scope: Scheduled maintenance
     */
    public function scopeScheduled($query)
    {
        return $query->where('status', self::STATUS_SCHEDULED);
    }

    /**
     * Scope: By date range
     */
    public function scopeByDateRange($query, Carbon $startDate, Carbon $endDate)
    {
        return $query->whereBetween('maintenance_date', [$startDate, $endDate]);
    }

    /**
     * Scope: By technician
     */
    public function scopeByTechnician($query, string $technicianId)
    {
        return $query->where('technician_id', $technicianId);
    }

    /**
     * Scope: High priority
     */
    public function scopeHighPriority($query)
    {
        return $query->whereIn('priority', [self::PRIORITY_HIGH, self::PRIORITY_URGENT]);
    }

    /**
     * Scope: Overdue for next maintenance
     */
    public function scopeOverdueForNextMaintenance($query)
    {
        return $query->whereNotNull('next_maintenance_due')
            ->where('next_maintenance_due', '<', now())
            ->where('status', self::STATUS_COMPLETED);
    }

    /**
     * Tạo maintenance record từ rental bike
     */
    public static function createFromRentalBike(RentalBike $bike, array $maintenanceData): self
    {
        return self::create(array_merge([
            'bike_plate' => $bike->qr_code, // Assuming QR code is used as plate
            'bike_model' => $bike->model,
            'bike_brand' => $bike->brand,
            'rental_bike_id' => $bike->id,
            'mileage_at_maintenance' => $bike->total_distance,
            'hours_at_maintenance' => $bike->total_ride_hours,
        ], $maintenanceData));
    }

    /**
     * Calculate total maintenance cost for a bike plate
     */
    public static function getTotalMaintenanceCostByPlate(string $bikePlate): float
    {
        return self::where('bike_plate', $bikePlate)
            ->where('status', self::STATUS_COMPLETED)
            ->sum('total_cost');
    }

    /**
     * Get maintenance frequency for a bike plate
     */
    public static function getMaintenanceFrequencyByPlate(string $bikePlate): array
    {
        $maintenances = self::where('bike_plate', $bikePlate)
            ->where('status', self::STATUS_COMPLETED)
            ->orderBy('maintenance_date')
            ->get();

        if ($maintenances->count() < 2) {
            return ['frequency_days' => null, 'total_maintenances' => $maintenances->count()];
        }

        $firstDate = $maintenances->first()->maintenance_date;
        $lastDate = $maintenances->last()->maintenance_date;
        $totalDays = $firstDate->diffInDays($lastDate);
        $frequencyDays = $totalDays / ($maintenances->count() - 1);

        return [
            'frequency_days' => round($frequencyDays, 1),
            'total_maintenances' => $maintenances->count(),
            'period_days' => $totalDays,
        ];
    }
}
