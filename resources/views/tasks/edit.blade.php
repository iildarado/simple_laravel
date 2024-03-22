@extends('layout')

@section('content')

    <main>
        <div class="content">
            <h2>Editing Task #{{ $task->id }}</h1>

                <div class="task-creating-form">
                    
                    <form method="post" action="/tasks/{{ $task->id }}">
                        
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="" value="">
                        <div class="task-creating-input">
                            <p>Task name: </p>
                            <input type="text" name="head" id="" value="{{$task->head}}" placeholder="Type name of your task">
                            <br>
                            <p>Task body: </p>
                            <input type="text" name="body" id="" value="{{$task->body}}" placeholder="Type text of your task">
                        </div>
                        <div class="task-creating-button">
                            <button type="submit" class="">Edit</button>
                        </div>
                    </form>
                </div>

        </div>
    </main>    

@endsection