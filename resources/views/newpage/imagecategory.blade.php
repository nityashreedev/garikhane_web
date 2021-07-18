@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> तस्बिर पुस्तिका</h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>तस्बिर पुस्तिका</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
  <div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
        <div class="row">
            <!--====================== Photo Post =======================-->
            @if($image_category)
            @foreach($image_category as $g)
            <div class="col-md-3">
                <div class="photo-post gallerys">
                    <div class="person-card">
                        <div class="person-img ">
                                <a href="{{url('gallery/'.$g->id)}}" >
                                <img src="{{asset('images/gallerycategory/'.$g->image)}}" alt="boy">
                            </a>
                        </div>
                        <div class="person-content tisls">
                            <br>
                            <h6>{{$g->title}}</h6>
                        </div>
                    </div>
                </div> <!-- /.Post Photo -->
            </div>
            @endforeach
            @endif
           
            
        </div> <!-- /.row -->

        <!-- /.row -->

    </div> <!--  /.container -->
</div> 
@endsection