@extends('layouts.app')

@section('content')
    <div class="container text-center border border-2 border-dark">
        <h1 class="text-capitalize">{{ $post->title }}</h1>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <p>
            {{ $post->content }}
        </p>
    </div>
@endsection
