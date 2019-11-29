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
Route::get('/products', 'ProductController@index');
Route::get('/products/views/{id}', 'ProductController@views')->where('id', '[0-9]+');
Route::match(array('GET', 'POST'), '/products/news', 'ProductController@news')->where('id', '[0-9]+');
Route::get('/products/json', 'ProductController@listJson');
