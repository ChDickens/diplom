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

Route::get('/', 'HomeController@index')->name('main.page');
//Route::get('/{slug}', 'PageController@show')->name('page');
Route::get('/catalog/{slug}', 'ProductController@show')->name('show.product');
Route::get('/{slug}', 'PageController@show')->name('show.page');