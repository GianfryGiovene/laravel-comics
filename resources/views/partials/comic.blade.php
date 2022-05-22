@extends('layouts.master')

@section('title', 'Comic')

@section('comic-content')
    <section id="comic">
        <div>
            <div class="container">

                <div>
                    <a href="/comics">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </a>
                    <span id="comic-book">COMIC BOOK</span>
                    <span>VIEW GALLERY</span>
                </div>

            </div>
        </div>
        <div class="container">
            <div>
                <h2>{{ $comic['title'] }}</h2>
                <div id="price-availability">
                    <div>
                        <div>{{ $comic['price'] }}</div>
                        <span>AVAILABLE</span>
                    </div>
                    <div>Check Availability</div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div>
                <img src="{{ asset('images/dc-logo.png') }}" alt="">
            </div>
        </div>
    </section>

@endsection
