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

Route::get('/todos.index', 'TodoController@index');
Route::get('/create', 'TodoController@create');
Route::post('/store', 'TodoController@store');

Route::get('/', 'HomeController@index');

