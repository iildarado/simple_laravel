<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Task;

class TasksController extends Controller
{
    
    public function index()
    {
        $tasks = Task::latest('completed')->get();
        $count_of_tasks = count($tasks) % 2 == 0 ? (int)count($tasks) / 2 : (int)(count($tasks) / 2) + 1;

        for ($i = 0; $i < $count_of_tasks; $i++) {
            [$tasks[$i], $tasks[count($tasks) - $i - 1]] = [$tasks[count($tasks) - $i - 1], $tasks[$i]];
        }

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
        $request->validateWithBag('default', [
            'head' => 'required',
            'body' => 'required',
        ]);

        Task::create([
            'head' => $request->head,
            'body' => $request->body
        ]);

        return redirect('/tasks');
    }
    
    public function edit(Task $task) 
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task) 
    {
        $request->validateWithBag('default', [
            'head' =>'required',
            'body' =>'required',
        ]);

        $task->update([
            'head' => $request->head,
            'body' => $request->body
        ]);

        return redirect('/tasks/' . $task->id);
    }

    public function destroy(Task $task) 
    {
        $task->delete();

        return redirect('/tasks');
    }

}
