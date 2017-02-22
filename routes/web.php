<?php

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


Route::get('/home', 'HomeController@index');
Route::get('/','WebsiteController@index');
Route::get('/contact','WebsiteController@contact');
Route::post('/contact','ContactController@sendMessage');
Route::get('/about','WebsiteController@about');
Route::get('/services','WebsiteController@services');
Route::get('/longform','WebsiteController@longForm');
Route::post('/longform','ContactController@submitForm');
Auth::routes();

/**
 * Admin Panel Routes
 */
Route::get(config('backpack.base.route_prefix') . '/logout','Auth\LoginController@logout');
Route::group(['prefix' => config('backpack.base.route_prefix'), 'namespace' => '\Admin'], function () {
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('/', 'AdminController@redirect');
    CRUD::resource('menu-item', 'MenuItemCrudController');
    CRUD::resource('project', 'ProjectCrudController');
    CRUD::resource('contact','ContactCrudController');
    Auth::routes();
});

Route::get('test',function() {
	 $contact = App\Contact::findOrFail(1);

      return view('admin.details_row')->with(['contact' => $contact])->render();
});

/** CATCH-ALL ROUTE **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);





