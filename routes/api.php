<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BikeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\WebhookController;
use App\Http\Controllers\Api\RentalBikeController;
use App\Http\Controllers\Api\BikeRentalController;
use App\Http\Controllers\Api\BikeAvailabilityController;
use App\Http\Controllers\Api\MaintenanceHistoryController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\ShopifyProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/jobs', [JobController::class, 'index']);
/**
 * @OA\Info(title="My First API", version="0.1")
 */
// Auth::routes();
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle']);

Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'getProducts']);
    Route::get('/{id}', [ProductController::class, 'getProduct']);
    Route::get('/{slug}', [ProductController::class, 'getProduct']);
});

Route::get('search/{brand_id}', [BikeController::class, 'showBrandCategory']);
Route::get('search/{brand}/{category_id}', [BikeController::class, 'handleSearchKTM']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('wehbooks/products-update', [ProductController::class, 'listenProductUpdate']);

// Bike Rental System Routes
Route::prefix('rental')->group(function () {
    // Public routes - Rental Bikes
    Route::get('bikes', [RentalBikeController::class, 'index']);
    Route::get('bikes/{id}', [RentalBikeController::class, 'show']);
    Route::get('bikes/{id}/availability', [RentalBikeController::class, 'checkAvailability']);
    Route::get('bike-types', [RentalBikeController::class, 'getTypes']);
    // Route::get('locations', [RentalBikeController::class, 'getLocations']);

    // Availability routes
    Route::get('bikes/{bikeId}/availability-schedule', [BikeAvailabilityController::class, 'index']);
    Route::get('availability/daily-overview', [BikeAvailabilityController::class, 'dailyOverview']);

    // Protected routes - require authentication
    Route::middleware('auth:sanctum')->group(function () {
        // Bike Rentals
        Route::get('rentals', [BikeRentalController::class, 'index']);
        Route::post('rentals', [BikeRentalController::class, 'store']);
        Route::get('rentals/{id}', [BikeRentalController::class, 'show']);
        Route::post('rentals/{id}/cancel', [BikeRentalController::class, 'cancel']);
        Route::post('rentals/{id}/end', [BikeRentalController::class, 'end']);

        // Admin only routes (note: you'll need to create admin middleware)
        Route::middleware('admin')->group(function () {
            // Bike Management
            Route::post('bikes', [RentalBikeController::class, 'store']);
            Route::put('bikes/{id}', [RentalBikeController::class, 'update']);
            Route::delete('bikes/{id}', [RentalBikeController::class, 'destroy']);

            // Rental Management
            Route::post('rentals/{id}/confirm', [BikeRentalController::class, 'confirm']);
            Route::post('rentals/{id}/start', [BikeRentalController::class, 'start']);

            // Availability Management
            Route::post('bikes/{bikeId}/availability', [BikeAvailabilityController::class, 'store']);
            Route::put('bikes/{bikeId}/availability/{availabilityId}', [BikeAvailabilityController::class, 'update']);
            Route::delete('bikes/{bikeId}/availability/{availabilityId}', [BikeAvailabilityController::class, 'destroy']);
            Route::post('bikes/{bikeId}/availability/bulk', [BikeAvailabilityController::class, 'createBulk']);
            Route::post('bikes/{bikeId}/maintenance', [BikeAvailabilityController::class, 'setMaintenance']);
        });
    });
});

// Maintenance History System Routes
Route::prefix('maintenance')->group(function () {
    // Public routes - lookup maintenance history by plate
    Route::get('plate/{bikePlate}', [MaintenanceHistoryController::class, 'getByPlate']);

    // Protected routes - require authentication
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/', [MaintenanceHistoryController::class, 'index']);
        Route::get('/{id}', [MaintenanceHistoryController::class, 'show']);
        Route::get('/due/list', [MaintenanceHistoryController::class, 'getDueForMaintenance']);
        Route::get('/statistics/overview', [MaintenanceHistoryController::class, 'getStatistics']);
        Route::get('/statistics/average-costs', [MaintenanceHistoryController::class, 'getAverageCosts']);

        // Admin only routes
        Route::middleware('admin')->group(function () {
            Route::post('/', [MaintenanceHistoryController::class, 'store']);
            Route::put('/{id}', [MaintenanceHistoryController::class, 'update']);
            Route::delete('/{id}', [MaintenanceHistoryController::class, 'destroy']);
            Route::post('/rental-bike/{rentalBikeId}', [MaintenanceHistoryController::class, 'createFromRentalBike']);
        });
    });
});

Route::post('plate/lookup', [PlateController::class, 'lookupPlate']);