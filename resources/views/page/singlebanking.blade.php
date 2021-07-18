
  @extends('layouts.homelayout')
<style>


</style>
@section('content')
<div class="pageTitle" style="background: url({{ asset('images/banking/'.$banking->image) }}) no-repeat background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">{{$banking->title}}</h1>
        </div>
        <div class="col-md-6 col-sm-6">
       
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

   
  
  <section class="inner-about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-header">
                    <h2 class="page-heading">{{ $banking->title }}</h2>
                </div>
                <div class="inner-about-us-image">
                <img src="{{ asset('images/banking/'.$banking->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="inner-about-us-con">
                    <span></span>
                    <h3>Bank Description</h3>
                   {!! substr($banking->description,0,20000) !!}
                   
                </div>
            </div>
            
        </div>
    </div>
  </section>
  
  
  @endsection