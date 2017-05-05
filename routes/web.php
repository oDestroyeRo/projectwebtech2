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

// $ composer require guzzlehttp/guzzle:~6.0

// Route::get('singers', 'SingersController@index');
// Route::get('singers/create', 'SingersController@create');
// Route::get('singers/{id}', 'SingersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer', function () {
    return view('layout');
});
Route::get('/customer/menu', function () {
    return view('menu');
});
Route::get('/customer/order', function () {
    return view('order');
});
Route::get('/customer/giftvoucher', function () {
    return view('giftvoucher');
});
Route::get('/customer/point', function () {
    return view('point');
});
Route::get('/customer/profile', function () {
    return view('profile');
});
Route::get('/customer/promotion', function () {
    return view('promotion');
});
