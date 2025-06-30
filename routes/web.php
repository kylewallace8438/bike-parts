<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/{any}', function () {
//     return view('home');
// })->where('any', '^(?!admin|js|api|app|horizon).*$');

// Auth::routes();\
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [App\Http\Controllers\ProductController::class, 'index'])->name('san-pham');
Route::get('/san-pham/{slug}', [App\Http\Controllers\ProductController::class, 'getProduct']);
Route::get('/lien-he', [App\Http\Controllers\ProductController::class, 'index'])->name('lien-he');
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])
//     ->where('any', '^(?!backend|js|api|app|tool|auth).*$');
// Route::get('search/ktm', [App\Http\Controllers\SearchController::class, 'searchKTM'])->name('search.ktm');
// Route::get('search/ktm/{category_id}', [App\Http\Controllers\SearchController::class, 'searchKTMCategory'])->name('search.ktm.category');
// Route::post('search/ktm', [App\Http\Controllers\SearchController::class, 'handleSearchKTM'] )->name('search.handle.ktm');
