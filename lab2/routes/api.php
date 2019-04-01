<?php

Route::get('/clients', 'ClientController@Get');
Route::get('/services', 'ServiceController@Get');
Route::get('/applications', 'ApplicationController@Get');

Route::post('/clients', 'ClientController@Create');
Route::post('/services', 'ServiceController@Create');
Route::post('/applications', 'ApplicationController@Create');

Route::put('/clients/{id}', 'ClientController@Update');
Route::put('/services/{id}', 'ServiceController@Update');
Route::put('/applications/{id}', 'ApplicationController@Update');

Route::delete('/clients/{id}', 'ClientController@Delete');
Route::delete('/services/{id}', 'ServiceController@Delete');
Route::delete('/applications/{id}', 'ApplicationController@Delete');
