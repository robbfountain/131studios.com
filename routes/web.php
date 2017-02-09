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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * Admin Panel Routes
 */
Route::get(config('backpack.base.route_prefix') . '/logout','Auth\LoginController@logout');
Route::group(['prefix' => config('backpack.base.route_prefix'), 'namespace' => '\Admin'], function () {
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('/', 'AdminController@redirect');
    Route::auth();
});



/** CATCH-ALL ROUTE **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);





