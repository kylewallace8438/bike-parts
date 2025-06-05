<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/{any}', function () {
//     return view('home');
// })->where('any', '^(?!admin|js|api|app|horizon).*$');

// Auth::routes();\
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])
    ->where('any', '^(?!backend|js|api|app|tool|auth).*$');
// Route::get('search/ktm', [App\Http\Controllers\SearchController::class, 'searchKTM'])->name('search.ktm');
// Route::get('search/ktm/{category_id}', [App\Http\Controllers\SearchController::class, 'searchKTMCategory'])->name('search.ktm.category');
// Route::post('search/ktm', [App\Http\Controllers\SearchController::class, 'handleSearchKTM'] )->name('search.handle.ktm');
