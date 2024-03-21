<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $name = 'Almas';

    return view('welcome', ['name'=>$name, ]);
});

Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->get();
    return view('tasks.index', ['tasks'=>$tasks]);
});

Route::get('/tasks/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);

    return view('tasks.show', compact('task'));
});
