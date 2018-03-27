<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
//    'middleware' => [config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

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

    // Products
    CRUD::resource('product','ProductCrudController');

    CRUD::resource('menu-item', 'MenuItemCrudController');
    CRUD::resource('project', 'ProjectCrudController');
    CRUD::resource('contact','ContactCrudController');

    CRUD::resource('portal/data','PortalDataCrudController');
    //   Route::get('portal/data', 'PortalController@index');

    CRUD::resource('portal','PortalCrudController');
    CRUD::resource('client','ClientCrudController');

    Route::get('invoice','InvoiceController@index');
}); // this should be the absolute last line of this file
