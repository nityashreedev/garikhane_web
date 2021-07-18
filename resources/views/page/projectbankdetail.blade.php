@extends('layouts.homelayout')

@section('content')
<div class="pageTitle" style="background: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) no-repeat background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <!--<h1 class="page-heading">{{$projectideabank->name}}</h1>-->
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <a href="{{url('project/idea/bank')}}">Project Idea Bank</a> / <span>{{$projectideabank->name}}</span></div>
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
                    <h2 class="page-heading">{{ $projectideabank->name }}</h2>
                </div>
                <div class="inner-about-us-image">
                <img src="{{asset('images/projectbank/'.$projectideabank->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="inner-about-us-con">
                    {!! $projectideabank->description !!}
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <section class="tabs-lists">
    <div class="container">
      <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item active">
                <a class="nav-link " data-toggle="tab" href="#duck2" role="tab" aria-controls="duck2" aria-selected="true">Components/Technology
</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#chicken2" role="tab" aria-controls="chicken2" aria-selected="false">Market Opportunity
</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kiwi2" role="tab" aria-controls="kiwi2" aria-selected="false">Development/Investment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#emu2" role="tab" aria-controls="emu2" aria-selected="false">Successful Examples</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#emu3" role="tab" aria-controls="emu3" aria-selected="false">Reference</a>
              </li>
            </ul>
            
            <div class="tab-content mt-3">
                <div class="tab-pane active" id="duck2" role="tabpanel" aria-labelledby="duck-tab">
                    <div class="inner-about-us-con">
                        {!! $projectideabank->project_component !!}
                    </div>
                 </div>
                 <div class="tab-pane " id="chicken2" role="tabpanel" aria-labelledby="chicken-tab">
                   <div class="inner-about-us-con">
                        {!! $projectideabank->market_opportunity !!}
                    </div>
                </div>
                <div class="tab-pane" id="kiwi2" role="tabpanel" aria-labelledby="kiwi-tab">
                   <div class="inner-about-us-con">
                        {!! $projectideabank->d_i_modality !!}
                    </div>
                </div>
                <div class="tab-pane" id="emu2" role="tabpanel" aria-labelledby="emu-tab">
                   <div class="inner-about-us-con">
                        {!! $projectideabank->success_example !!}
                    </div>
                </div>
                <div class="tab-pane" id="emu3" role="tabpanel" aria-labelledby="emu3-tab">
                    <div class="inner-about-us-con">
                        {!! $projectideabank->reference !!}
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
  @endsection