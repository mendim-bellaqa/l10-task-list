@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
    .error-message {
        color: red;
        font-size:0, 8rem;
    }
</style>
@endsection

@section('content')
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" placeholder="Title" />
            @error('title')
                <p class='error-message'>{{ $message }}</p>
            @enderror
    </div>

    <div>
        <label>Description</label>
        <textarea name="description" id="description" rows="5" placeholder="Description"></textarea>
        @error('description')
        <p class='error-message'>{{ $message }}</p>
            @enderror
        <textarea name="long_description" id="long_description" rows="10" placeholder="Long Description"></textarea>
        @error('long_description')
        <p class='error-message'>{{ $message }}</p>
            @enderror
    </div>

    <div>
        <button type="submit">Add Task</button>
    </div>
</form>
@endsection
