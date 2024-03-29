<?php

namespace App\Providers;

use App\Observers\ResponseObserver;
use App\Observers\UserObserver;
use App\Response;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::observe(ResponseObserver::class);
        User::observe(UserObserver::class);
    }
}
