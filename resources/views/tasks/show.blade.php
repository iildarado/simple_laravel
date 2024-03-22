@extends('layout')

@section('content')

        <main>
            <div class="content">
                <div class="task-head">
                    <h2>Task #{{ $task->id . ' - ' . $task->head}} <a class="edit-task-link" href="/tasks/{{$task->id}}/edit">&#128395;</a></h2>
                </div>
                @include('layout.errors') 
                <div class="task-body">
                    <div class="task-tags">
                        @if ($task->tags->count() > 0)
                            @foreach ($task->tags as $tag)
                                <b>{{ $tag->name }} </b>
                            @endforeach
                        @endif 
                    </div>

                    <p> {{ $task->body }}</p>
                    
                    <div class="subtasks-list">
                        <ul>
                            @if ($task->steps->count() > 0)
                                @foreach ($task->steps as $step)
                                    <li>
                                        <form method="post" action="/steps/{{ $step->id }}">
                                            @method('PATCH')
                                            @csrf
                                            <label class="lns-checkbox">
                                                @if ($step->completed)
                                                    <i class="task-completed-head">
                                                    <input type="checkbox" name="completed" onclick="this.form.submit()" checked>
                                                @else
                                                    <i class="task-uncompleted-head">
                                                    <input type="checkbox" name="completed" onclick="this.form.submit()">
                                                @endif
                                            </label> 
                                            {{ $step->description }}
                                            </i>
                                        </form>
                                    </li>
                                @endforeach
                            @endif
                            <li>
                                <div class="add-step-of-task">
                                    <form method="post" action="/tasks/{{ $task->id }}/steps">
                                        @csrf
                                        @method('POST')
                                        <button type="submit">Add</button>
                                        <input type="hidden" name="task_id" value="{{ $task->id }}">
                                        <input type="text" name="description" placeholder="Another subtask" id="">
                                    </form>
                                </div>
                            </li>
                        </ul>
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