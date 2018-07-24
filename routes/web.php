<?php

Route::get('/projects','ProjectController@index');
Route::get('/{any?}','WebsiteController@index')->name('index');

Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');




