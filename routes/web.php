<?php
Route::get('/projects','ProjectController@index');
Route::post('contact', 'ContactController@store');
Route::post('quote','ContactController@quote');

Route::get('/','WebsiteController@index')->name('index');


Route::get('test', function() {
    $project = App\Project::find(15);

    return $project->tags instanceof \Illuminate\Support\Collection ? 'is collection' : 'not a collection';
});





