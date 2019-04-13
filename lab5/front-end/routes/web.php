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
  return view('index');
});
Route::get('/clients', 'ApiController@AllClients');
Route::get('/clients/{id}', 'ApiController@OneClient');
Route::post('/clients/delete', 'ApiController@DeleteClient');
Route::post('/clients/add', 'ApiController@AddClient');
Route::post('/clients/change', 'ApiController@ChangeClient');

Route::get('/services', 'ApiController@AllServices');
Route::get('/services/{id}', 'ApiController@OneService');
Route::post('/services/delete', 'ApiController@DeleteService');
Route::post('/services/add', 'ApiController@AddService');
Route::post('/services/change', 'ApiController@ChangeService');

Route::get('/orders', 'ApiController@AllOrders');
Route::get('/orders/{id}', 'ApiController@OneOrder');
Route::post('/orders/delete', 'ApiController@DeleteOrder');
Route::post('/orders/add', 'ApiController@AddOrder');
Route::post('/orders/change', 'ApiController@ChangeOrder');
