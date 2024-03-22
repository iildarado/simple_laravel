@extends('layout')

@section('content')
    
    <main>
        <div class="content">
            <h1>Creating New Task</h1>

                <div class="task-creating-form">

                    @include('layout.errors') 
                    
                    <form method="POST" action="/tasks">
                        @csrf
                        <input type="hidden" name="" value="">
                        <div class="task-creating-input">
                            <p>Task name: </p>
                            <input type="text" name="head" id="" value="" placeholder="Type name of your task">
                            <br>
                            <p>Task body: </p>
                            <textarea name="body" id="" cols="30" placeholder="Type text of your task" rows="10"></textarea>
                        </div>
                        <div class="task-creating-button">
                            <button type="submit" class="">Create</button>
                        </div>
                    </form>
                </div>

        </div>
    </main>    

@endsection