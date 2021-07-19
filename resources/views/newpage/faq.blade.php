@extends('layouts.frontendlayout')
@section('content')
<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "+"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
    a.accordion-toggle {
    color: black;
}
.faqHeader {
    font-size: 20px;
    margin: 20px;
    border-left: 3px solid green;
    padding-left: 20px;
    text-transform: uppercase;
    font-weight: 800;
}
h4.panel-title {
	font-size: 17px;
}
.panel-body {
    font-size: 16px;
    letter-spacing: 0.3px;
    line-height: 1.9;
}
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> बारम्बार सोधिने प्रश्नहरु </h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li><a>बारम्बार सोधिने प्रश्नहरु</a></li>

        </ul>
    </div>
</div>
<div class="page page-news page-single">
<div class="container">

    <div class="panel-group" id="accordion">
        <div class="faqHeader"></div>
        
        @if($faqs)
        @foreach($faqs as $f)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Q : <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$f->id}}">{{$f->question}}</a>
                </h4>
            </div>
            <div id="collapse_{{$f->id}}" class="panel-collapse collapse">
                <div class="panel-body">
                   A :{!! $f->ans !!}
                </div>
                @if(isset($f->file))
                <div class="panel-body">
                    @php 
                    $file_path = public_path("images/pdf/".$f->file);
                    $ext = pathinfo($file_path, PATHINFO_EXTENSION);
                    @endphp
                    @if($ext != 'pdf')
                     <a style="color: darkgoldenrod;" href="{{url('faq/file/download/'.$f->id)}}" ><img src="{{ asset('images/faq/'.$f->file) }}" style="height:120px;"></a>
                   @else
                  <a style="color: darkgoldenrod;" href="{{url('faq/file/download/'.$f->id)}}" > <i class="fas fa-file-pdf"></i>File</a>
                   @endif
                </div>
                @endif
            </div>
        </div>
        @endforeach
        @else
        <h3>NO FAQ FOUND</h3>
        @endif
       
    </div>
</div>
    </div> <!--  /.container -->
@endsection