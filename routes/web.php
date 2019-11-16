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
  'prefix' => 'admin',
  'middleware' => 'auth'
], function (){
  Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
  Route::group(['prefix' => 'products'], function(){
   Route::get('/', 'ProductController@index')->name('backend.product.index');
   Route::get('/create', 'ProductController@create')->name('backend.product.create');
   Route::post('/store', 'ProductController@store')->name('backend.product.store');
   Route::get('/edit/{id}', 'ProductController@edit')->name('backend.product.edit');
   Route::get('/show/{id}', 'ProductController@show')->name('backend.product.show');
   Route::put('/update/{id}', 'ProductController@update')->name('backend.product.update');
   Route::delete('/destroy{id}', 'ProductController@destroy')->name('backend.product.destroy');
   Route::get('/editimg/{id}', 'ProductController@editimg')->name('backend.product.editimg');
   Route::get('/deleteimg/{id}/{product_id}', 'ProductController@deleteimg')->name('backend.product.deleteimg');
   Route::get('/{id}', 'ProductController@show')->name('backend.product.show');
   
   
 });
  Route::group(['prefix' => 'users'], function(){
    Route::get('/', 'UserController@index')->name('backend.user.index');
    Route::get('/create', 'UserController@create')->name('backend.user.create');
    Route::post('/store', 'UserController@store')->name('backend.user.store');
    Route::get('/edit{id}', 'UserController@edit')->name('backend.user.edit');
    Route::put('/update/{id}', 'UserController@update')->name('backend.user.update');
    Route::delete('/destroy{id}', 'UserController@destroy')->name('backend.user.destroy');
    Route::get('/{user_id}', 'UserController@show')->name('backend.user.show');
  });
  Route::group(['prefix' => 'categories'], function(){
    Route::get('/', 'CategoryController@index')->name('backend.category.index');
    Route::get('/create', 'CategoryController@create')->name('backend.category.create');
    Route::post('/store', 'CategoryController@store')->name('backend.category.store');
    Route::get('/edit{id}', 'CategoryController@edit')->name('backend.category.edit');
    Route::put('/update/{id}', 'CategoryController@update')->name('backend.category.update');
    Route::delete('/destroy{id}', 'CategoryController@destroy')->name('backend.category.destroy');
    Route::get('/{id}', 'CategoryController@show')->name('backend.category.show');
    
  });
  Route::group(['prefix' => 'oders'], function(){
    Route::get('/', 'OderController@index')->name('backend.oder.index');
    Route::get('/finish', 'OderController@finish')->name('backend.oder.finish');
    Route::get('/show/{id}', 'OderController@show')->name('backend.oder.show');
    Route::get('/udstatus/{id}', 'OderController@udstatus')->name('backend.oder.udstatus');
    // Route::post('/store', 'OderController@store')->name('backend.oder.store');
    // Route::get('/edit{id}', 'OderController@edit')->name('backend.oder.edit');
    // Route::put('/update/{id}', 'OderController@update')->name('backend.oder.update');
    // Route::delete('/destroy{id}', 'OderController@destroy')->name('backend.oder.destroy');
    // Route::get('/{oder_id}', 'OderController@show')->name('backend.oder.show');
  });
  Route::group(['prefix' => 'oders_detail'], function(){
    Route::delete('/destroy{id}/{oder_id}', 'Oder_detailController@destroy')->name('backend.oder_detail.destroy');
    Route::get('/create/{id}', 'Oder_detailController@create')->name('backend.oder_detail.create');
    Route::post('/store', 'Oder_detailController@store')->name('backend.oder_detail.store');
    // Route::get('/{oder_id}', 'OderController@show')->name('backend.oder.show');
  });
});

Route::group([
  'namespace' => 'Frontend',
  'prefix' => '/'
], function (){
  Route::get('/', 'IndexController@index')->name('frontend.dashboard');
  Route::get('/shop/category{id}', 'ShopController@shop')->name('frontend.shop');
  Route::get('/product/{id}', 'ProductController@product')->name('frontend.product');
  Route::get('/cart/', 'CartController@index')->name('frontend.cart');
  Route::post('/makePay/', 'PayController@pay')->name('frontend.makepay');
  Route::get('/cart/add/{id}', 'CartController@add')->name('frontend.cart.add');
  Route::post('/cart/add-view-product/{id}', 'CartController@add_view_product')->name('frontend.cart.addproduct');
  Route::get('/contact', 'IndexController@contact')->name('frontend.contact');
  Route::post('/search', 'SearchController@search')->name('frontend.search');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/getcache', 'HomeController@getcache')->name('getcache');
// Route::get('/set', 'SessionController@set')->name('set');
// Route::get('/get', 'SessionController@get')->name('get');
// Route::get('/get2', 'SessionController@get2')->name('get2');
// Route::get('/cookie/set', 'CookieController@set')->name('cookieset');
// Route::get('/cookie/get', 'CookieController@get')->name('cookieget');