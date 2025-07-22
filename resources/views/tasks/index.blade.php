@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>To-Do List</h1>
      <a href="{{route('tasks.create')}}" class="btn btn-primary">Add Task</a>
    </div>

    @if($tasks->isEmpty())
       <div>No tasks found. Create your first task! </div>
    @else 
      <div class="list-group">
        @foreach ($tasks as $task)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <form action="{{ route('tasks.toggle-complete', $task) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm me-2">
                            @if($task->completed)
                            <i  class="bi bi-check-square-fill text-success"></i>
                            @else
                            <i class="bi bi-square text-secondary"></i>
                            @endif
                        </button>
                    </form>
                    <span @class(['text-decoration-line-through' => $task->completed])>
                      <a href="{{ route('tasks.show', $task)}}" class="text-decoration-none">
                        {{ $task->title}}
                      </a>
                    </span>
                </div>
            </div>
        @endforeach
      </div>
@endif
@endsection