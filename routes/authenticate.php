<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    
    Route::controller(WelcomeController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

});

