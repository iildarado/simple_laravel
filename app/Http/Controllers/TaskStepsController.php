<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskStepsController extends Controller
{
    //

    public function update(Step $step) 
    {
        $step->update(['completed' => request()->has('completed')]);

        return back();
    }

    public function store(Task $task)
    {
        $task->addStep(request()->validate([
            'description' => 'required'
        ]));
        Step::create([
            'task_id' => $task->id,
            'description' => request('description')
        ]);

        return back();
    }
}
