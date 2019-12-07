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

Route::get('/restoran/create', 'RestoranController@create');
Route::get('/restoran', 'RestoranController@index');
Route::post('/restoran', 'RestoranController@store');

