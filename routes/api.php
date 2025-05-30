<?php

use App\Http\Controllers\Api\BikeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/jobs', [JobController::class, 'index']);
/**
 * @OA\Info(title="My First API", version="0.1")
 */
// Auth::routes();
Route::get('products', [BikeController::class, 'test']);
Route::get('search/{brand_id}', [BikeController::class, 'showBrandCategory']);
Route::get('search/{brand}/{category_id}', [BikeController::class, 'handleSearchKTM']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
