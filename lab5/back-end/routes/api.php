<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/clients', 'ClientController@all');
Route::get('/clients/{id}', 'ClientController@one');
Route::post('/clients', 'ClientController@store');
Route::put('/clients/{id}', 'ClientController@change');
Route::delete('/clients/{id}', 'ClientController@delete');
Route::get('/services', 'ServiceController@all');
Route::get('/services/{id}', 'ServiceController@one');
Route::post('/services', 'ServiceController@store');
Route::put('/services/{id}', 'ServiceController@change');
Route::delete('/services/{id}', 'ServiceController@delete');
Route::get('/orders', 'OrderController@all');
Route::get('/orders/{id}', 'OrderController@one');
Route::post('/orders', 'OrderController@store');
Route::put('/orders/{id}', 'OrderController@change');
Route::delete('/orders/{id}', 'OrderController@delete');

