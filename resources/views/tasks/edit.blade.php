@extends('layout')

@section('content')

    <main>
        <div class="content">
            <h1>Editing Task #{{ $task->id }}</h1>

                <div class="task-creating-form">
                    
                    @include('layout.errors') 
                    <form method="post" action="/tasks/{{ $task->id }}">
                        
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="" value="">
                        <div class="task-creating-input">
                            <p>Task name: </p>
                            <input type="text" name="head" id="" value="{{$task->head}}" placeholder="Type name of your task">
                            <br>
                            <br>
                            <p>Task body: </p>
                            <textarea name="body" id="" cols="30" rows="10">{{$task->body}}</textarea>
                        </div>
                        <br>
                        <div class="task-edit-checkbox">
                            <label class="lns-checkbox">
                            @if ($task->completed)
                                <input type="checkbox" name="completed" checked>
                            @else
                                <input type="checkbox" name="completed">
                            @endif
                            <span>Completed</span>
                            </label>
                        </div>
                        <br>
                        <div class="task-creating-button">
                            <button type="submit" class="">Edit</button>
                        </div>
                    </form>
                </div>

        </div>
    </main>    

@endsection