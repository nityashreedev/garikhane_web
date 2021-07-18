@extends('admin.layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle shadow-lg bg-primary border-primary border">
                            <i class="fe-flag font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                        <h3 class="text-dark mt-1"><span>{{$banner}}</span></h3>
                            <p class="text-muted mb-1 text-truncate"><a href ="{{url('admin/banner')}}">Banner</a></p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle shadow-lg bg-success border-success border">
                            <i class="fas fa-briefcase font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span >{{$job}}</span></h3>
                        <p class="text-muted mb-1 text-truncate"><a href ="{{url('admin/job')}}">Jobs</a></p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle shadow-lg bg-info border-info border">
                            <i class="fas fa-calendar-week font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                        <h3 class="text-dark mt-1"><span>{{$event}}</h3>
                        <p class="text-muted mb-1 text-truncate"><a href ="{{url('admin/event')}}">Events</a></p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle shadow-lg bg-warning border-warning border">
                           
                            <i class="fas fa-university font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                        <h3 class="text-dark mt-1"><span>{{$bank}}</h3>
                            <p class="text-muted mb-1 text-truncate"><a href ="{{url('admin/banking')}}">Bank</a></p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

@stop

