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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('getLogout');

Route::get('/', 'MainController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/basket', 'BasketController@basket')->name('basket');

Route::post('/basket/add/{product_id}', 'BasketController@basketAdd')->name('basketAdd');

Route::post('/basket/remove/{product_id}', 'BasketController@basketRemove')->name('basketRemove');

Route::get('/order', 'BasketController@orderCheck')->name('orderCheck');

Route::post('/order', 'BasketController@orderConfirm')->name('orderConfirm');

Route::get('/{category}/{product}', 'MainController@product')->name('product');

Route::get('/{category}', 'MainController@category')->name('category');
