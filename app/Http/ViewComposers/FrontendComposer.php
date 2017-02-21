<?php namespace App\Http\ViewComposers;

use App\Models\MenuItem as Menu;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class FrontendComposer {

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
                'route' => Request::route()->uri(), 
                'menu' => Menu::orderBy('lft','ASC')->get(),
        ]);
    }

}