<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Task;

class TasksController extends Controller
{
    
    public function index()
    {
        $tasks = Task::get();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) {

        return view('tasks.show', compact('task'));
    }
}