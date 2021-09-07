@extends('layouts.frontendlayout')
@section('content')

    
    <style>
.person-content.press {
    margin-top: 10px;
    text-align: center;
}
.person-content.press span {
    font-size: 18px;
}
.person-content.press h2 {
    margin-top: 3px;
    font-size: 20px;
}
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1>समाचार </h1>
    </div>
</div>

<div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
         @if($news)
        <div class="row">
            <!--====================== Photo Post =======================-->
           
            @foreach($news as $n)
            <?php 
                       $publish_date = strtotime($n->publish_date);
                        ?>
            <div class="col-md-3">
                <div class="post photo-post">
                    <div class="person-card">
                        <div class="person-img ">
                            @if(isset($n->link))
                            <a href="{{$n->link}}" target="_blank"  class="img-link">
                                <img src="{{asset('images/news/'.$n->image)}}" alt="boy">
                            </a>
                            @else
                            <a href="{{url('news/'.$n->id)}}" class="img-link">
                                <img src="{{asset('images/news/'.$n->image)}}" alt="boy">
                            </a>
                            @endif
                        </div>
                        <div class="person-content press">
                            <span> {{ date('M', $publish_date) }} {{ date('d', $publish_date) }}, {{ date('y', $publish_date)}}</span>
                            <h2>
                                @if(isset($n->link))
                                <a href="{{$n->link}}" target="_blank" class="title-white">{{$n->title}}</a>
                                @else
                                <a href="{{url('news/'.$n->id)}}" class="title-white">{{$n->title}}</a>
                                @endif
                            </h2>
                           
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
            {!! $news->render() !!}
                
            </ul>
        </nav> <!-- /.Pagination -->
@endif
    </div> <!--  /.container -->
</div> <!--  /.main-news main-news-2-columns -->

    
@endsection