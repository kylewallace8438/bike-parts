<?php

namespace App\Repositories;

use App\Models\RentalBike;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use DateTime;

class RentalBikeRepository
{
    protected RentalBike $model;

    public function __construct(RentalBike $model)
    {
        $this->model = $model;
    }

    /**
     * Get all rental bikes
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Find rental bike by ID
     */
    public function find(int $id): ?RentalBike
    {
        return $this->model->find($id);
    }

    /**
     * Find rental bike by ID with relationships
     */
    public function findWithRelations(int $id, array $relations = []): ?RentalBike
    {
        return $this->model->with($relations)->find($id);
    }

    /**
     * Find rental bike by QR code
     */
    public function findByQrCode(string $qrCode): ?RentalBike
    {
        return $this->model->where('qr_code', $qrCode)->first();
    }

    /**
     * Create a new rental bike
     */
    public function create(array $data): RentalBike
    {
        return $this->model->create($data);
    }

    /**
     * Update rental bike
     */
    public function update(int $id, array $data): bool
    {
        $bike = $this->find($id);
        
        if (!$bike) {
            return false;
        }

        return $bike->update($data);
    }

    /**
     * Delete rental bike
     */
    public function delete(int $id): bool
    {
        $bike = $this->find($id);
        
        if (!$bike) {
            return false;
        }

        return $bike->delete();
    }

    /**
     * Get available bikes with filters
     */
    public function getAvailable(array $filters = [], int $perPage = 15): LengthAwarePaginator
    {
        $query = $this->model->available();

        // Filter by type
        if (!empty($filters['type'])) {
            $query->where('type', $filters['type']);
        }

        // Filter by location
        if (!empty($filters['location'])) {
            $query->where('location', $filters['location']);
        }

        // Filter by brand
        if (!empty($filters['brand_id'])) {
            $query->where('brand_id', $filters['brand_id']);
        }

        // Filter by size
        if (!empty($filters['size'])) {
            $query->where('size', $filters['size']);
        }

        // Filter by condition
        if (!empty($filters['condition'])) {
            $query->where('condition', $filters['condition']);
        }

        // Filter by price range
        if (!empty($filters['min_price'])) {
            $query->where('daily_rate', '>=', $filters['min_price']);
        }

        if (!empty($filters['max_price'])) {
            $query->where('daily_rate', '<=', $filters['max_price']);
        }

        // Search by name or model
        if (!empty($filters['search'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('model', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('description', 'like', '%' . $filters['search'] . '%');
            });
        }

        // Sorting
        $sortBy = $filters['sort_by'] ?? 'created_at';
        $sortOrder = $filters['sort_order'] ?? 'desc';
        $query->orderBy($sortBy, $sortOrder);

        return $query->paginate($perPage);
    }

    /**
     * Get bikes by status
     */
    public function getByStatus(string $status, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->where('status', $status)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get bikes by type
     */
    public function getByType(string $type, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->where('type', $type)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get bikes by location
     */
    public function getByLocation(string $location, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->where('location', $location)
            ->where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Check bike availability for specific period
     */
    public function isAvailableForPeriod(int $bikeId, DateTime $startTime, DateTime $endTime): bool
    {
        $bike = $this->find($bikeId);
        
        if (!$bike) {
            return false;
        }

        return $bike->isAvailableForPeriod($startTime, $endTime);
    }

    /**
     * Get bikes needing maintenance
     */
    public function getNeedingMaintenance(): Collection
    {
        return $this->model
            ->where('is_active', true)
            ->where('next_maintenance_date', '<=', now())
            ->orWhere('status', RentalBike::STATUS_MAINTENANCE)
            ->orderBy('next_maintenance_date', 'asc')
            ->get();
    }

    /**
     * Update bike status
     */
    public function updateStatus(int $id, string $status): bool
    {
        return $this->update($id, ['status' => $status]);
    }

    /**
     * Update bike battery level (for electric bikes)
     */
    public function updateBatteryLevel(int $id, int $batteryLevel): bool
    {
        return $this->update($id, ['battery_level' => $batteryLevel]);
    }

    /**
     * Add ride statistics
     */
    public function addRideStatistics(int $id, float $hours, float $distance): bool
    {
        $bike = $this->find($id);
        
        if (!$bike) {
            return false;
        }

        return $bike->update([
            'total_ride_hours' => $bike->total_ride_hours + $hours,
            'total_distance' => $bike->total_distance + $distance,
        ]);
    }

    /**
     * Update maintenance dates
     */
    public function updateMaintenanceDates(int $id, DateTime $lastMaintenance, DateTime $nextMaintenance): bool
    {
        return $this->update($id, [
            'last_maintenance_date' => $lastMaintenance,
            'next_maintenance_date' => $nextMaintenance,
        ]);
    }

    /**
     * Get popular bikes (most rented)
     */
    public function getPopular(int $limit = 10): Collection
    {
        return $this->model
            ->available()
            ->withCount('rentals')
            ->orderBy('rentals_count', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Get recently added bikes
     */
    public function getRecent(int $limit = 10): Collection
    {
        return $this->model
            ->available()
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Get bikes with low battery (electric bikes only)
     */
    public function getLowBattery(int $threshold = 20): Collection
    {
        return $this->model
            ->where('type', RentalBike::TYPE_ELECTRIC)
            ->where('battery_level', '<', $threshold)
            ->where('battery_level', '>', 0)
            ->orderBy('battery_level', 'asc')
            ->get();
    }

    /**
     * Get statistics
     */
    public function getStatistics(): array
    {
        return [
            'total' => $this->model->count(),
            'available' => $this->model->where('status', RentalBike::STATUS_AVAILABLE)->count(),
            'rented' => $this->model->where('status', RentalBike::STATUS_RENTED)->count(),
            'maintenance' => $this->model->where('status', RentalBike::STATUS_MAINTENANCE)->count(),
            'out_of_service' => $this->model->where('status', RentalBike::STATUS_OUT_OF_SERVICE)->count(),
            'by_type' => $this->model->select('type', DB::raw('count(*) as count'))
                ->groupBy('type')
                ->pluck('count', 'type')
                ->toArray(),
            'by_condition' => $this->model->select('condition', DB::raw('count(*) as count'))
                ->groupBy('condition')
                ->pluck('count', 'condition')
                ->toArray(),
            'avg_daily_rate' => $this->model->avg('daily_rate'),
            'total_distance' => $this->model->sum('total_distance'),
            'total_ride_hours' => $this->model->sum('total_ride_hours'),
        ];
    }

    /**
     * Get bikes by price range
     */
    public function getByPriceRange(float $minPrice, float $maxPrice, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->available()
            ->whereBetween('daily_rate', [$minPrice, $maxPrice])
            ->orderBy('daily_rate', 'asc')
            ->paginate($perPage);
    }

    /**
     * Get unique locations
     */
    public function getLocations(): Collection
    {
        return $this->model
            ->select('location')
            ->distinct()
            ->orderBy('location')
            ->pluck('location');
    }

    /**
     * Get bikes count by location
     */
    public function getCountByLocation(): array
    {
        return $this->model
            ->select('location', DB::raw('count(*) as count'))
            ->where('is_active', true)
            ->groupBy('location')
            ->pluck('count', 'location')
            ->toArray();
    }

    /**
     * Bulk update status
     */
    public function bulkUpdateStatus(array $bikeIds, string $status): int
    {
        return $this->model
            ->whereIn('id', $bikeIds)
            ->update(['status' => $status]);
    }

    /**
     * Search bikes
     */
    public function search(string $query, int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->where(function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')
                    ->orWhere('model', 'like', '%' . $query . '%')
                    ->orWhere('description', 'like', '%' . $query . '%')
                    ->orWhere('qr_code', 'like', '%' . $query . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get bikes with active rentals
     */
    public function getWithActiveRentals(): Collection
    {
        return $this->model
            ->whereHas('rentals', function ($query) {
                $query->where('status', 'active');
            })
            ->with(['rentals' => function ($query) {
                $query->where('status', 'active');
            }])
            ->get();
    }

    /**
     * Deactivate bike
     */
    public function deactivate(int $id): bool
    {
        return $this->update($id, [
            'is_active' => false,
            'status' => RentalBike::STATUS_OUT_OF_SERVICE
        ]);
    }

    /**
     * Activate bike
     */
    public function activate(int $id): bool
    {
        return $this->update($id, [
            'is_active' => true,
            'status' => RentalBike::STATUS_AVAILABLE
        ]);
    }

    public function searchByName(string $string)
    {
        return $this->model
            ->where('name', 'like', '%' . $string . '%')
            ->orWhere('model', 'like', '%' . $string . '%')
            ->get();
    }
}
