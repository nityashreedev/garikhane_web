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
        @if($garikhanneproject)
        @foreach($garikhanneproject as $e)
        <div class="col-md-4">
            <div class="project-lists">
                <div class="projec-img">
                    <a href="{{url('garkhanne/project/details/'.$e->id)}}">
                        <img src="{{asset('images/garikhanneproject/'.$e->image)}}"> 
                    </a>
                </div>
                
                <div class="projec-cap">
                    <h4>{{ $e->title }}</h4>
                    <hr>
                     {!! substr($e->description,0,100) !!}....
                </div>
            </div>
        </div>
       @endforeach
       <?php $garikhanneproject->render(); ?>
        @endif
	</div>
</div>
  @endsection