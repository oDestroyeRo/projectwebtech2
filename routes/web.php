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

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});


// $ composer require guzzlehttp/guzzle:~6.0

// Route::get('singers', 'SingersController@index');
// Route::get('singers/create', 'SingersController@create');
// Route::get('singers/{id}', 'SingersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('product', 'ProductController@index');
Route::get('product/create', 'ProductController@create');
Route::get('product/{id}', 'ProductController@edit');

Route::get('/customer', function () {
    return view('customer');
});
Route::get('/customer/menu', 'MenuController@show');

Route::get('/customer/order', function () {
    return view('order');
});
Route::get('/customer/giftvoucher', 'GiftVoucherController@show');

Route::get('/customer/point', function () {
    return view('point');
});
Route::get('/customer/profile', function () {
    return view('profile');
});
Route::get('/customer/promotion', 'PromotionController@show');

Route::get('/promotion', 'PromotionController@allRecord');
Route::post('/promotion/insert', 'PromotionController@insert');
Route::get('promotion/edit/{id}','PromotionController@edit');
Route::get('/promotion/delete/{id}','PromotionController@delete');
