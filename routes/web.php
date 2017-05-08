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
Route::get('voucher/create', 'Admin\VoucherController@create')->name('voucher.create');
Route::get('voucher/{id}/edit', 'Admin\VoucherController@edit')->name('voucher.edit');
Route::post('voucher', 'Admin\VoucherController@store')->name('voucher.store');
Route::get('voucher', 'Admin\VoucherController@index')->name('voucher');
Route::post('voucher/{id}/destroy', 'Admin\VoucherController@destroy')->name('voucher.destroy');
Route::post('voucher/{id}', 'Admin\VoucherController@update')->name('voucher.update');


Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});
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
Route::post('product/create', 'Admin\ProductController@store')->name('product.store');
Route::get('product', 'Admin\ProductController@index')->name('product');
Route::post('product/{id}/destroy', 'Admin\ProductController@destroy')->name('product.destroy');
Route::post('product/{id}', 'Admin\ProductController@update')->name('product.update');

Route::get('/customer', function () {
    return view('customer');
});
Route::get('/customer/menu', 'MenuController@show');

Route::get('/customer/order', function () {
    return view('order');
});
Route::get('/customer/giftvoucher', 'GiftVoucherController@show');

Route::get('/customer/point', 'PointController@show');
Route::get('/customer/profile', 'ProfileController@show');
Route::get('/customer/order', 'OrderController@show');
// Route::get('/customer/editProfile', 'ProfileController@update');
Route::get('/customer/promotion', 'PromotionController@show');
Route::get('productdetail/createsize', 'Admin\ProductDetailController@createsize')->name('productdetail.createsize');
Route::get('productdetail/createtype', 'Admin\ProductDetailController@createtype')->name('productdetail.createtype');
Route::post('productdetail/storesize', 'Admin\ProductDetailController@storesize')->name('productdetail.storesize');
Route::post('productdetail/storetype', 'Admin\ProductDetailController@storetype')->name('productdetail.storetype');


// ---- admin ----
Route::get('/promotion', 'PromotionController@allRecord');
// Route::post('/promotion/insert', 'PromotionController@insert');
Route::get('promotion/edit/{id}','PromotionController@edit');
Route::get('/promotion/delete/{id}','PromotionController@delete');

Route::post('/customer/profile/{id}','ProfileController@update')->name('profile.update');

Route::post('/promotion/insert', [
  'uses' => 'PromotionController@insert',
  'as' => 'insert'
]);

Route::get('/report', 'PromotionController@report');

Route::post('/report2', [
  'uses' => 'PromotionController@test',
  'as' => 'report2'
]);

Route::get('productdetail/{id}/editsize', 'Admin\ProductDetailController@editsize')->name('productdetail.editsize');
Route::get('productdetail/{id}/edittype', 'Admin\ProductDetailController@edittype')->name('productdetail.edittype');

Route::post('productdetail/{id}/edittype', 'Admin\ProductDetailController@updatetype')->name('productdetail.updatetype');
Route::post('productdetail/{id}/editsize', 'Admin\ProductDetailController@updatesize')->name('productdetail.updatesize');

Route::get('productdetail', 'Admin\ProductDetailController@index')->name('productdetail');

Route::get('user', 'Admin\UserController@index')->name('user');

Route::post('productdetail/{id}/destroysize', 'Admin\ProductDetailController@destroysize')->name('productdetail.destroysize');
Route::post('productdetail/{id}/destroytype', 'Admin\ProductDetailController@destroytype')->name('productdetail.destroytype');



Route::post('changepassword/{id}', 'Customer\ChangePasswordController@update')->name('changepassword.update');
Route::get('changepassword', 'Customer\ChangePasswordController@index')->name('changepassword');



//Route::resource('product', 'Admin\ProductController');
