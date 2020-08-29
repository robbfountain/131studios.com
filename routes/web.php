<?php

// Website

// Rick Roll
Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

Route::get('/', 'IndexController@index')
    ->name('index');

Route::get('projects', 'ProjectController@index')
    ->name('project.index');

Route::view('services', 'frontend.services')
    ->name('services.index');

Route::get('hosting', 'HostingController@index')
    ->name('hosting.index');

Route::get('seo', 'SeoController@index')
    ->name('seo.index');

Route::get('social-media', 'SocialMediaController@index')
    ->name('social-media.index');

Route::get('additional-services', 'AdditionalServicesController@index')
    ->name('additional-services.index');

Route::get('website-design', 'WebsiteDesignController@index')
    ->name('website-design.index');

Route::get('email-hosting', 'EmailHostingController@index')
    ->name('email-hosting.index');

Route::view('privacy', 'frontend.privacy', [
    'title' => 'Privacy Policy | 131 Studios',
])->name('privacy.index');

Route::view('terms', 'frontend.terms')
    ->name('terms.index');

// Subscriptions
Route::post('subscribe', 'SubscriptionController@store')
    ->name('subscription.store');

// Contact
Route::post('contact', 'ContactController@store')
    ->name('contact.store');

Route::get('contact', 'ContactController@index')
    ->name('contact.index');

// Blog
Route::get('blog', 'BlogController@index')
    ->name('blog.index');

Route::get('blog/{blog}', 'BlogController@show')
    ->name('blog.show');

Route::get('contract/{contract}', 'ContractController@show')
    ->middleware(['Owner'])
    ->name('contract.show');

Route::get('contract/{contract}/pdf', 'ContractController@pdf')
    ->middleware(['Owner'])
    ->name('contract.pdf');

// Webhooks
Route::webhooks('webhook/webmentions');

// Oauth
Route::get('/oauth/{provider}', 'Auth\OauthController@redirect')
    ->name('nova.login.google');
Route::get('/oauth/{provider}/callback', 'Auth\OauthController@callback');

// Search
Route::get('search', 'SearchController@index')
    ->name('search.index');
Route::post('search', 'SearchController@show')
    ->name('search.show');

// AWS SNS
Route::any('/sns/handle', '\OneThirtyOne\Sns\Controllers\SnsController@handle');

// Track Views
Route::post('/stats/videos/{video:video_id}/views', 'VideoController@update')
    ->name('video.increment.views');
