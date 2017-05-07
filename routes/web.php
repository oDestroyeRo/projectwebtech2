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

Route::get('/', 'WelcomeController@index');

// $ composer require guzzlehttp/guzzle:~6.0

// Route::get('singers', 'SingersController@index');
// Route::get('singers/create', 'SingersController@create');
// Route::get('singers/{id}', 'SingersController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('product', 'Admin\ProductController@index');
Route::get('product/create', 'Admin\ProductController@create')->name('product.create');
Route::get('product/{id}/edit', 'Admin\ProductController@edit')->name('product.edit');
Route::post('product', 'Admin\ProductController@store')->name('product.store');
//
// Route::post('product/{id}', 'Admin\ProductController@destroy');
Route::get('product', 'Admin\ProductController@index')->name('product');
Route::get('product/{id}/destroy', 'Admin\ProductController@destroy')->name('product.destroy');

Route::post('product/{id}', 'Admin\ProductController@update')->name('product.update');

Route::post('changepassword/{id}', 'Customer\ChangePasswordController@update')->name('changepassword.update');
Route::get('changepassword', 'Customer\ChangePasswordController@index')->name('changepassword');



//Route::resource('product', 'Admin\ProductController');
