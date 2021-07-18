@extends('layouts.frontendlayout')
@section('content')
<style>
    .list-group{
        font-size:large;
    }
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> आवेदक</h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                 <li><a href="{{url('job/provider')}}">रोजगार प्रदायक</a></li>
                <li><a>अभियान </a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                        @if($interested)
                        <div class="interested">
                            @foreach($interested as $i)
                            <div class="inters">
                                <strong>Full Name :</strong>{{$i['name']}}
                            </div>
                            <div class="inters">
                                <strong>Email :</strong> {{$i['email']}}
                            </div>
                            <div class="inters">
                                <strong>C.V :</strong><a style="color: darkgoldenrod;" href="{{$i['file']}}" target="_blank"> <i class="fas fa-file-pdf"></i>CV</a>
                            </div>
                            <div class="inters">
                                <strong>Full Name :</strong><a style="color: darkgoldenrod;" href="{{url('applied/coverletter/'.$i['id'].'/'.$i['user_id'])}}" target="_blank"> <i class="fas fa-file-pdf"></i>Coverletter</a>
                            </div>
                            </div>
                            </div>
                             
                            
                            
                        </div>
                          
                          @endforeach
                          @else
                         <h2>No Applicant is Interested till now</h2> 
                          @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection