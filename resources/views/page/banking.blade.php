@extends('layouts.homelayout')
@section('content')
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Banking</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>Banking</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->
  <div class="container mt-top">
	<div class="row">
        @if(count($banking) >0 )
                @foreach($banking as $e)
        <div class="col-md-4">
            <div class="project-lists">
                <div class="projec-img">
                    <a href="{{url('banking/page/'.$e->id)}}">
                        <img src="{{asset('images/banking/'.$e->image)}}"> 
                    </a>
                </div>
                
                <div class="projec-cap">
                    <a href="{{url('banking/page/'.$e->id)}}">
                        <h4>{{ $e->title }}</h4>
                    </a>
                    <hr>
                     <p>{!! substr($e->description,0,200) !!}....</p>
                </div>
            </div>
        </div>
       @endforeach
       <?php $banking->render(); ?>
        @endif
	</div>
</div>
  @endsection
  
  
  
  
  
  
  
  
  
  
