<?php
Route::get('/projects','ProjectController@index');
Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');

Route::get('/','WebsiteController@index')->name('index');
Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/{blog}','BlogController@show')->name('blog.show');


Route::get('/test',function() {
    $blog = App\Blog::find(10);

    $blog->tags->each(function ($tag) {
        echo $tag->name;
    });
});
