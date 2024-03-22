@extends('layout')

@section('content')

        <main>
            <div class="content">
                <h1>Your tasks</h1>
                <div class="tasks-list">
                    <ul>
                    @foreach ($tasks as $task)
                        @if ($task->completed)
                            <li class="task-completed-head">
                        @else
                            <li class="task-uncompleted-head">
                        @endif
                            <p>
                                <a href="/tasks/{{ $task->id }}"> {{ $task->head }} &#9;
                                    <i>({{ $task->created_at != NULL ? $task->created_at->toFormattedDateString() : 'Без даты' }})</i> 
                                </a> 
                            </p>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </main>

@endsection