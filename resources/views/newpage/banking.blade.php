@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> बैंकि </h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
            <li><a>बैंकि</a></li>
        </ul>
    </div>
</div>

<div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
             @if($banking)
                <div class="row">
                    <!--====================== Photo Post =======================-->
                    @foreach($banking as $b)
                    <div class="col-md-4">
                        <div class="post photo-post">
                            <div class="person-card">
                                <div class="person-img ">
                                    <a href="{{url('banking/page/'.$b->id)}}" class="img-link">
                                        <img src="{{asset('images/banking/'.$b->image)}}" alt="boy">
                                    </a>
                                </div>
                                <div class="person-content">
                                    <h2><a href="{{url('banking/page/'.$b->id)}}" class="title-white">{{$b->title}}</a></h2>
                                    {!! substr($b->description,0,400) !!}...
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="{{url('banking/page/'.$b->id)}}" class="red-btn red-btn-news">Read More</a>
                            </div>
                        </div> <!-- /.Post Photo -->
                    </div>
                   @endforeach
        
                   
                    
                </div> <!-- /.row -->
        
                <!-- /.row -->
        
                <!--======================= Pagination ========================-->
                <nav class="pagination-1">
                    <ul>
                        {!! $banking->render() !!}
                    </ul>
                </nav> <!-- /.Pagination -->
         @endif
    </div> <!--  /.container -->
</div> <!--  /.main-news main-news-2-columns -->
@endsection