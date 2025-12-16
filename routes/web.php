<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/{any}', function () {
//     return view('home');
// })->where('any', '^(?!admin|js|api|app|horizon).*$');

// Auth::routes();\
// Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('products/{slug}', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('product');
Route::get('blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [App\Http\Controllers\BlogController::class, 'getBlog'])->name('blog');
Route::post('lang', [HomeController::class, 'changeLanguage'])->name('change.language');
Route::get('about-us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('about_us');
// Route::get('/san-pham', [App\Http\Controllers\ProductController::class, 'index'])->name('san-pham');
// Route::get('/san-pham/{slug}', [App\Http\Controllers\ProductController::class, 'getProduct']);
// Route::get('/lien-he', [App\Http\Controllers\ProductController::class, 'index'])->name('lien-he');
// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//     ->where('any', '^(?!backend|js|api|app|tool|auth).*$');
// Route::get('search/ktm', [App\Http\Controllers\SearchController::class, 'searchKTM'])->name('search.ktm');
// Route::get('search/ktm/{category_id}', [App\Http\Controllers\SearchController::class, 'searchKTMCategory'])->name('search.ktm.category');
// Route::post('search/ktm', [App\Http\Controllers\SearchController::class, 'handleSearchKTM'] )->name('search.handle.ktm');

Auth::routes();

