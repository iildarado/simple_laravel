<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Almas';
    $tasks = [
        'Просмотреть весь курс',
        'Прочитать книгу',
        'Написать свой проект'
    ];

    return view('welcome', ['name'=>$name, 'tasks'=>$tasks]);

});
