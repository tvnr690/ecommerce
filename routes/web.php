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

Route::get('/category', 'CategoryController@index')->name('admin.category');
Route::get('/category/create', 'CategoryController@create')->name('admin.category.create');
Route::post('/category/store', 'CategoryController@store')->name('admin.category.store');
Route::delete('/category/{category}', 'CategoryController@destroy')->name('admin.category.delete');
Route::get('/category/{category}/edit', 'CategoryController@edit')->name('admin.category.edit');
Route::patch('/category/{category}', 'CategoryController@update')->name('admin.category.update');
