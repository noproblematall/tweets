<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'FrontendController@index')->name('soon');
Route::get('/', 'FrontendController@landing')->name('welcome');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/setting', 'HomeController@setting')->name('setting');
Route::get('/set_status', 'HomeController@set_status')->name('set_status');

Route::get('/password', 'HomeController@change_password')->name('change_password');
Route::post('/profile', 'HomeController@change_profile')->name('change_profile');
