<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BikeRental;
use App\Models\RentalBike;
use App\Models\BikeAvailability;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BikeRentalController extends Controller
{
    /**
     * Lấy danh sách rental của user
     */
    public function index(Request $request): JsonResponse
    {
        $query = BikeRental::with(['rentalBike', 'user'])
            ->byUser(Auth::id());

        // Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->has('start_date')) {
            $query->where('start_time', '>=', $request->start_date);
        }

        if ($request->has('end_date')) {
            $query->where('start_time', '<=', $request->end_date);
        }

        $rentals = $query->orderBy('start_time', 'desc')
            ->paginate($request->get('per_page', 15));

        return response()->json([
            'success' => true,
            'data' => $rentals,
        ]);
    }

    /**
     * Tạo booking mới
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'rental_bike_id' => 'required|exists:rental_bikes,id',
            'start_time' => 'required|date|after:now',
            'end_time' => 'required|date|after:start_time',
            'rental_type' => ['required', Rule::in([
                BikeRental::TYPE_HOURLY,
                BikeRental::TYPE_DAILY,
                BikeRental::TYPE_WEEKLY,
                BikeRental::TYPE_MONTHLY,
            ])],
            'pickup_location' => 'nullable|string|max:255',
            'return_location' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $bike = RentalBike::find($request->rental_bike_id);

        if (!$bike || !$bike->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'Bike is not available',
            ], 400);
        }

        $startTime = new \DateTime($request->start_time);
        $endTime = new \DateTime($request->end_time);

        // Kiểm tra availability
        if (!$bike->isAvailableForPeriod($startTime, $endTime)) {
            return response()->json([
                'success' => false,
                'message' => 'Bike is not available for the selected time period',
            ], 400);
        }

        // Tính giá
        $basePrice = $this->calculatePrice($bike, $request->rental_type, $startTime, $endTime);

        $rental = BikeRental::create([
            'rental_bike_id' => $request->rental_bike_id,
            'user_id' => Auth::id(),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'rental_type' => $request->rental_type,
            'base_price' => $basePrice,
            'total_price' => $basePrice,
            'status' => BikeRental::STATUS_PENDING,
            'pickup_location' => $request->pickup_location,
            'return_location' => $request->return_location,
            'notes' => $request->notes,
        ]);

        // Block availability
        BikeAvailability::blockAvailability(
            $bike->id,
            $startTime,
            $endTime,
            'reserved for rental #' . $rental->id
        );

        return response()->json([
            'success' => true,
            'message' => 'Rental booking created successfully',
            'data' => $rental->load(['rentalBike', 'user']),
        ], 201);
    }

    /**
     * Lấy chi tiết rental
     */
    public function show(int $id): JsonResponse
    {
        $rental = BikeRental::with(['rentalBike', 'user'])->find($id);

        if (!$rental) {
            return response()->json([
                'success' => false,
                'message' => 'Rental not found',
            ], 404);
        }

        // Kiểm tra quyền access (giả sử có field role trong users table)
        $user = Auth::user();
        if ($rental->user_id !== Auth::id() && $user->role !== 'admin') {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $rental,
        ]);
    }

    /**
     * Confirm rental (Admin only)
     */
    public function confirm(int $id): JsonResponse
    {
        $rental = BikeRental::find($id);

        if (!$rental) {
            return response()->json([
                'success' => false,
                'message' => 'Rental not found',
            ], 404);
        }

        if ($rental->status !== BikeRental::STATUS_PENDING) {
            return response()->json([
                'success' => false,
                'message' => 'Rental cannot be confirmed',
            ], 400);
        }

        $rental->updateStatus(BikeRental::STATUS_CONFIRMED);

        return response()->json([
            'success' => true,
            'message' => 'Rental confirmed successfully',
            'data' => $rental->fresh(['rentalBike', 'user']),
        ]);
    }

    /**
     * Start rental (Admin only)
     */
    public function start(int $id): JsonResponse
    {
        $rental = BikeRental::find($id);

        if (!$rental) {
            return response()->json([
                'success' => false,
                'message' => 'Rental not found',
            ], 404);
        }

        if ($rental->status !== BikeRental::STATUS_CONFIRMED) {
            return response()->json([
                'success' => false,
                'message' => 'Rental must be confirmed before starting',
            ], 400);
        }

        $rental->updateStatus(BikeRental::STATUS_ACTIVE);

        return response()->json([
            'success' => true,
            'message' => 'Rental started successfully',
            'data' => $rental->fresh(['rentalBike', 'user']),
        ]);
    }

    /**
     * End rental
     */
    public function end(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'damage_report' => 'nullable|string',
            'distance_traveled' => 'nullable|numeric|min:0',
            'rating' => 'nullable|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $rental = BikeRental::find($id);

        if (!$rental) {
            return response()->json([
                'success' => false,
                'message' => 'Rental not found',
            ], 404);
        }

        if ($rental->status !== BikeRental::STATUS_ACTIVE) {
            return response()->json([
                'success' => false,
                'message' => 'Rental is not active',
            ], 400);
        }

        // Cập nhật thông tin kết thúc
        $rental->update([
            'actual_end_time' => now(),
            'damage_report' => $request->damage_report,
            'distance_traveled' => $request->distance_traveled,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        // Tính lại total price (bao gồm phí quá hạn nếu có)
        $rental->total_price = $rental->calculateTotalPrice();
        $rental->save();

        // Cập nhật status
        $rental->updateStatus(BikeRental::STATUS_COMPLETED);

        // Cập nhật thống kê xe
        $bike = $rental->rentalBike;
        $bike->total_ride_hours += $rental->getDurationInHours();
        if ($request->distance_traveled) {
            $bike->total_distance += $request->distance_traveled;
        }
        $bike->save();

        return response()->json([
            'success' => true,
            'message' => 'Rental ended successfully',
            'data' => $rental->fresh(['rentalBike', 'user']),
        ]);
    }

    /**
     * Cancel rental
     */
    public function cancel(Request $request, int $id): JsonResponse
    {
        $request->validate([
            'cancellation_reason' => 'required|string',
        ]);

        $rental = BikeRental::find($id);

        if (!$rental) {
            return response()->json([
                'success' => false,
                'message' => 'Rental not found',
            ], 404);
        }

        if (!in_array($rental->status, [BikeRental::STATUS_PENDING, BikeRental::STATUS_CONFIRMED])) {
            return response()->json([
                'success' => false,
                'message' => 'Rental cannot be cancelled',
            ], 400);
        }

        $rental->update([
            'cancelled_at' => now(),
            'cancelled_by' => 'user',
            'cancellation_reason' => $request->cancellation_reason,
        ]);

        $rental->updateStatus(BikeRental::STATUS_CANCELLED);

        // Unblock availability
        $this->unblockAvailability($rental);

        return response()->json([
            'success' => true,
            'message' => 'Rental cancelled successfully',
            'data' => $rental->fresh(['rentalBike', 'user']),
        ]);
    }

    /**
     * Tính giá thuê
     */
    private function calculatePrice(RentalBike $bike, string $rentalType, \DateTime $startTime, \DateTime $endTime): float
    {
        $rate = $bike->getRateByType($rentalType);

        switch ($rentalType) {
            case BikeRental::TYPE_HOURLY:
                $hours = $startTime->diff($endTime)->h + ($startTime->diff($endTime)->days * 24);
                return $rate * $hours;

            case BikeRental::TYPE_DAILY:
                $days = $startTime->diff($endTime)->days + 1;
                return $rate * $days;

            case BikeRental::TYPE_WEEKLY:
                $weeks = ceil($startTime->diff($endTime)->days / 7);
                return $rate * $weeks;

            case BikeRental::TYPE_MONTHLY:
                $months = ceil($startTime->diff($endTime)->days / 30);
                return $rate * $months;

            default:
                return $rate;
        }
    }

    /**
     * Unblock availability after cancellation
     */
    private function unblockAvailability(BikeRental $rental): void
    {
        BikeAvailability::where('rental_bike_id', $rental->rental_bike_id)
            ->where('reason', 'like', "%rental #{$rental->id}%")
            ->update([
                'status' => BikeAvailability::STATUS_AVAILABLE,
                'reason' => null,
            ]);
    }
}
