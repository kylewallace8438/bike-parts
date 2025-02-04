<?php

use App\Http\Controllers\Api\BikeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/jobs', [JobController::class, 'index']);

// Auth::routes();
Route::get('search/ktm/{category_id}', [BikeController::class, 'handleSearchKTM']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
