<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('frontend.*', 'App\Http\ViewComposers\FrontendComposer');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}