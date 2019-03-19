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

Route::get('/', 'PagesController@index');
Route::get('/products', 'PagesController@products');
Route::get('/product', 'PagesController@product');
Route::get('/cart', 'PagesController@cart');
Route::get('/checkout', 'PagesController@checkout');
Route::get('/thankyou', 'PagesController@thankyou');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
