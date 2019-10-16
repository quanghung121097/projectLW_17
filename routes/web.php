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
Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin'
], function (){
    Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
    Route::group(['prefix' => 'products'], function(){
       Route::get('/', 'ProductController@index')->name('backend.product.index');
       Route::get('/{id}', 'ProductController@show')->name('backend.product.show');
       Route::get('/create', 'ProductController@create')->name('backend.product.create');
    });
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'UserController@index')->name('backend.user.index');
        Route::get('/create', 'UserController@create')->name('backend.user.create');
        Route::get('/{user_id}', 'UserController@show')->name('backend.user.show');
    });
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', 'CategoryController@index')->name('backend.category.index');
        Route::get('/{id}', 'CategoryController@show')->name('backend.category.show');
        Route::get('/create', 'CategoryController@create')->name('backend.category.create');
    });
});
Route::group([
    'namespace' => 'Frontend',
    'prefix' => 'user'
], function (){
    Route::get('/', 'IndexController@index')->name('frontend.dashboard');
    Route::get('/shop', 'IndexController@shop')->name('frontend.shop');
    Route::get('/product', 'IndexController@product')->name('frontend.product');
    Route::get('/cart', 'IndexController@cart')->name('frontend.cart');
    Route::get('/contact', 'IndexController@contact')->name('frontend.contact');
});
