<?php
Route::get('/','WebsiteController@index')->name('index');


Route::get('/projects', 'ProjectController@show');
Route::post('contact', 'ContactController@store');




