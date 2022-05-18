@extends('layouts.master')

@section ('title','Series')

@section('series-content')
    <div class="container">
        <h2>CURRENT SERIES</h2>
        <div id='comics-container'>
            @foreach($comics as $comic)
                <div class="card">
                    <a href="#">
                        <div>
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <h4>{{$comic['series']}}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection