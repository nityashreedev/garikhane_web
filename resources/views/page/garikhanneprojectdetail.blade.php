@extends('layouts.homelayout')
<style>


</style>
@section('content')
<div class="pageTitle" style="background: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) no-repeat background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">{{$garikhanneproject->title}}</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <!--<div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <a href="{{url('garkhanne/project')}}">Garikhanne Project</a> / <span>{{$garikhanneproject->title}}</span></div>-->
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
                    <h2 class="page-heading">{{ $garikhanneproject->title }}</h2>
                </div>
                <div class="inner-about-us-image">
                <img src="{{asset('images/garikhanneproject/'.$garikhanneproject->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="inner-about-us-con">
                    <span></span>
                    <h3>Project Description</h3>
                   {!! substr($garikhanneproject->description,0,20000) !!}
                    <div class="inner-about-us-con">
                        <h3>Project Details</h3>
                      {!! substr($garikhanneproject->details,0,20000) !!}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  </section>
  
  
  @endsection