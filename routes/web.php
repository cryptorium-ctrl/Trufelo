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


Route::get('/index', 'HomeController@index')->name('index');


Auth::routes();


Route::get('/logout', 'HomeController@logout');

/*Products*/

/*--- Fresh Products ---*/
Route::get('/allfresh', 'ProductsController@index_allfresh')->name('shop.allfresh');

Route::get('/shop/fresh-summer', 'ProductsController@index_summer')->name('shop.fresh-summer');
Route::get('/shop/fresh-winter', 'ProductsController@index_winter')->name('shop.fresh-winter');
Route::get('/shop/fresh-white', 'ProductsController@index_white')->name('shop.fresh-white');

/*--- Truffled Products ---*/

Route::get('/truffled-products', 'ProductsController@index_truffled_products')->name('shop.truffled-products');

Route::get('/shop/black-truffle-oil', 'ProductsController@index_black_truffle_oil')->name('shop.black-truffle-oil');
Route::get('/shop/white-truffle-oil', 'ProductsController@index_white_truffle_oil')->name('shop.white-truffle-oil');
Route::get('/shop/truffle-vinegar', 'ProductsController@index_truffle_vinegar')->name('shop.truffle-vinegar');

/*Recipes*/

Route::get('/recipes', 'RecipesController@index_allrecipes')->name('recipes.allrecipes');

Route::get('/recipes/minced-turkey', 'RecipesController@index_MincedTurkey')->name('recipes.minced-turkey');
Route::get('/recipes/seared-scallops', 'RecipesController@index_SearedScallops')->name('recipes.seared-scallops');
Route::get('/recipes/ribeye-with-truffle', 'RecipesController@index_RibeYeWithTruffle')->name('recipes.ribeye-with-truffle');
Route::get('/recipes/truffle-gravy', 'RecipesController@index_TruffleGravy')->name('recipes.truffle-gravy');
Route::get('/recipes/truffle-potatoes', 'RecipesController@index_Potatoes')->name('recipes.truffle-potatoes');
Route::get('/recipes/truffle-eggs', 'RecipesController@index_Eggs')->name('recipes.truffle-eggs');
Route::get('/recipes/truffle-sausages', 'RecipesController@index_Sausages')->name('recipes.truffle-sausages');
Route::get('/recipes/truffle-risotto', 'RecipesController@index_Risotto')->name('recipes.truffle-risotto');
Route::get('/recipes/kale-with-truffle', 'RecipesController@index_KaleWithTruffle')->name('recipes.kale-with-truffle');
Route::get('/recipes/truffle-french-fries', 'RecipesController@index_FrenchFries')->name('recipes.truffle-french-fries');
Route::get('/recipes/egg-toeast-with-truffles', 'RecipesController@index_EggToast')->name('recipes.egg-toeast-with-truffles');
Route::get('/recipes/bacon-sandwich-and-truffle-sauce', 'RecipesController@index_BaconSandwich')->name('recipes.bacon-sandwich-and-truffle-sauce');
Route::get('/recipes/burger-with-truffles', 'RecipesController@index_Burger')->name('recipes.burger-with-truffles');

Route::get('/recipes/master-recipes', 'RecipesController@index_Master');


/*Cart*/

Route::get('/cart', 'ProductsController@index_cart_like')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('empty', function(){
    Cart::destroy();
});


Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

/*Checkout*/

Route::get('/checkout', 'CheckoutController@index')->name('shop.checkout.index');
Route::post('/shop/checkout/store', 'CheckoutController@store')->name('shop.checkout.store');
Route::get('/shop/complete', 'CheckoutController@complete')->name('shop.complete');


Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

/*Voyager CMS*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

