@extends('layouts.homelayout')
<style>
    
    .message-section .image-section {
    float: left;
    margin-right: 20px;
}
.message-section .text-section h3 {
    color: rgb(53, 53, 53);
}
</style>
@section('content')
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / Testimonial</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

   
  
  <section class="inner-about-us message-section mb-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                                <div class="image-section">
                                    <figure>
                                            <img src="{{asset('images/testimonial/'.$testimonial->image)}}" alt="Message from Patron-in-chief" style="height:250px;width:250px;">
                                    </figure>
                                </div>
                                <div class="text-section">
                                <h3>Message from {{$testimonial->name}}</h3>
                                <br>
                                <p style="text-align: justify;">{{strip_tags($testimonial->description)}}</p>

<p><strong> {{$testimonial->designation}} {{$testimonial->name}}</strong></p>

                  <a href="{{$testimonial->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a>
                      <a href="{{$testimonial->instagram}}"><span class="fa fa-instagram"></span></a>
                      <a href="{{$testimonial->twitter}}"><span class="fa fa-twitter"></span></a>
               
                                    
                                </div>
                            </div>
        </div>
    </div>
  </section>
  @endsection