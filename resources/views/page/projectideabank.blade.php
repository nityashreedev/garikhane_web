@extends('layouts.homelayout')

@section('content')
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Garikhanne Project</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>Garikhanne Project</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->
  <div class="container mt-top">
	<div class="row">
        @if($projectideabank)
        @foreach($projectideabank as $e)
        <div class="col-md-3 mt-top">
            <div class="event-list">
                <div class="event-img">
                    <a href="{{url('project/idea/bank/detail/'.$e->id)}}">
                        <img src="{{asset('images/projectbank/'.$e->image)}}"> 
                    </a>
                </div>
                <div class="event-caption ok">
                    <a href="{{url('project/idea/bank/detail/'.$e->id)}}">
                        <h4>{{ $e->name }}</h4>
                    </a>
                </div>
            </div>
        </div>
       @endforeach
       <?php $projectideabank->render(); ?>
        @endif
	</div>
</div>
  @endsection