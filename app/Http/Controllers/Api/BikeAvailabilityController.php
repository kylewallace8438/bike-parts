<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BikeAvailability;
use App\Models\RentalBike;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class BikeAvailabilityController extends Controller
{
    /**
     * Lấy availability của một xe trong khoảng thời gian
     */
    public function index(Request $request, int $bikeId): JsonResponse
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $bike = RentalBike::find($bikeId);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        $availability = BikeAvailability::where('rental_bike_id', $bikeId)
            ->whereBetween('date', [$startDate->format('Y-m-d'), $endDate->format('Y-m-d')])
            ->orderBy('date', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => [
                'bike_id' => $bikeId,
                'start_date' => $startDate->format('Y-m-d'),
                'end_date' => $endDate->format('Y-m-d'),
                'availability' => $availability,
            ],
        ]);
    }

    /**
     * Tạo availability cho xe (Admin only)
     */
    public function store(Request $request, int $bikeId): JsonResponse
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s|after:start_time',
            'status' => ['required', Rule::in([
                BikeAvailability::STATUS_AVAILABLE,
                BikeAvailability::STATUS_UNAVAILABLE,
                BikeAvailability::STATUS_MAINTENANCE,
                BikeAvailability::STATUS_RESERVED,
            ])],
            'reason' => 'nullable|string',
            'special_price' => 'nullable|numeric|min:0',
            'is_peak_time' => 'boolean',
            'notes' => 'nullable|string',
        ]);

        $bike = RentalBike::find($bikeId);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $availability = BikeAvailability::updateOrCreate(
            [
                'rental_bike_id' => $bikeId,
                'date' => $request->date,
            ],
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => 'Availability created/updated successfully',
            'data' => $availability,
        ]);
    }

    /**
     * Cập nhật availability (Admin only)
     */
    public function update(Request $request, int $bikeId, int $availabilityId): JsonResponse
    {
        $request->validate([
            'start_time' => 'date_format:H:i:s',
            'end_time' => 'date_format:H:i:s|after:start_time',
            'status' => [Rule::in([
                BikeAvailability::STATUS_AVAILABLE,
                BikeAvailability::STATUS_UNAVAILABLE,
                BikeAvailability::STATUS_MAINTENANCE,
                BikeAvailability::STATUS_RESERVED,
            ])],
            'reason' => 'nullable|string',
            'special_price' => 'nullable|numeric|min:0',
            'is_peak_time' => 'boolean',
            'notes' => 'nullable|string',
        ]);

        $availability = BikeAvailability::where('rental_bike_id', $bikeId)
            ->find($availabilityId);

        if (!$availability) {
            return response()->json([
                'success' => false,
                'message' => 'Availability record not found',
            ], 404);
        }

        $availability->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Availability updated successfully',
            'data' => $availability->fresh(),
        ]);
    }

    /**
     * Xóa availability record (Admin only)
     */
    public function destroy(int $bikeId, int $availabilityId): JsonResponse
    {
        $availability = BikeAvailability::where('rental_bike_id', $bikeId)
            ->find($availabilityId);

        if (!$availability) {
            return response()->json([
                'success' => false,
                'message' => 'Availability record not found',
            ], 404);
        }

        $availability->delete();

        return response()->json([
            'success' => true,
            'message' => 'Availability record deleted successfully',
        ]);
    }

    /**
     * Tạo availability cho multiple dates (Admin only)
     */
    public function createBulk(Request $request, int $bikeId): JsonResponse
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s|after:start_time',
            'status' => ['required', Rule::in([
                BikeAvailability::STATUS_AVAILABLE,
                BikeAvailability::STATUS_UNAVAILABLE,
                BikeAvailability::STATUS_MAINTENANCE,
                BikeAvailability::STATUS_RESERVED,
            ])],
            'reason' => 'nullable|string',
            'special_price' => 'nullable|numeric|min:0',
            'is_peak_time' => 'boolean',
            'notes' => 'nullable|string',
        ]);

        $bike = RentalBike::find($bikeId);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        BikeAvailability::createForDateRange(
            $bikeId,
            $startDate,
            $endDate,
            $request->except(['start_date', 'end_date'])
        );

        $daysCount = $startDate->diffInDays($endDate) + 1;

        return response()->json([
            'success' => true,
            'message' => "Availability created for {$daysCount} days",
            'data' => [
                'bike_id' => $bikeId,
                'start_date' => $startDate->format('Y-m-d'),
                'end_date' => $endDate->format('Y-m-d'),
                'days_created' => $daysCount,
            ],
        ]);
    }

    /**
     * Kiểm tra availability tổng quan cho tất cả xe trong một ngày
     */
    public function dailyOverview(Request $request): JsonResponse
    {
        $request->validate([
            'date' => 'required|date',
            'location' => 'nullable|string',
            'type' => 'nullable|string',
        ]);

        $date = Carbon::parse($request->date);

        $query = RentalBike::with(['availability' => function ($q) use ($date) {
            $q->byDate($date);
        }]);

        if ($request->has('location')) {
            $query->byLocation($request->location);
        }

        if ($request->has('type')) {
            $query->byType($request->type);
        }

        $bikes = $query->where('is_active', true)->get();

        $overview = $bikes->map(function ($bike) use ($date) {
            $availability = $bike->availability->first();

            return [
                'bike_id' => $bike->id,
                'name' => $bike->name,
                'model' => $bike->model,
                'type' => $bike->type,
                'location' => $bike->location,
                'status' => $bike->status,
                'availability' => $availability ? [
                    'status' => $availability->status,
                    'start_time' => $availability->start_time,
                    'end_time' => $availability->end_time,
                    'is_peak_time' => $availability->is_peak_time,
                    'special_price' => $availability->special_price,
                ] : [
                    'status' => $bike->status === RentalBike::STATUS_AVAILABLE ? 'available' : 'unavailable',
                    'start_time' => '00:00:00',
                    'end_time' => '23:59:59',
                    'is_peak_time' => false,
                    'special_price' => null,
                ],
            ];
        });

        return response()->json([
            'success' => true,
            'data' => [
                'date' => $date->format('Y-m-d'),
                'total_bikes' => $overview->count(),
                'available_bikes' => $overview->where('availability.status', 'available')->count(),
                'bikes' => $overview,
            ],
        ]);
    }

    /**
     * Set maintenance schedule (Admin only)
     */
    public function setMaintenance(Request $request, int $bikeId): JsonResponse
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $bike = RentalBike::find($bikeId);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        BikeAvailability::createForDateRange(
            $bikeId,
            $startDate,
            $endDate,
            [
                'status' => BikeAvailability::STATUS_MAINTENANCE,
                'reason' => $request->reason,
                'notes' => $request->notes,
                'start_time' => '00:00:00',
                'end_time' => '23:59:59',
            ]
        );

        // Cập nhật bike status nếu maintenance bắt đầu hôm nay
        if ($startDate->isToday()) {
            $bike->update(['status' => RentalBike::STATUS_MAINTENANCE]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Maintenance schedule set successfully',
            'data' => [
                'bike_id' => $bikeId,
                'start_date' => $startDate->format('Y-m-d'),
                'end_date' => $endDate->format('Y-m-d'),
                'reason' => $request->reason,
            ],
        ]);
    }
}
