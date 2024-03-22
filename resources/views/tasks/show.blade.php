@extends('layout')

@section('content')

        <main>
            <div class="content">
                <div class="task-head">
                    <h2>Task #{{ $task->id . ' - ' . $task->head}} <a class="edit-task-link" href="/tasks/{{$task->id}}/edit">&#128395;</a></h2>
                </div>
                <div class="task-body">
                    <p> {{ $task->body }}</p>
                    <div class="subtasks-list">
                        @if ($task->steps->count() > 0)
                            <ul>
                                @foreach ($task->steps as $step)
                                    <li><i>{{ $step->description }}</i>
                                @endforeach
                            </ul>
                        @endif
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
                
            </div>
        </main>

@endsection