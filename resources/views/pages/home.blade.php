@extends('layouts.master')


@section('title')
    Home
@endsection

@section('content')
    @include('partials._slides')
    <div>
        <figure class="image ">
            <img src="{{ asset('Yellow Modern Funny Moment Compilation Youtube Thumbnail.png') }}" width="100%"
                alt="Placeholder image" />
        </figure>
    </div>


    <div class="container">
        <h1>Last Post</h1>
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


        <h1>Our Service</h1>
        <section class="hero is-small is-dark">
            <div class="hero-body">
                <div class="columns mt-4">
                    @foreach ($services as $service)
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <a href="/service/{{ $service->id }}">
                                        <figure class="image is-4by3">
                                            <img src="{{ asset('/storage/' . $service->image) }}" alt="Placeholder image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <div class="media">

                                        <div class="media-content">
                                            <p class="title is-4">{{ $service->title }}</p>

                                        </div>
                                    </div>

                                    <div class="content">
                                        <p>{{ $service->description }}</p>
                                        <br>
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>
        </section>




    </div>
@endsection
