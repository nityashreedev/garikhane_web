@extends('layouts.frontendlayout')
@section('content')

<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> महत्वपूर्ण लिंक  </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>महत्वपूर्ण लिंक </a></li>
            </ul>
        </div>
    </div>

<div class="eventss">
        <div class="main-container-1 shadow whites">
            <div class="container">
                <div class="row">
                  @if($link)
                                  @foreach($link as $l)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="events-line oksaa">
                            <div class="col-md-12 col-sm-12  pl">
                                <h6>
                                    <a target="_blank" href="{{$l->link}}" class="white">{{$l->title}} </a>
                                </h6>
                                <ul class="gb-list">
                                    <li>
                                        <a  target="_blank" href="{{$l->link}}">{{$l->link}} </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection