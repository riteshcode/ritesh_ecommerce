<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// for clear-cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // Artisan::call('view:cache');
    Artisan::call('route:clear');
    // Artisan::call('route:cache');
    

    return "Cleared!";
});
   
require __DIR__.'/auth.php';

//Guest Url Registered
require __DIR__.'/guest.php';

// Authenticate Url Registered
require __DIR__.'/authenticate.php';
