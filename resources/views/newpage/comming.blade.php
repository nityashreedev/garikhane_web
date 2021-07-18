@extends('layouts.frontendlayout')
@section('content')
<style>.comming img {
    width: 100%;
    object-fit: contain;
    padding: 50px 0;
}</style>


    <!--=============================== Banner ==========================-->
   <div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> COMMING SOON </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}" >Home</a></li>
                <li><a>COMMING SOON</a></li>
            </ul>
        </div>
    </div>

<section class="comming"><img src="https://www.cooingestate.com/blog/wp-content/uploads/2019/12/coming-soon5.png" alt="" height="400px"></section>
           
@endsection