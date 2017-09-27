<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user',
    function(Request $request) {
        return $request->user();
    })->middleware('auth:api');

Route::get('/license/check',
    function(Request $request) {
        return $request->user();
    })->middleware('auth:api');

Route::post('/license/activate','LicenseController@activate')->middleware('auth:api');
Route::post('/license/check','LicenseController@check')->middleware('auth:api');

Route::post('/portal/record','APIController@recordPortalData')->middleware('auth:api');


