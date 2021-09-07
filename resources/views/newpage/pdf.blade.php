@extends('layouts.frontendlayout')
@section('content')
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-search-pseudo-elements></script>
<style>
    .aside-bar-downloa {
        font-size: 15px;
        height: 145px;
    }

    .aside-bar-downloa span {
        display: block;
        font-size: 50px;
        padding-bottom: 15px;
    }

    .aside-bar-downloa {
        text-align: center;
        padding: 15px 0;
    }

    .aside-bar-downloa {
        background: #143c65;
        margin: 10px;
    }
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> डाउनलोड</h1>

    </div>
</div>
<div class="event">
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                @if($pdf)
                @foreach($pdf as $p)
                <div class="col-md-3">
                    <div class="aside-bar-downloa">
                        <a href="{{url('pdf/download/'.$p->id)}}">
                            <span> <i class="fas fa-file-download"></i></span>
                            {{$p->title}}
                        </a>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
@endsection