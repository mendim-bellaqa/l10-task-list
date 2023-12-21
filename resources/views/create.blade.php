@extends('layouts.app')

@section('title', 'Add Task')
@section('content')
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" placeholder="Title" />
    </div>

    <div>
        <label>Description</label>
        <textarea name="description" id="description" rows="5" placeholder="Description"></textarea>
        <textarea name="long_description" id="long_description" rows="10" placeholder="Long Description"></textarea>
    </div>

    <div>
        <button type="submit">Add Task</button>
    </div>
</form>
@endsection
