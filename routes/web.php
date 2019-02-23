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
Route::get('/get-users', 'TestController@getUsersPage');
Route::post('/post-users', 'TestController@getUsers');
Route::get('/', 'HomeController@index')->name('main.page');
//Route::get('/{slug}', 'PageController@show')->name('page');
Route::get('/catalog/{slug}', 'ProductController@show')->name('show.product');
Route::get('/catalog', 'ProductController@catalog')->name('show.catalog');
Route::get('/category/{slug}', 'CategoryController@index')->name('show.category');
Route::get('/{slug}', 'PageController@show')->name('show.page');
Route::post('/search', 'SearchController@search')->name('search');
Route::get('/search', 'SearchController@search');
