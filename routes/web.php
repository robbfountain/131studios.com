<?php
Route::get('projects','WebsiteController@handle');
Route::get('projects/{slug}','ProjectController@show')->name('project.show');
Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');

Route::get('website-design', 'WebsiteController@handle');
Route::get('contact','ContactController@index');

Route::get('hosting','WebsiteController@handle');
Route::get('seo','WebsiteController@handle');
Route::get('social-media','WebsiteController@handle');
Route::get('additional-services','WebsiteController@handle');

Route::get('/','WebsiteController@index')->name('index');

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/{blog}','BlogController@show')->name('blog.show');

Route::get('/privacy', 'WebsiteController@handlePrivacy');
Route::get('/terms','WebsiteController@handleTerms');