<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

 
Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/contact', 'contact');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('/category/{slug}', 'index');
    Route::get('/product/{slug}', 'detail');
    Route::post('/showproduct/{slug}', 'show');
    Route::post('/filterItem', 'filterItem')->name('filterItem');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::post('/addUpdateToCart', 'store')->name('addUpdateToCart');
    Route::post('/incDecDelCart', 'update')->name('incDecDelCart');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::post('/place-order', 'placeOrder')->name('placeOrder');
    Route::get('/thankyou/{orderId}', 'thankyou')->name('thankyou');
    
});


