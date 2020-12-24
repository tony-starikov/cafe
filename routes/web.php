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

Route::get('/', 'MainController@index')->name('index');

Route::get('/basket', 'BasketController@basket')->name('basket');

Route::post('/basket/add/{product_id}', 'BasketController@basketAdd')->name('basketAdd');

Route::post('/basket/remove/{product_id}', 'BasketController@basketRemove')->name('basketRemove');

Route::get('/order', 'BasketController@order')->name('order');

Route::get('/{category}/{product}', 'MainController@product')->name('product');

Route::get('/{category}', 'MainController@category')->name('category');
