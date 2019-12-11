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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/front_data', 'FrontendController@front_data');
Route::get('/all', 'FrontendController@all_data')->middleware('auth:api');
Route::get('/all_normal', 'FrontendController@all_data_normal')->middleware('auth:api');

// Route::post('/hash_change', 'FrontendController@hash_change');
Route::get('/google', 'FrontendController@google_init')->middleware('auth:api');
Route::post('/google', 'FrontendController@google_save')->middleware('auth:api');
