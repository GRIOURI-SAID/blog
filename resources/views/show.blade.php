@extends('layouts.master')

@section('title')
    Details
@endsection

@section('content')
    @include('partials._her')

    <div class="container mt-4">
        <h1>{{ $post->title }}</h1>
        <figure class="image is-8by3 mt-4">
            <img src="{{ asset('/storage/' . $post->image) }}" alt="Placeholder image">
        </figure>

        <p class="mt-4">{!! $post->body !!}</p>
    </div>
@endsection
