<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BikeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\WebhookController;
use App\Http\Controllers\Api\BrandController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);

    // Maintenance history routes
    Route::group(['prefix' => 'history'], function () {
        Route::get('/me', [MaintenanceHistoryController::class, 'getMyHistory']);
        Route::post('/', [MaintenanceHistoryController::class, 'store']);
        Route::get('/{id}', [MaintenanceHistoryController::class, 'show']);
        Route::put('/{id}', [MaintenanceHistoryController::class, 'update']);
        Route::delete('/{id}', [MaintenanceHistoryController::class, 'destroy']);
    });

    Route::get('/brands', [BrandController::class, 'index']);
});


Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'getProducts']);
    Route::get('/{id}', [ProductController::class, 'getProduct']);
    Route::get('/{slug}', [ProductController::class, 'getProduct']);
});

Route::get('search/{brand_id}', [BikeController::class, 'showBrandCategory']);
Route::get('search/{brand}/{category_id}', [BikeController::class, 'handleSearchKTM']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('wehbooks/products-update', [ProductController::class, 'listenProductUpdate']);



Route::post('plate/lookup', [PlateController::class, 'lookupPlate']);