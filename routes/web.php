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
Route::get('/backup', function () {
    return view('admin/backup');
});

Route::get('login', 'AdminController@login');
Route::get('logout', 'AdminController@logout');
Route::post('login/post', 'AdminController@login_post');
Route::get('admin', 'AdminController@dashboard')->middleware('checklogged');

// Product
Route::get('product', 'AdminController@get_product');
Route::post('product/post', 'ProductController@store');
Route::get('product/{id}/edit', 'ProductController@edit');
Route::post('product/update', 'ProductController@update');

Route::get('/product/{id}/delete', 'ProductController@destroy');
Route::get('/product/{slug}', 'ProductController@detail_product');

// edit
