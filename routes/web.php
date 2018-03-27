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
Route::get('/contact','ContactController@contact');
Route::post('/contact','ContactController@sendMessage');
Route::get('/contact/project','ContactController@longForm')->name('contact.project');
Route::post('/contact/project','ContactController@submitForm')->name('contact.project.submit');

Route::get('/','WebsiteController@index')->name('index');
Route::get('/about','WebsiteController@about');
Route::get('/services','WebsiteController@services');
Route::get('/services/hosting', 'WebsiteController@hosting');
Route::get('projects/{slug?}','ProjectController@index')->name('projects.show');



///** CATCH-ALL ROUTE **/
//Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
//    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);





