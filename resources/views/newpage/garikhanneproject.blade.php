@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> GariKhanne Project </h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li><a href="">GARIKHANNE PROJECT</a></li>
        </ul>
    </div>
</div>

<div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
             @if($garikhanneproject)
                <div class="row">
                    <!--====================== Photo Post =======================-->
                    @foreach($garikhanneproject as $garikhanne)
                    <div class="col-md-4">
                        <div class="post photo-post">
                            <div class="person-card">
                                <div class="person-img ">
                                    <a href="{{url('garkhanne/project/details/'.$garikhanne->id)}}" class="img-link">
                                        <img src="{{asset('images/garikhanneproject/'.$garikhanne->image)}}" alt="boy">
                                    </a>
                                </div>
                                <div class="person-content">
                                    <h2><a href="{{url('garkhanne/project/details/'.$garikhanne->id)}}" class="title-white">{{$garikhanne->title}}</a></h2>
                                    {!! substr($garikhanne->description,0,400) !!}...
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="{{url('garkhanne/project/details/'.$garikhanne->id)}}" class="red-btn red-btn-news">Read More</a>
                            </div>
                        </div> <!-- /.Post Photo -->
                    </div>
                   @endforeach
        
                   
                    
                </div> <!-- /.row -->
        
                <!-- /.row -->
        
                <!--======================= Pagination ========================-->
                <nav class="pagination-1">
                    <ul>
                        {!! $garikhanneproject->render() !!}
                    </ul>
                </nav> <!-- /.Pagination -->
         @endif
    </div> <!--  /.container -->
</div> <!--  /.main-news main-news-2-columns -->
@endsection