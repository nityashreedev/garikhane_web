@extends('layouts.homelayout')
<style>
span.location {
    float: right;
}
</style>
@section('content')
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Job</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>Job</span></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page Title End -->
  <div class="container mt-top">
	<div class="row">
        @if($jobs)
        @foreach($jobs as $j)
         <div class="col-md-3 mt-top">
            <div class="event-list">
                <div class="event-img">
                    <a href="{{url('page/jobs/'.$j->id)}}">
                        <img src="{{'images/job/'.$j->image}}"> 
                    </a>
                </div>
                <div class="event-caption">
                    <a href="{{url('page/jobs/'.$j->id)}}">
                        <h4>{{ $j->title }}</h4>
                    </a>
                    <span class="date"> <i class="far fa-clock"></i> {{$j->date}}</span>
                    <span class="location"><i class="fas fa-map-marker-alt"></i> {{$j->location}} </span>
                </div>
            </div>
        </div>
       @endforeach
       <?php $jobs->render(); ?>
        @endif
	</div>
</div>
  @endsection