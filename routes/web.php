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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allfresh', function () {
    return view ('shop.allfresh');
});

Route::get('/complete', function () {
    return view ('shop.complete');
});


Route::get('/index', function () {
    return view ('shop.index');
});

Route::get('/fresh-summer', 'productsController@index')->name('shop.fresh-summer');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/products', function () {
    return view('shop.cart');
});

Route::get('empty', function(){
    Cart::destroy();
});


Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');


Route::get('/allfresh', 'ProductsController@index')->name('shop.allfresh');


Route::get('/checkout', 'CheckoutController@index')->name('shop.checkout');
Route::post('/checkout', 'CheckoutController@store')->name('shop.store');


Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
