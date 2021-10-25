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

Route::get('/reset', 'ResetController@reset')->name('reset');

Route::middleware('auth')->group(function () {

    Route::group([
        'namespace' => 'User',
        'prefix' => 'user',
    ], function () {
        Route::get('/orders', 'OrderController@index')->name('userOrdersIndex');
        Route::get('/orders/{order_id}', 'OrderController@show')->name('userOrdersShow');

    });

    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ], function () {
        Route::group([
            'middleware' => 'is_admin',
        ], function () {
            Route::get('/orders', 'OrderController@index')->name('home');
            Route::get('/orders/{order_id}', 'OrderController@show')->name('ordersShow');
        });

        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
    });
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

Route::get('/new', 'MainController@new')->name('new');

Route::get('/sale', 'MainController@sale')->name('sale');

Route::get('/delivery', 'MainController@delivery')->name('delivery');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/{category}/{product}', 'MainController@product')->name('product');

Route::get('/{category}', 'MainController@category')->name('category');
