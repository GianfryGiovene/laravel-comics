@extends('layouts.master')

@section('title', 'Series')

@section('series-content')

    <div>
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <div id='comics-container'>
                @foreach ($comics as $index => $comic)
                    <div class="card">
                        <a href="{{ route('details', ['id' => $index]) }}">
                            <div>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h4>{{ $comic['series'] }}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <h3><a href="/">LOAD MORE</a></h3>
            </div>
        </div>
    </div>
    <div>
        <ul>
            @foreach ($shopL as $item)
                <li>
                    <a href="">
                        <img src="{{ asset($item['url']) }}" alt="">
                        <span>{{ $item['text'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
