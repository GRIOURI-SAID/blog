@extends('layouts.master')

@section('title')
    Details Service
@endsection

@section('content')
    @include('partials._her')

    <div class="container mt-4">
        <h1>{{ $service->title }}</h1>
        <figure class="image is-8by3 mt-4">
            <img src="{{ asset('/storage/' . $service->image) }}" alt="Placeholder image">
        </figure>

        <p class="mt-4">{!! $service->body !!}</p>
    </div>
@endsection
