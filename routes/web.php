<?php

Route::get('/{any?}','WebsiteController@index')->name('index');



Route::post('contact', 'ContactController@store');




