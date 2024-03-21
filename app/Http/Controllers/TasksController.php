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

    public function create() 
    {
        return view('tasks.create');
    }

    public function store(Request $request) 
    {
        Task::create([
            'head' => $request->head,
            'body' => $request->body
        ]);

        return redirect('/tasks');
    }

}
