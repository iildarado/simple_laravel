@extends('layout')

@section('content')

        <main>
            <div class="content">
                <h1>Your tasks</h1>
                <div class="tasks-list task-tags">
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
                                @if ($task->tags->count() > 0)
                                    @foreach ($task->tags as $tag)
                                        @if (!$task->completed)
                                            <b>{{ $tag->name }} </b>
                                        @endif
                                    @endforeach
                                @endif 
                            </p>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </main>

@endsection