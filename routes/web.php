<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::name('website.')->group(function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('index');
    Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
    Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
    Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
    Route::get('/about', [WebsiteController::class, 'about'])->name('about');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::name('admin.')->group(function() {
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::middleware(['auth'])->group(function() {
        Route::get('/logout', action: [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});