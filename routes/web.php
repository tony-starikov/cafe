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

Route::group([
    'middleware' => 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::group([
        'middleware' => 'is_admin',
    ], function () {
        Route::get('/orders', 'OrderController@index')->name('home');
    });

    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});

Route::group([
    'prefix' => 'basket',
], function () {
    Route::post('/add/{product_id}', 'BasketController@basketAdd')->name('basketAdd');

    Route::group([
        'middleware' => 'basket_not_empty',
    ], function () {
        Route::get('/', 'BasketController@basket')->name('basket');

        Route::post('/remove/{product_id}', 'BasketController@basketRemove')->name('basketRemove');

        Route::get('/check', 'BasketController@orderCheck')->name('orderCheck');

        Route::post('/confirm', 'BasketController@orderConfirm')->name('orderConfirm');

    });
});


//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout')->name('getLogout');

Route::get('/', 'MainController@index')->name('index');

Route::get('/{category}/{product}', 'MainController@product')->name('product');

Route::get('/{category}', 'MainController@category')->name('category');
