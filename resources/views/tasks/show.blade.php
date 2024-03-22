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
                <div>
                    <label class="lns-checkbox">
                    @if ($task->completed)
                        <input type="checkbox" checked>
                    @else
                        <input type="checkbox" >
                    @endif
                    <span>Completed</span>
                    </label>
                </div>
                <div>
                    <a href="/tasks/{{$task->id}}/edit">Edit</a>
                </div>
                <div class="task-delete">
                    <form method="post" action="/tasks/{{ $task->id }}">
                        
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="" value="">
                        <button type="submit" class="">Delete</button>
                        
                    </form>
                </div>
            </div>
        </main>

@endsection