
@extends('layouts.frontendlayout')
@section('content')
<div class="banner">
        <div class="shadow-main">
            <h1> About Us </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a>ABOUT US</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-us">
                        <p><img src="{{asset('images/setting/'.$setting->image)}}" alt=""></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="container-text">
                        <h2 class="title-text">ABOUT US</h2>

                        <div class="wave-line"></div>
                        <p>{!! substr($setting->description,0,20000) !!}</p>

                     
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
