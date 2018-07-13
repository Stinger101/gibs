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

Route::get('/', 'LandingController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/message', ['middleware'=>'cors','MessageController@index'])->name('messages');
Route::get('/landing','LandingController@index')->name('landing');
Route::get('/shop','ShopController@index')->name('shop');
Route::get('/products/{id}','ProductController@show')->name('product');
Route::get('/product/addy',function(){
  return view('shop.create-product');
});
Route::get('/product/{id}','ProductController@edit')->name('edit-product');
Route::get('image/product/{id}','ProductController@editimage')->name('edit-product-image');
Route::post('/products','ProductController@store')->name('products');
Route::get('/add-to-cart','CartController@store')->name('addcart');

Route::get('/cart/{id}','CartController@show');
Route::get('/coffee-house','CoffeehouseController@index');
Route::get('/distributors','DistributorController@index');
Route::get('/contact','MessageController@create');
Route::get('about',function(){return view('about-us');});
Route::get('articles',function(){return view('blog');});
Route::get('/coffee-house/add','CoffeehouseController@create');
Route::get('/brand/add','BrandController@create');
Route::get('/distributors/add','DistributorController@create');
Route::get('/contact-us/show','MessageController@create');
Route::post('/coffee-house','CoffeehouseController@store');
Route::post('/brand','BrandController@store');
Route::post('/distributors','DistributorController@store');
Route::post('/contact','MessageController@store');
Route::get('/admin',function(){
  return view('admin.index');
});
Route::patch('cart/{id}','CartController@update');
Route::patch('product/{id}','ProductController@update')->name('update-product');
