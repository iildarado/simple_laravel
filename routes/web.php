<?php

use Illuminate\Support\Facades\Route;

define('CONTROLLERS_PATH', 'App\Http\Controllers\\');

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', CONTROLLERS_PATH . 'MainController@index');
Route::get('/tasks', CONTROLLERS_PATH . 'TasksController@index');
Route::get('/tasks/create', CONTROLLERS_PATH . 'TasksController@create');
Route::post('/tasks', CONTROLLERS_PATH. 'TasksController@store');
Route::get('/tasks/{task}', CONTROLLERS_PATH . 'TasksController@show');

