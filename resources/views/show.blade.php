@extends('layouts.app')

@section('title', $task->title)

@section('content')
<h1>{{ $task->description }}</h1>
@if($task->long_description)
          <p>{{ $task->long_description}}</p>
@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<p>
    @if ($task->completed)
      Completed
    @else
      Not completed
    @endif
  </p>

  <div>
    <a href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>
  </div>

  <div>
    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
      @csrf
      @method('PUT')
      <button type="submit">
        Mark as {{ $task->completed ? 'not completed' : 'completed' }}
      </button>
    </form>
  </div>

<div>
          <form method="post" action="{{ route('tasks.destroy', ['task'=>$task->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
</div>
@endsection