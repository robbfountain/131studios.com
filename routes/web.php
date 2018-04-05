<?php
Auth::routes();

Route::get('/contact','ContactController@contact')->name('contact');
Route::post('/contact','ContactController@sendMessage')->name('contact.post');
Route::get('/contact/project','ContactController@longForm')->name('contact.project');
Route::post('/contact/project','ContactController@submitForm')->name('contact.project.submit');
Route::get('/longform', function() {
    return redirect()->route('contact.project');
});


Route::get('/','WebsiteController@index')->name('index');
Route::get('/about','WebsiteController@about')->name('about');
Route::get('/services','WebsiteController@services')->name('services');
Route::get('/services/hosting', 'WebsiteController@hosting')->name('hosting');
Route::get('/projects','ProjectController@index')->name('projects');
Route::get('projects/{slug}','ProjectController@show')->name('projects.show');
Route::get('/account', 'AccountController@index')->name('account');

Route::get('/privacy', function() {
    return view('frontend.privacy')->with(['heading' => 'Privacy Policy']);
});

Route::get('/terms', function() {
    return view('frontend.terms')->with(['heading' => 'Terms of Service']);
});





