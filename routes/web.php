<?php

// Website
Route::get('/subdreamer/admin/{any}.php', function() {
    return Redirect::route('index');
});

// Redirects
Route::redirect('blog/website-launch-for-the-dapper-house-barber-shop', '/');

// Rick Roll
Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

Route::get('/', 'App\Http\Controllers\IndexController@index')
    ->name('index');

Route::get('projects', 'App\Http\Controllers\ProjectController@index')
    ->name('project.index');

Route::view('services', 'frontend.services')
    ->name('services.index');

Route::get('hosting', 'App\Http\Controllers\HostingController@index')
    ->name('hosting.index');

Route::get('seo', 'App\Http\Controllers\SeoController@index')
    ->name('seo.index');

Route::get('seo/assessment/{uuid?}', \App\Http\Livewire\SeoAssessment::class)
    ->name('seo.assessment');

Route::get('social-media', 'App\Http\Controllers\SocialMediaController@index')
    ->name('social-media.index');

Route::get('additional-services', 'App\Http\Controllers\AdditionalServicesController@index')
    ->name('additional-services.index');

Route::get('website-design', 'App\Http\Controllers\WebsiteDesignController@index')
    ->name('website-design.index');

Route::get('email-hosting', 'App\Http\Controllers\EmailHostingController@index')
    ->name('email-hosting.index');

Route::view('privacy', 'frontend.privacy', [
    'title' => 'Privacy Policy | 131 Studios',
])->name('privacy.index');

Route::view('terms', 'frontend.terms')
    ->name('terms.index');

// Subscriptions
Route::post('subscribe', 'App\Http\Controllers\SubscriptionController@store')
    ->name('subscription.store');

// Contact
Route::post('contact', 'App\Http\Controllers\ContactController@store')
    ->name('contact.store');

Route::get('contact', 'App\Http\Controllers\ContactController@index')
    ->name('contact.index');

// Blog
Route::get('blog', 'App\Http\Controllers\BlogController@index')
    ->name('blog.index');

Route::get('blog/{blog}', 'App\Http\Controllers\BlogController@show')
    ->name('blog.show')
    ->missing(function (Illuminate\Http\Request $request) {
        return Redirect::route('blog.index');
    });

/**
 * Contract
 */
//Route::get('contract/{contract}', 'App\Http\Controllers\ContractController@show')
//    ->middleware(['Owner'])
//    ->name('contract.show');

Route::get('contract/{contract}/pdf', 'App\Http\Controllers\ContractController@pdf')
    ->middleware(['Owner'])
    ->name('contract.pdf');

Route::get('contract/{contract:uuid}', 'App\Http\Controllers\ContractController@show')
    ->name('contract.show')
    ->middleware(['signed']);

// Webhooks
Route::webhooks('webhook/webmentions');

// Oauth
Route::get('/oauth/{provider}', 'App\Http\Controllers\Auth\OauthController@redirect')
    ->name('nova.login.google');
Route::get('/oauth/{provider}/callback', 'App\Http\Controllers\Auth\OauthController@callback');

// Search
Route::get('search', 'App\Http\Controllers\SearchController@index')
    ->name('search.index');
Route::post('search', 'App\Http\Controllers\SearchController@show')
    ->name('search.show');

// AWS SNS
Route::any('/sns/handle', '\OneThirtyOne\Sns\Controllers\SnsController@handle');

Route::redirect('customer/{any}', url('/projects'), 301);

