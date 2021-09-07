@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> गरिखाने अभियान  </h1>
            {{-- <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>गरिखाने अभियान</a></li>
            </ul> --}}
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="abt-detail">
                            <p>{!! $setting->description !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
