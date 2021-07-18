@extends('layouts.frontendlayout')
@section('content')

<style>
.author.d-flex.align-items-center {
    text-align: center;
}
.author.d-flex.align-items-center img {
    height: 100px;
    width: 100px;
    max-width: 100px;
    border-radius: 50%;
}
.author.d-flex.align-items-center span {
    display: block;
    font-size: 14px;
    padding-bottom: 10px;
    text-transform: uppercase;
    font-weight: 700;
}
.card {
    padding: 10px 0;
}
.container.my-5 {
    padding: 30px 0;
}
blockquote.blockquote.text-center p {
    color: #8e8e8e;
}
</style>


    <!--=============================== Banner ==========================-->
  <div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> सान्दर्भिक भनाईहरु</h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a>सान्दर्भिक भनाईहरु</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->


<div class="container my-5">
   <div class="container">
  <div class="row">
      @if($testimonial)
      @foreach($testimonial as $t)
            <div class="col-lg-4">
              <div class="card">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                  <blockquote class="blockquote text-center">
                     <p>"{!! strip_tags(\Illuminate\Support\Str::words($t->description, 95,'....'))  !!}"</p>
                  </blockquote>
                  <div class="author d-flex align-items-center">
                    <span>
                    {{$t->name}}
                </span>
                  <img class="avatar rounded-circle mx-2" src="{{asset('images/testimonial/'.$t->image)}}" alt="Bologna">
        
                  </div>
                </div>
              </div>
            </div>
        @endforeach
    @endif
    
  </div>
</div>
</div>





@endsection