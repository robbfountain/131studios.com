<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use InvoiceNinja\Config as NinjaConfig;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        NinjaConfig::setURL(env('NINJA_API_URL'));
        NinjaConfig::setToken(env('NINJA_API_TOKEN'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
