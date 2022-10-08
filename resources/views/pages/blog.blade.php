@extends('layouts.master')


@section('title')
    Blog
@endsection

@section('content')
    @include('partials._her')
    <div class="container">
        <nav class="breadcrumb mt-4" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Bulma</a></li>

                <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
            </ul>
        </nav>

        <div class="columns mt-4">
            @foreach ($posts as $post)
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <a href="/blog/{{ $post->id }}">
                                <figure class="image is-4by3">
                                    <img src="{{ asset('/storage/' . $post->image) }}" alt="Placeholder image">
                                </figure>
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="media">

                                <div class="media-content">
                                    <p class="title is-4">{{ $post->title }}</p>

                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
@endsection
