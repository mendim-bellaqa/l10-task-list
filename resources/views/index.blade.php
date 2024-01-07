@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')
    @forelse ($tasks as $task)
        <div class="text-center">
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div class="text-center">There is no task!</div>
    @endforelse

    @if ($tasks->count())
    <div>
        <nav>
            {{ $tasks->links() }}
        </nav>
    </div
    @endif
@endsection 