<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ShopModelController@index');

Auth::routes();


Route::get('/home', 'ShopModelController@index')->name('home');

Route::get('/products/index', 'ProductModelController@index');
Route::get('/products/create', 'ProductModelController@create');
Route::post('/products/store','ProductModelController@store');
Route::get('/products/{product}/edit','ProductModelController@edit');
Route::post('/products/{product}/update','ProductModelController@update');
Route::get('/products/{product}/delete','ProductModelController@delete');

Route::get('/shop/index', 'ShopModelController@index');
Route::get('/shop/contact', 'ShopModelController@showContactPage');
Route::get('/shop/test', 'ShopModelController@showTestPage');
Route::get('/shop/{product}/single', 'ShopModelController@show');
Route::get('/cart','ShopModelController@showcart');
Route::get('/products/{product}/Add','ShopModelController@addToCart');
Route::patch('update-cart','ShopModelController@update');
Route::delete('remove-from-cart','ShopModelController@remove');


Route::get('/checkout','ShopModelController@checkout');
Route::get('/order','OrderModelController@store');
Route::get('/orders/index','OrderModelController@index');
Route::get('/orders/{order}/delete','OrderModelController@delete');
