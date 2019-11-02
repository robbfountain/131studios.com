<?php

// Website
Route::get('/','WebsiteController@index')->name('index');
Route::get('projects', 'WebsiteController@handle')->name('project.index');
Route::get('hosting','WebsiteController@handle')->name('hosting.index');
Route::get('seo','WebsiteController@handle')->name('seo.index');
Route::get('social-media','WebsiteController@handle')->name('social-media.index');
Route::get('additional-services','WebsiteController@handle')->name('additional-services.index');
Route::get('website-design', 'WebsiteController@handle')->name('website-design.index');
Route::get('privacy', 'WebsiteController@handlePrivacy')->name('privacy.index');
Route::get('terms','WebsiteController@handleTerms')->name('terms.index');
Route::get('email-hosting','WebsiteController@handle')->name('email-hosting.index');

// Subscriptions
Route::post('subscribe','SubscriptionController@store')->name('subscription.store');

// Contact
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::post('quote','ContactController@quote');
Route::get('contact','ContactController@index')->name('contact.index');

// Blog
Route::get('blog','BlogController@index')->name('blog.index');
Route::get('blog/{blog}','BlogController@show')->name('blog.show');

// Webhooks
Route::webhooks('webhook/webmentions');
