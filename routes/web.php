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

Route::get('/', 'BiodataController@index');
Route::post('/insert', 'BiodataController@store');
Route::post('/del/{id}', 'BiodataController@delete');
Route::post('/update/{id}', 'BiodataController@update');