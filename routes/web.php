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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/google.xml', 'GoogleController@googleMerchant')->name('google.shopping');
Route::get('/facebook.xml', 'GoogleController@facebookMerchant')->name('facebook.shopping');

Route::get('/clear', 'ManuController@clear')->name('clear');