<?php

use Illuminate\Support\Facades\Route;

define('CONTROLLERS_PATH', 'App\Http\Controllers\\');

Route::get('/', CONTROLLERS_PATH . 'MainController@index');
Route::get('/tasks', CONTROLLERS_PATH . 'TasksController@index');
Route::get('/tasks/create', CONTROLLERS_PATH . 'TasksController@create');

Route::post('/tasks', CONTROLLERS_PATH. 'TasksController@store');

Route::get('/tasks/{task}', CONTROLLERS_PATH . 'TasksController@show');

Route::get('/tasks/{task}/edit', CONTROLLERS_PATH. 'TasksController@edit');
Route::patch('/tasks/{task}', CONTROLLERS_PATH. 'TasksController@update');

Route::delete('/tasks/{task}', CONTROLLERS_PATH. 'TasksController@destroy');

Route::patch('/steps/{step}', CONTROLLERS_PATH. 'TaskStepsController@update');
Route::post('/tasks/{task}/steps', CONTROLLERS_PATH. 'TaskStepsController@store');