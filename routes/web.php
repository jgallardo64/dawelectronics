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

Route::get('category/{category}', 'CategoriesController@getCategory');

Route::get('category/{category}/{subCategory}', 'CategoriesController@getSubCategory');

Route::get('product/{product}', 'ProductsController@getProduct');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
