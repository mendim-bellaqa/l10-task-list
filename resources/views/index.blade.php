@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')



<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task!</a>
    
  
</nav>

@forelse ($tasks as $task)
    <div class="text-left">
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="{{ $task->completed ? 'line-through' : '' }}">{{ $task->title }}</a>
    </div>
@empty
    <div class="text-center">There is no task!</div>
@endforelse

@if ($tasks->count())
    <div>
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    </div>
@endif

<script>
    // Dark mode toggle logic
    const darkModeToggle = document.getElementById('darkModeToggle');

    darkModeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
</script>

@endsection
