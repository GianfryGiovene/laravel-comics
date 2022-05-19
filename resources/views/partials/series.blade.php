@extends('layouts.master')

@section ('title','Series')

@section('series-content')
    
        <div>
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
                <div>
                    <h3><a href="{{asset("images/dc-logo.png")}}">LOAD MORE</a></h3>
                </div>
            </div>
        </div>
        <div>
            <ul>
                <li>
                    <a href="">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                        <span>DIGITAL COMICS</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                        <span>SUBSCRIPTION</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                        <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </div>
    
@endsection