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
        <h1> प्रेस विज्ञप्ति</h1>
    </div>
</div>

<div class="main-news main-news-2-columns main-news-3-columns">
    <div class="container">
         @if(count($press) > 0)
        <div class="row">
            <!--====================== Photo Post =======================-->
           
            @foreach($press as $n)
             <?php 
                       $publish_date = strtotime($n->publish_date);
                        ?>
            <div class="col-md-3">
                <div class="post photo-post">
                    <div class="person-card">
                        <div class="person-img press">
                            <a href="{{ isset($n->pdf)? url('/press_doc/pdf/'.$n->pdf): asset('images/news/'.$n->image) }}" class="img-link" @if(is_null($n->pdf)) data-lightbox="image-1" @endif target="_blank" data-title="{{$n->title}}">
                                <img src="{{asset('images/news/'.$n->image)}}" alt="boy">
                            </a>
                        </div>
                        <div class="person-content press">
                            <span> {{ date('M', $publish_date) }} {{ date('d', $publish_date) }}, {{ date('y', $publish_date)}}</span>
                            <h2>
                                @if(isset($n->link))
                                <a href="{{$n->link}}" target="_blank"  class="title-white">{{$n->title}}</a>
                                @else
                                <a href="{{url('press/'.$n->id)}}" class="title-white">{{$n->title}}</a>
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
            {!! $press->render() !!}
                
            </ul>
        </nav> <!-- /.Pagination -->
        @else
        <h3 style="text-align:center;">Comming Soon</h3>
@endif
    </div> <!--  /.container -->
</div> <!--  /.main-news main-news-2-columns -->
<script>
/*! Main */
jQuery(document).ready(function($) {
  
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#navbar'),
    		distance = navbar.offset().top,
        $window = $(window);

    $window.scroll(function() {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
          	$("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            $("body").css("padding-top", "0px");
        }
    });
});
</script>
@endsection