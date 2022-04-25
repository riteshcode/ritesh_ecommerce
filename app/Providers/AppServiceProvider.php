<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // config(['app.theme' => 'Theme1']);
        config(['app.theme' => 'theme1']);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('activetheme', config('app.theme'));

          
        // echo SessionToken();      // check cache if not reset
        if(!Cache::has('settings'))
            cacheSetting();


        // if(SessionToken() === null)
        //     generateSessionToken();
        // Cache::flush();
        // dd(request()->cookie());
        // dd(Cache::get('settings'));
    }
}