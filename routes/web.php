<?php

use Thujohn\Twitter\Facades\Twitter;

Route::get('projects', 'WebsiteController@handle');
Route::get('hosting','WebsiteController@handle');
Route::get('seo','WebsiteController@handle');
Route::get('social-media','WebsiteController@handle');
Route::get('additional-services','WebsiteController@handle');
Route::get('website-design', 'WebsiteController@handle');
Route::get('/','WebsiteController@index')->name('index');
Route::get('/privacy', 'WebsiteController@handlePrivacy');
Route::get('/terms','WebsiteController@handleTerms');
Route::get('/email-hosting','WebsiteController@handle');
Route::get('/dns-hosting','WebsiteController@handle');

Route::post('subscribe','SubscriptionController@store');

Route::get('projects/{slug}','ProjectController@show')->name('project.show');

Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');
Route::get('contact','ContactController@index');

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/{blog}','BlogController@show')->name('blog.show');

Route::get('/tweet', function()
{
    return Twitter::postTweet(['status' => 'Testing Tweet From App', 'format' => 'json']);
});

