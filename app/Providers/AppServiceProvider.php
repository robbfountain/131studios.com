<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('frontend.partials.banner', 'banner');
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
