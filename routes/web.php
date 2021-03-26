<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductController@index');
Route::get('/backup', 'ProductController@index2');
Route::post('/', 'ProductController@search');

Route::get('login', 'AdminController@login');
Route::get('/admin-logout', 'AdminController@logout');
Route::post('login/post', 'AdminController@login_post');
Route::get('admin', 'AdminController@dashboard')->middleware('checklogged');

// Product
Route::get('product', 'AdminController@get_product');
Route::post('product/post', 'ProductController@store');
Route::post('buyers/post2', 'ProductController@backup');
Route::post('product/update', 'ProductController@update');
Route::post('buyers/update2', 'ProductController@update2');

Route::get('/product/{id}/delete', 'ProductController@destroy');
Route::get('/buyers/{id}/delete', 'ProductController@destroy2');
Route::get('/product/{slug}', 'ProductController@detail_product');

// edit
Route::get('product/{id}/edit', 'ProductController@edit');