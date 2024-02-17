@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check())
                        {{ __('You are logged in!') }} {{ Auth::user()->name }}
                    @endif

                </div>
                <div class="mt-5 mb-5">
                    <a href="/tasks">
                        <button class="btn border-black text-black bg-white">See tasks</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
