<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceHistory;
use App\Models\RentalBike;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class MaintenanceHistoryController extends Controller
{
    /**
     * Lấy lịch sử bảo trì theo biển số xe
     */
    public function getByPlate(Request $request, string $bikePlate): JsonResponse
    {
        $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'maintenance_type' => 'nullable|string',
            'status' => 'nullable|string',
            'technician_id' => 'nullable|string',
        ]);

        $query = MaintenanceHistory::byPlate($bikePlate)->with('rentalBike');

        // Apply filters
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            $query->byDateRange($startDate, $endDate);
        }

        if ($request->has('maintenance_type')) {
            $query->byType($request->maintenance_type);
        }

        if ($request->has('status')) {
            $query->byStatus($request->status);
        }

        if ($request->has('technician_id')) {
            $query->byTechnician($request->technician_id);
        }

        $histories = $query->orderBy('maintenance_date', 'desc')
            ->paginate($request->get('per_page', 15));

        // Calculate summary statistics
        $totalCost = MaintenanceHistory::getTotalMaintenanceCostByPlate($bikePlate);
        $frequency = MaintenanceHistory::getMaintenanceFrequencyByPlate($bikePlate);
        $lastMaintenance = MaintenanceHistory::getLastMaintenanceByPlate($bikePlate);

        return response()->json([
            'success' => true,
            'data' => [
                'bike_plate' => $bikePlate,
                'histories' => $histories,
                'summary' => [
                    'total_maintenance_cost' => $totalCost,
                    'maintenance_frequency' => $frequency,
                    'last_maintenance_date' => $lastMaintenance?->maintenance_date?->format('Y-m-d'),
                    'days_since_last_maintenance' => $lastMaintenance?->days_from_maintenance,
                    'next_maintenance_due' => $lastMaintenance?->next_maintenance_due?->format('Y-m-d'),
                    'is_overdue' => $lastMaintenance?->isNextMaintenanceOverdue() ?? false,
                ],
            ],
        ]);
    }

    /**
     * Lấy danh sách tất cả maintenance histories
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'bike_plate' => 'nullable|string',
            'maintenance_type' => 'nullable|string',
            'status' => 'nullable|string',
            'priority' => 'nullable|string',
            'technician_id' => 'nullable|string',
            'workshop_location' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'sort_by' => 'nullable|string|in:maintenance_date,total_cost,priority,status',
            'sort_direction' => 'nullable|string|in:asc,desc',
        ]);

        $query = MaintenanceHistory::with('rentalBike');

        // Apply filters
        if ($request->has('bike_plate')) {
            $query->byPlate($request->bike_plate);
        }

        if ($request->has('maintenance_type')) {
            $query->byType($request->maintenance_type);
        }

        if ($request->has('status')) {
            $query->byStatus($request->status);
        }

        if ($request->has('priority')) {
            $query->where('priority', $request->priority);
        }

        if ($request->has('technician_id')) {
            $query->byTechnician($request->technician_id);
        }

        if ($request->has('workshop_location')) {
            $query->where('workshop_location', 'like', "%{$request->workshop_location}%");
        }

        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            $query->byDateRange($startDate, $endDate);
        }

        // Sorting
        $sortBy = $request->get('sort_by', 'maintenance_date');
        $sortDirection = $request->get('sort_direction', 'desc');
        $query->orderBy($sortBy, $sortDirection);

        $histories = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $histories,
        ]);
    }

    /**
     * Tạo maintenance record mới
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'bike_plate' => 'required|string|max:50',
            'bike_model' => 'nullable|string|max:255',
            'bike_brand' => 'nullable|string|max:255',
            'rental_bike_id' => 'nullable|exists:rental_bikes,id',
            'maintenance_date' => 'required|date',
            'maintenance_type' => ['required', Rule::in([
                MaintenanceHistory::TYPE_ROUTINE,
                MaintenanceHistory::TYPE_REPAIR,
                MaintenanceHistory::TYPE_EMERGENCY,
                MaintenanceHistory::TYPE_INSPECTION,
                MaintenanceHistory::TYPE_UPGRADE,
                MaintenanceHistory::TYPE_RECALL,
            ])],
            'priority' => ['nullable', Rule::in([
                MaintenanceHistory::PRIORITY_LOW,
                MaintenanceHistory::PRIORITY_NORMAL,
                MaintenanceHistory::PRIORITY_HIGH,
                MaintenanceHistory::PRIORITY_URGENT,
            ])],
            'description' => 'required|string',
            'parts_replaced' => 'nullable|array',
            'services_performed' => 'nullable|array',
            'labor_cost' => 'nullable|numeric|min:0',
            'parts_cost' => 'nullable|numeric|min:0',
            'technician_name' => 'nullable|string|max:255',
            'technician_id' => 'nullable|string|max:50',
            'workshop_location' => 'nullable|string|max:255',
            'mileage_at_maintenance' => 'nullable|integer|min:0',
            'hours_at_maintenance' => 'nullable|integer|min:0',
            'status' => ['nullable', Rule::in([
                MaintenanceHistory::STATUS_SCHEDULED,
                MaintenanceHistory::STATUS_IN_PROGRESS,
                MaintenanceHistory::STATUS_COMPLETED,
                MaintenanceHistory::STATUS_CANCELLED,
            ])],
            'scheduled_date' => 'nullable|date',
            'completed_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'before_images' => 'nullable|array',
            'after_images' => 'nullable|array',
            'customer_complaint' => 'nullable|string',
            'technician_findings' => 'nullable|string',
            'recommendations' => 'nullable|string',
            'next_maintenance_due' => 'nullable|date|after:maintenance_date',
            'warranty_status' => ['nullable', Rule::in([
                MaintenanceHistory::WARRANTY_UNDER,
                MaintenanceHistory::WARRANTY_EXPIRED,
                MaintenanceHistory::WARRANTY_NOT_APPLICABLE,
            ])],
            'warranty_months_remaining' => 'nullable|integer|min:0',
        ]);

        $data = $request->validated();

        // Calculate total cost
        $laborCost = $data['labor_cost'] ?? 0;
        $partsCost = $data['parts_cost'] ?? 0;
        $data['total_cost'] = $laborCost + $partsCost;

        $maintenance = MaintenanceHistory::create($data);

        // Update rental bike's maintenance date if linked
        if ($maintenance->rental_bike_id) {
            $rentalBike = RentalBike::find($maintenance->rental_bike_id);
            if ($rentalBike && $maintenance->status === MaintenanceHistory::STATUS_COMPLETED) {
                $rentalBike->update([
                    'last_maintenance_date' => $maintenance->maintenance_date,
                    'next_maintenance_date' => $maintenance->next_maintenance_due,
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Maintenance record created successfully',
            'data' => $maintenance->load('rentalBike'),
        ], 201);
    }

    /**
     * Lấy chi tiết maintenance record
     */
    public function show(int $id): JsonResponse
    {
        $maintenance = MaintenanceHistory::with('rentalBike')->find($id);

        if (!$maintenance) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance record not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $maintenance,
        ]);
    }

    /**
     * Cập nhật maintenance record
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $maintenance = MaintenanceHistory::find($id);

        if (!$maintenance) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance record not found',
            ], 404);
        }

        $request->validate([
            'bike_plate' => 'string|max:50',
            'bike_model' => 'nullable|string|max:255',
            'bike_brand' => 'nullable|string|max:255',
            'rental_bike_id' => 'nullable|exists:rental_bikes,id',
            'maintenance_date' => 'date',
            'maintenance_type' => [Rule::in([
                MaintenanceHistory::TYPE_ROUTINE,
                MaintenanceHistory::TYPE_REPAIR,
                MaintenanceHistory::TYPE_EMERGENCY,
                MaintenanceHistory::TYPE_INSPECTION,
                MaintenanceHistory::TYPE_UPGRADE,
                MaintenanceHistory::TYPE_RECALL,
            ])],
            'priority' => [Rule::in([
                MaintenanceHistory::PRIORITY_LOW,
                MaintenanceHistory::PRIORITY_NORMAL,
                MaintenanceHistory::PRIORITY_HIGH,
                MaintenanceHistory::PRIORITY_URGENT,
            ])],
            'description' => 'string',
            'parts_replaced' => 'nullable|array',
            'services_performed' => 'nullable|array',
            'labor_cost' => 'nullable|numeric|min:0',
            'parts_cost' => 'nullable|numeric|min:0',
            'technician_name' => 'nullable|string|max:255',
            'technician_id' => 'nullable|string|max:50',
            'workshop_location' => 'nullable|string|max:255',
            'mileage_at_maintenance' => 'nullable|integer|min:0',
            'hours_at_maintenance' => 'nullable|integer|min:0',
            'status' => [Rule::in([
                MaintenanceHistory::STATUS_SCHEDULED,
                MaintenanceHistory::STATUS_IN_PROGRESS,
                MaintenanceHistory::STATUS_COMPLETED,
                MaintenanceHistory::STATUS_CANCELLED,
            ])],
            'scheduled_date' => 'nullable|date',
            'completed_date' => 'nullable|date',
            'notes' => 'nullable|string',
            'before_images' => 'nullable|array',
            'after_images' => 'nullable|array',
            'customer_complaint' => 'nullable|string',
            'technician_findings' => 'nullable|string',
            'recommendations' => 'nullable|string',
            'next_maintenance_due' => 'nullable|date',
            'warranty_status' => [Rule::in([
                MaintenanceHistory::WARRANTY_UNDER,
                MaintenanceHistory::WARRANTY_EXPIRED,
                MaintenanceHistory::WARRANTY_NOT_APPLICABLE,
            ])],
            'warranty_months_remaining' => 'nullable|integer|min:0',
        ]);

        $data = $request->validated();

        // Recalculate total cost if cost fields are updated
        if (isset($data['labor_cost']) || isset($data['parts_cost'])) {
            $laborCost = $data['labor_cost'] ?? $maintenance->labor_cost;
            $partsCost = $data['parts_cost'] ?? $maintenance->parts_cost;
            $data['total_cost'] = $laborCost + $partsCost;
        }

        $maintenance->update($data);

        // Update rental bike's maintenance date if status changed to completed
        if (isset($data['status']) && $data['status'] === MaintenanceHistory::STATUS_COMPLETED && $maintenance->rental_bike_id) {
            $rentalBike = RentalBike::find($maintenance->rental_bike_id);
            if ($rentalBike) {
                $rentalBike->update([
                    'last_maintenance_date' => $maintenance->maintenance_date,
                    'next_maintenance_date' => $maintenance->next_maintenance_due,
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Maintenance record updated successfully',
            'data' => $maintenance->fresh(['rentalBike']),
        ]);
    }

    /**
     * Xóa maintenance record
     */
    public function destroy(int $id): JsonResponse
    {
        $maintenance = MaintenanceHistory::find($id);

        if (!$maintenance) {
            return response()->json([
                'success' => false,
                'message' => 'Maintenance record not found',
            ], 404);
        }

        $maintenance->delete();

        return response()->json([
            'success' => true,
            'message' => 'Maintenance record deleted successfully',
        ]);
    }

    /**
     * Lấy danh sách xe cần bảo trì
     */
    public function getDueForMaintenance(): JsonResponse
    {
        $dueMaintenances = MaintenanceHistory::getBikesDueForMaintenance();

        return response()->json([
            'success' => true,
            'data' => [
                'total_bikes_due' => $dueMaintenances->count(),
                'bikes' => $dueMaintenances,
            ],
        ]);
    }

    /**
     * Lấy thống kê maintenance
     */
    public function getStatistics(Request $request): JsonResponse
    {
        $request->validate([
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'bike_plate' => 'nullable|string',
        ]);

        $query = MaintenanceHistory::query();

        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);
            $query->byDateRange($startDate, $endDate);
        }

        if ($request->has('bike_plate')) {
            $query->byPlate($request->bike_plate);
        }

        $statistics = [
            'total_maintenances' => $query->count(),
            'completed_maintenances' => (clone $query)->completed()->count(),
            'scheduled_maintenances' => (clone $query)->scheduled()->count(),
            'high_priority_maintenances' => (clone $query)->highPriority()->count(),
            'total_cost' => (clone $query)->completed()->sum('total_cost'),
            'average_cost' => (clone $query)->completed()->avg('total_cost') ?? 0,
            'maintenance_by_type' => (clone $query)->completed()
                ->selectRaw('maintenance_type, COUNT(*) as count, SUM(total_cost) as total_cost')
                ->groupBy('maintenance_type')
                ->get(),
            'maintenance_by_technician' => (clone $query)->completed()
                ->selectRaw('technician_name, COUNT(*) as count, SUM(total_cost) as total_cost')
                ->whereNotNull('technician_name')
                ->groupBy('technician_name')
                ->get(),
            'overdue_bikes' => MaintenanceHistory::overdueForNextMaintenance()->count(),
        ];

        return response()->json([
            'success' => true,
            'data' => $statistics,
        ]);
    }

    /**
     * Lấy average cost theo maintenance type
     */
    public function getAverageCosts(): JsonResponse
    {
        $types = [
            MaintenanceHistory::TYPE_ROUTINE,
            MaintenanceHistory::TYPE_REPAIR,
            MaintenanceHistory::TYPE_EMERGENCY,
            MaintenanceHistory::TYPE_INSPECTION,
            MaintenanceHistory::TYPE_UPGRADE,
            MaintenanceHistory::TYPE_RECALL,
        ];

        $averageCosts = [];
        foreach ($types as $type) {
            $averageCosts[$type] = MaintenanceHistory::getAverageCostByType($type);
        }

        return response()->json([
            'success' => true,
            'data' => $averageCosts,
        ]);
    }

    /**
     * Tạo maintenance từ rental bike
     */
    public function createFromRentalBike(Request $request, int $rentalBikeId): JsonResponse
    {
        $rentalBike = RentalBike::find($rentalBikeId);

        if (!$rentalBike) {
            return response()->json([
                'success' => false,
                'message' => 'Rental bike not found',
            ], 404);
        }

        $request->validate([
            'maintenance_date' => 'required|date',
            'maintenance_type' => ['required', Rule::in([
                MaintenanceHistory::TYPE_ROUTINE,
                MaintenanceHistory::TYPE_REPAIR,
                MaintenanceHistory::TYPE_EMERGENCY,
                MaintenanceHistory::TYPE_INSPECTION,
                MaintenanceHistory::TYPE_UPGRADE,
                MaintenanceHistory::TYPE_RECALL,
            ])],
            'description' => 'required|string',
            'technician_name' => 'nullable|string|max:255',
            'technician_id' => 'nullable|string|max:50',
            'workshop_location' => 'nullable|string|max:255',
            'parts_replaced' => 'nullable|array',
            'services_performed' => 'nullable|array',
            'labor_cost' => 'nullable|numeric|min:0',
            'parts_cost' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
            'next_maintenance_due' => 'nullable|date|after:maintenance_date',
        ]);

        $maintenance = MaintenanceHistory::createFromRentalBike($rentalBike, $request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Maintenance record created from rental bike successfully',
            'data' => $maintenance->load('rentalBike'),
        ], 201);
    }
}
