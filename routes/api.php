<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BikeController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\WebhookController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\JobController;
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
Route::get('products', [ProductController::class, 'getProducts']);
Route::get('products/{id}', [ProductController::class, 'getProduct']);
Route::get('search/{brand_id}', [BikeController::class, 'showBrandCategory']);
Route::get('search/{brand}/{category_id}', [BikeController::class, 'handleSearchKTM']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('wehbooks/products-update', [ProductController::class, 'listenProductUpdate']);
