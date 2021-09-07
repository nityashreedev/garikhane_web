@extends('layouts.frontendlayout')
<style>
    .person-content h4 {
    padding-top: 15px;
    line-height: 1.4;
    
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
        <h1> प्रोजेक्ट आइडिया बैंक</h1>
    </div>
</div>

<div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
             @if(count($projectideabank))
                <div class="row">
                    <!--====================== Photo Post =======================-->
                    @foreach($projectideabank as $projectidea)
                    <div class="col-md-4">
                        <div class="post photo-post">
                            <div class="person-card oksos">
                                <div class="person-img ">
                                    <a href="{{url('project/idea/bank/detail/'.$projectidea->id)}}" class="img-link">
                                        <img src="{{asset('images/projectbank/'.$projectidea->image)}}" alt="boy">
                                    </a>
                                </div>
                                <div class="person-content">
                                    <h4><a href="{{url('project/idea/bank/detail/'.$projectidea->id)}}" class="title-white">{{$projectidea->name}}</a></h4>
                                    <!--{!! substr($projectidea->description,0,200) !!}...-->
                                    <a href="{{ url('project/idea/bank/pdf/'.$projectidea->id) }}" target="0">Download</a>
                                </div>
                            </div>
                        </div> <!-- /.Post Photo -->
                    </div>
                   @endforeach
        
                   
                    
                </div> <!-- /.row -->
        
                <!-- /.row -->
        
                <!--======================= Pagination ========================-->
                <nav class="pagination-1">
                    <ul>
                        {!! $projectideabank->render() !!}
                    </ul>
                </nav> <!-- /.Pagination -->
            @else
            <h2 style="text-align:center;">Comming Soon</h2>
         @endif
    </div> <!--  /.container -->
</div> <!--  /.main-news main-news-2-columns -->
@endsection