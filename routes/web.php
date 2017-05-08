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
Route::get('product', 'Admin\ProductController@index')->name('product');
Route::get('product/{id}/destroy', 'Admin\ProductController@destroy')->name('product.destroy');
Route::post('product/{id}', 'Admin\ProductController@update')->name('product.update');

Route::get('productdetail/createsize', 'Admin\ProductDetailController@createsize')->name('productdetail.createsize');
Route::get('productdetail/createtype', 'Admin\ProductDetailController@createtype')->name('productdetail.createtype');
Route::post('productdetail/storesize', 'Admin\ProductDetailController@storesize')->name('productdetail.storesize');
Route::post('productdetail/storetype', 'Admin\ProductDetailController@storetype')->name('productdetail.storetype');

Route::get('productdetail/{id}/editsize', 'Admin\ProductDetailController@editsize')->name('productdetail.editsize');
Route::get('productdetail/{id}/edittype', 'Admin\ProductDetailController@edittype')->name('productdetail.edittype');

Route::post('productdetail/{id}/edittype', 'Admin\ProductDetailController@updatetype')->name('productdetail.updatetype');
Route::post('productdetail/{id}/editsize', 'Admin\ProductDetailController@updatesize')->name('productdetail.updatesize');

Route::get('productdetail', 'Admin\ProductDetailController@index')->name('productdetail');

Route::get('productdetail/{id}/destroysize', 'Admin\ProductDetailController@destroysize')->name('productdetail.destroysize');
Route::get('productdetail/{id}/destroytype', 'Admin\ProductDetailController@destroytype')->name('productdetail.destroytype');



Route::post('changepassword/{id}', 'Customer\ChangePasswordController@update')->name('changepassword.update');
Route::get('changepassword', 'Customer\ChangePasswordController@index')->name('changepassword');



//Route::resource('product', 'Admin\ProductController');
