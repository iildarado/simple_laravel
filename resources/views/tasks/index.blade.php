@extends('layout')

@section('content')

        <main>
            <div class="content">
                <h2>Tasks list</h2>
                <div class="tasks-list">
                    <ul>
                    @foreach ($tasks as $task)
                            <li><p><a href="/tasks/{{ $task->id }}"> {{ $task->head }} </a>({{ $task->created_at != NULL ? $task->created_at : 'Без даты' }})</p></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </main>

@endsection