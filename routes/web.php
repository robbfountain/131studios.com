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
Route::get('/','WebsiteController@index')->name('index');
Route::get('/client', function() {
    return response()->view('frontend.client')->header('X-Frame-Options', 'ALLOW FROM https://client.131studios.com');
});
Route::get('/contact','ContactController@contact');
Route::post('/contact','ContactController@sendMessage');
Route::get('/contact/project','ContactController@longForm')->name('contact.project');
Route::post('/contact/project','ContactController@submitForm')->name('contact.project.submit');
Route::get('/about','WebsiteController@about');
Route::get('/services','WebsiteController@services');
Route::get('/services/hosting', 'WebsiteController@hosting');
Route::get('projects/{slug?}','ProjectController@index');
Route::Auth();

/**
 * Admin Panel Routes
 */
Route::get(config('backpack.base.route_prefix') . '/logout','Auth\LoginController@logout');
Route::group(['prefix' => config('backpack.base.route_prefix'), 'middleware' => ['auth','acp'], 'namespace' => '\Admin'], function () {

    // Admin
    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('/', 'AdminController@redirect');

    // Users, Roles & Permisions
    CRUD::resource('role','RoleCrudController')->middleware('Administrator');
    CRUD::resource('permission', 'PermissionCrudController')->middleware('Administrator');
    CRUD::resource('user', 'UserCrudController')->middleware('Administrator');

    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');

    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController')->middleware('Administrator');

    // Pages
    CRUD::resource('page', 'PageCrudController')->middleware('Administrator');

    // Logs
    CRUD::resource('log', 'LogController')->middleware('Administrator');

    // Backups
    CRUD::resource('backup', 'BackupController')->middleware('Administrator');

    // Settings
    CRUD::resource('setting', 'SettingCrudController')->middleware('Administrator');

    // Products
    CRUD::resource('product','ProductCrudController')->middleware('Administrator');
    
    CRUD::resource('menu-item', 'MenuItemCrudController')->middleware('Administrator');
    CRUD::resource('project', 'ProjectCrudController')->middleware('Administrator');
    CRUD::resource('contact','ContactCrudController')->middleware('Administrator');

    CRUD::resource('portal/data','PortalDataCrudController')->middleware('Administrator');
 //   Route::get('portal/data', 'PortalController@index')->middleware('Administrator');

    CRUD::resource('portal','PortalCrudController')->middleware('Administrator');
    CRUD::resource('client','ClientCrudController')->middleware('Administrator');

    Route::get('invoice','InvoiceController@index')->middleware('Administrator');

});

/** CATCH-ALL ROUTE **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);





