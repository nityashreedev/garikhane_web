@extends('layouts.frontendlayout')
@section('content')
@if(!is_null($garikhane))
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/background_images/'.$garikhane->image) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> {{ $garikhane->title }}  </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>गरिखाने
 </a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="abt-detail">
                            <p>{!! $garikhane->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="abt-detail text-center">
                            <p><h1>Comming Soon</h1></p>
                            <h4>page details not set</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endsection
