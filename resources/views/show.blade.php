@extends('layouts.app')

@section('title', $tasks->title)

@section('content')
<h1>{{ $tasks->description }}</h1>
@if($tasks->long_description)
          <p>{{ $tasks->long_description}}</p>
@endif

<p>{{ $tasks->created_at }}</p>
<p>{{ $tasks->updated_at }}</p>
@endsection