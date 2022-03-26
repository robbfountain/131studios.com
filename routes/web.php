<?php

// Website
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ShowBlogController;
use App\Http\Controllers\WebsiteDesignController;

Route::get('/subdreamer/admin/{any}.php', function () {
    return Redirect::route('index');
});

Route::get('/sitemap.xml', function () {
    return response()->redirectTo(config('app.asset_url').'/sitemap.xml', 302, [
        'Content-Type' => 'application/plain',
        'Cache-Control' => 'public, max-age=3600',
    ]);
});

// Redirects
Route::redirect('blog/website-launch-for-the-dapper-house-barber-shop', '/');
Route::redirect('additional-services', '/services');
Route::redirect('email-hosting', '/services');
Route::redirect('social-media', '/services');

// Rick Roll
Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');

/**
 * Main Website Routes.
 */
Route::get('/', IndexController::class)
    ->name('index');

Route::get('projects', ProjectController::class)
    ->name('project.index');

Route::get('projects/{year}/{month}/{slug}', [ProjectController::class, 'show'])
    ->name('project.show');

Route::get('site-analysis', function () {
    return view('frontend.site-analysis', [
        'title' => 'Site Analysis | 131 Studios',
    ]);
})->name('site-analysis.index');

Route::view('services', 'frontend.services', ['title' => 'Services | 131 Studios'])
    ->name('services.index');

Route::get('hosting', HostingController::class)
    ->name('hosting.index');

Route::get('seo', SeoController::class)
    ->name('seo.index');

Route::get('website-design', WebsiteDesignController::class)
    ->name('website-design.index');

Route::view('privacy', 'frontend.privacy', [
    'title' => 'Privacy Policy | 131 Studios',
])->name('privacy.index');

Route::view('terms', 'frontend.terms', ['title' => 'Terms & Conditions | 131 Studios'])
    ->name('terms.index');

// Contact
Route::get('contact', ContactController::class)
    ->name('contact.index');

// Blog
Route::get('blog', BlogController::class)
    ->name('blog.index');

Route::get('blog/{year}/{month}/{slug}', ShowBlogController::class)
    ->name('blog.show')
    ->missing(function (Illuminate\Http\Request $request) {
        return Redirect::route('blog.index');
    });

Route::get('blog/category/{category}', BlogCategoryController::class)
    ->name('blog.category');

Route::redirect('customer/{any}', url('/projects'), 301);
