<?php

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
