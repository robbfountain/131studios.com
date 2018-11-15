<?php
Route::get('/projects','ProjectController@index');
Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');

Auth::routes();


//Route::get('/{any?}','WebsiteController@index')->name('index');






