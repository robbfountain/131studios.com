<?php
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web',config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');

    // Logs
    CRUD::resource('log', 'LogController');

    // Products
    CRUD::resource('product','ProductCrudController');

    CRUD::resource('project', 'ProjectCrudController');
    CRUD::resource('contact','ContactCrudController');

}); // this should be the absolute last line of this file
