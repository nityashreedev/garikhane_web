@extends('layouts.frontendlayout')
@section('content')
<style>
.person-card.item.col-md-3 img {
    height: 170px;
    width: 100%;
    object-fit: cover;
}
.main-container-6 .person-content h3 {
    margin-top: 12px;
    letter-spacing: 0.4px;
    margin-bottom: 10px;
    font-size: 15px;
    text-align: center;
    color: black;
}.person-card.item.col-md-3 {
    padding: 15px 10px;
}
</style>
    <!--=============================== Banner ==========================-->
   <div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> साझेदार संस्था </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ </a></li>
                <li><a>साझेदार संस्था</a></li>
            </ul>
        </div>
    </div>

    <div class="main-container-6 ">
        <div class="container">

            <div class="row ">
                @if($partners)
                @foreach($partners as $p)
                <div class="person-card item col-md-3">
                    <a href="{{ $p->link}}" target="_blank">
                    <img src="{{asset('images/partner/'.$p->image)}}" alt="" class="img">
                    <div class="person-content">
                        <h3>{{$p->title}}</h3>
                    </div>
                    </a>
            
                </div><!--/person card-->
                @endforeach
                @endif

               
            </div>

        </div>
    </div>
@endsection