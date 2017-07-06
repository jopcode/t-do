<?php

Route::get('/', 'TasksController@index');

Auth::routes();

Route::get('/task', 'TasksController@add');
Route::post('/task', 'TasksController@create');

Route::get('/tasks/{task}', 'TasksController@edit');
Route::post('/tasks/{task}', 'TasksController@update');