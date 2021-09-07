@extends('layouts.frontendlayout')
<style>
    .main-container-6 div:first-child {
    width: 100%;
    justify-content: center;
    text-align: center;
}

</style>
@section('content')
 <div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
    <h1>विशेष समिति</h1>
            {{-- <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>विशेष समिति</a></li>
            </ul> --}}
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <div class="main-container-6 ">
        <div class="container">
           @if($commitemember) 
            <div class="row ">
                @foreach ($commitemember as $c)
               {{-- @foreach ($chunk as $c) --}}
                @if($loop->first)
                <div class="person-card item col-md-3">
                    <img src="{{asset('images/commite/'.$c->image)}}" alt="" class="img">
                    <div class="person-content">
                        <h3>{{$c->name}} </h3>
                        <span>{{$c->position}}</span>
                    </div>
                </div><!--/person card-->
                @else
                <div class="item col-md-3">
                    <img src="{{asset('images/commite/'.$c->image)}}" alt="" class="img-member">
                    <div class="person-content">
                        <h3>{{$c->name}} </h3>
                        <span>{{$c->position}}</span>
                    </div>
                </div><!--/person card-->
                @endif
                {{-- @endforeach --}}
                 @endforeach
            </div>
           
            @endif

        </div>
    </div>


@endsection