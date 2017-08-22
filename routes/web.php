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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','WebsiteController@index')->name('index');
Route::get('/contact','WebsiteController@contact');
Route::post('/contact','ContactController@sendMessage');
Route::get('/about','WebsiteController@about');
Route::get('/services','WebsiteController@services');
Route::get('/longform','WebsiteController@longForm');
Route::post('/longform','ContactController@submitForm');
Route::get('projects/{slug}','ProjectController@show');
Route::get('projects','ProjectController@index');
Route::get('portal', 'WebsiteController@portal');
Auth::routes();

/**
 * Admin Panel Routes
 */
Route::get(config('backpack.base.route_prefix') . '/logout','Auth\LoginController@logout');
Route::group(['prefix' => config('backpack.base.route_prefix'), 'namespace' => '\Admin'], function () {
    // Admin
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('/', 'AdminController@redirect');

    // Users, Roles & Permisions
    CRUD::resource('role','RoleCrudController');
    CRUD::resource('permission', 'PermissionCrudController');
    CRUD::resource('user', 'UserCrudController');

    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');

    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');

    // Pages
    CRUD::resource('page', 'PageCrudController');

    // Logs
    CRUD::resource('log', 'LogController');

    // Backups
    CRUD::resource('backup', 'BackupController');

    // Settings
    CRUD::resource('setting', 'SettingCrudController');
    
    CRUD::resource('menu-item', 'MenuItemCrudController');
    CRUD::resource('project', 'ProjectCrudController');
    CRUD::resource('contact','ContactCrudController');
    Auth::routes();
});

/** CATCH-ALL ROUTE **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);





