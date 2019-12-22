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

Route::get('/','ListController@index');
Route::post('/','ListController@store');
Route::patch('/{task}','ListController@update');
Route::get('/{task}/edit','ListController@edit');
Route::delete('/{task}','ListController@destroy');