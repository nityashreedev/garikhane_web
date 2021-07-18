@extends('layouts.homelayout')
<style>
    .below-img {
    text-align: center;
}
</style>
@section('content')
<div class="pageTitle" style="background: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) no-repeat background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">About Us</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>About Us</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

   
  
  <section class="inner-about-us sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="inner-about-us-welcome">
                    <span></span>
                    <p>
                    <p style="text-align:justify">{!! substr($setting->description,0,20000) !!}</p> 
                    </p>
                    <div class="inner-about-us-con">
                    <a href="{{url('contactus')}}">Contact Us</a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-5">
                <div class="inner-about-us-image">
                <img src="{{asset('images/setting/'.$setting->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="below-img">
                <img src="{{asset('frontend/images/1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
  </section>
  
  
  @endsection