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
          <h1 class="page-heading">Events</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>Events</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->
  <div class="container mt-top">
	<div class="row">
        @if($events)
        @foreach($events as $e)
        <div class="col-md-3 mt-top">
            <div class="event-list">
                <div class="event-img">
                    <a href="{{url('page/events/'.$e->id)}}">
                        <img src="{{'images/event/'.$e->image}}"> 
                    </a>
                </div>
                <div class="event-caption">
                    <a href="{{url('page/events/'.$e->id)}}">
                        <h4>{{ $e->title }}</h4>
                    </a>
                    <span class="date"> <i class="far fa-clock"></i> {{$e->date}}</span>
                    <!--<span class="location"><i class="fas fa-map-marker-alt"></i> {{$e->location}} </span>-->
                </div>
            </div>
        </div>
       @endforeach
       <?php $events->render(); ?>
        @endif
	</div>
</div>
  @endsection