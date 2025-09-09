<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RentalBike;
use App\Models\BikeAvailability;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class RentalBikeController extends Controller
{
    /**
     * Lấy danh sách xe đạp cho thuê
     */
    public function index(Request $request): JsonResponse
    {
        $query = RentalBike::query();

        // Filter by type
        if ($request->has('type')) {
            $query->byType($request->type);
        }

        // Filter by location
        if ($request->has('location')) {
            $query->byLocation($request->location);
        }

        // Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        } else {
            // Default: chỉ lấy xe available
            $query->available();
        }

        // Filter by availability date
        if ($request->has('date')) {
            $date = Carbon::parse($request->date);
            $availableBikeIds = BikeAvailability::available()
                ->byDate($date)
                ->pluck('rental_bike_id')
                ->toArray();

            if (!empty($availableBikeIds)) {
                $query->whereIn('id', $availableBikeIds);
            } else {
                // Nếu không có availability record, có thể xe vẫn available
                $query->available();
            }
        }

        // Search by name or model
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('model', 'like', "%{$search}%")
                  ->orWhere('brand', 'like', "%{$search}%");
            });
        }

        // Sort
        $sortBy = $request->get('sort_by', 'name');
        $sortDirection = $request->get('sort_direction', 'asc');
        $query->orderBy($sortBy, $sortDirection);

        $bikes = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $bikes,
        ]);
    }

    /**
     * Lấy chi tiết xe đạp
     */
    public function show(int $id): JsonResponse
    {
        $bike = RentalBike::with(['availability' => function ($query) {
            $query->where('date', '>=', now()->format('Y-m-d'))
                  ->orderBy('date', 'asc')
                  ->limit(30); // 30 ngày tới
        }])->find($id);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $bike,
        ]);
    }

    /**
     * Tạo xe đạp mới (Admin only)
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'type' => ['required', Rule::in([
                RentalBike::TYPE_MOUNTAIN,
                RentalBike::TYPE_ROAD,
                RentalBike::TYPE_HYBRID,
                RentalBike::TYPE_ELECTRIC,
                RentalBike::TYPE_BMX,
                RentalBike::TYPE_CRUISER,
            ])],
            'hourly_rate' => 'required|numeric|min:0',
            'daily_rate' => 'required|numeric|min:0',
            'weekly_rate' => 'nullable|numeric|min:0',
            'monthly_rate' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:100',
            'size' => 'nullable|string|max:10',
            'features' => 'nullable|array',
            'images' => 'nullable|array',
            'location' => 'nullable|string|max:255',
            'condition' => ['nullable', Rule::in([
                RentalBike::CONDITION_EXCELLENT,
                RentalBike::CONDITION_GOOD,
                RentalBike::CONDITION_FAIR,
                RentalBike::CONDITION_POOR,
            ])],
            'battery_level' => 'nullable|integer|min:0|max:100',
        ]);

        $bike = RentalBike::create(array_merge($request->validated(), [
            'qr_code' => 'BIKE_' . strtoupper(uniqid()),
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Bike created successfully',
            'data' => $bike,
        ], 201);
    }

    /**
     * Cập nhật thông tin xe đạp (Admin only)
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $bike = RentalBike::find($id);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $request->validate([
            'name' => 'string|max:255',
            'model' => 'string|max:255',
            'brand' => 'string|max:255',
            'type' => [Rule::in([
                RentalBike::TYPE_MOUNTAIN,
                RentalBike::TYPE_ROAD,
                RentalBike::TYPE_HYBRID,
                RentalBike::TYPE_ELECTRIC,
                RentalBike::TYPE_BMX,
                RentalBike::TYPE_CRUISER,
            ])],
            'hourly_rate' => 'numeric|min:0',
            'daily_rate' => 'numeric|min:0',
            'weekly_rate' => 'nullable|numeric|min:0',
            'monthly_rate' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'color' => 'nullable|string|max:100',
            'size' => 'nullable|string|max:10',
            'features' => 'nullable|array',
            'images' => 'nullable|array',
            'location' => 'nullable|string|max:255',
            'status' => [Rule::in([
                RentalBike::STATUS_AVAILABLE,
                RentalBike::STATUS_RENTED,
                RentalBike::STATUS_MAINTENANCE,
                RentalBike::STATUS_OUT_OF_SERVICE,
            ])],
            'condition' => [Rule::in([
                RentalBike::CONDITION_EXCELLENT,
                RentalBike::CONDITION_GOOD,
                RentalBike::CONDITION_FAIR,
                RentalBike::CONDITION_POOR,
            ])],
            'battery_level' => 'nullable|integer|min:0|max:100',
            'is_active' => 'boolean',
        ]);

        $bike->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Bike updated successfully',
            'data' => $bike->fresh(),
        ]);
    }

    /**
     * Xóa xe đạp (Admin only)
     */
    public function destroy(int $id): JsonResponse
    {
        $bike = RentalBike::find($id);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        // Kiểm tra xe có đang được thuê không
        if ($bike->isCurrentlyRented()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete bike that is currently rented',
            ], 400);
        }

        $bike->delete();

        return response()->json([
            'success' => true,
            'message' => 'Bike deleted successfully',
        ]);
    }

    /**
     * Kiểm tra availability của xe trong khoảng thời gian
     */
    public function checkAvailability(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $bike = RentalBike::find($id);

        if (!$bike) {
            return response()->json([
                'success' => false,
                'message' => 'Bike not found',
            ], 404);
        }

        $startTime = new \DateTime($request->start_time);
        $endTime = new \DateTime($request->end_time);

        $isAvailable = $bike->isAvailableForPeriod($startTime, $endTime);

        return response()->json([
            'success' => true,
            'data' => [
                'bike_id' => $bike->id,
                'is_available' => $isAvailable,
                'start_time' => $startTime->format('Y-m-d H:i:s'),
                'end_time' => $endTime->format('Y-m-d H:i:s'),
            ],
        ]);
    }

    /**
     * Lấy danh sách types available
     */
    public function getTypes(): JsonResponse
    {
        $types = [
            RentalBike::TYPE_MOUNTAIN => 'Mountain Bike',
            RentalBike::TYPE_ROAD => 'Road Bike',
            RentalBike::TYPE_HYBRID => 'Hybrid Bike',
            RentalBike::TYPE_ELECTRIC => 'Electric Bike',
            RentalBike::TYPE_BMX => 'BMX',
            RentalBike::TYPE_CRUISER => 'Cruiser',
        ];

        return response()->json([
            'success' => true,
            'data' => $types,
        ]);
    }

    /**
     * Lấy danh sách locations available
     */
    public function getLocations(): JsonResponse
    {
        $locations = RentalBike::where('is_active', true)
            ->whereNotNull('location')
            ->distinct()
            ->pluck('location')
            ->values();

        return response()->json([
            'success' => true,
            'data' => $locations,
        ]);
    }
}
