@extends('layouts.master')


@section('title')
    Contact
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

        <div class="columns">
            <div class="column">Tele : 03786673563</div>
            <div class="column">Email :exemple@gmail.com</div>
            <div class="column">Address :adress exemple</div>
        </div>

        <div class="columns">
            <div class="column is-9 mt-4" style="height: 200px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110098.31140249204!2d-9.647785355059819!3d30.41987634403464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b6e9daad1cc9%3A0xbcf8d0b78bf48474!2sAgadir%2080000!5e0!3m2!1sfr!2sma!4v1663285403753!5m2!1sfr!2sma"
                    width="100%" style="border:0; height=200px" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="column is-3">
                <form action="{{ url('/message') }}" method="POST">
                    {{ @csrf_field() }}
                    @method('post')
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" name="name" type="text" placeholder="Text input">
                        </div>
                    </div>



                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" name="email" type="email" placeholder="Email input">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                        </div>

                    </div>



                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
                        </div>
                    </div>




                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Send</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
