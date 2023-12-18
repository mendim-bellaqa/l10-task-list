<h1>The list of tasks</h1>

<div class="text-center">
    @forelse ($tasks as $task)
        <div class="text-center">
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div class="text-center">There is no task!</div>
    @endforelse
</div>
