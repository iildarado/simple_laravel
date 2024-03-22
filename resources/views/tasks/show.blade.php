@extends('layout')

@section('content')

        <main>
            <div class="content">
                <div class="task-head">
                    <h2>Task #{{ $task->id . ' - ' . $task->head}}</h2>
                </div>
                <div class="task-body">
                    <p> {{ $task->body }}</p>
                </div>
                
            </div>
        </main>

@endsection