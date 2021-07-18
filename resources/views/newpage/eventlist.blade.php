@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <div class="features-main">
                <h1> कार्यक्रम</h1>
                <ul class="breadcrumb breadcrumb-news">
                    <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                    <li><a>कार्यक्रम</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--=============================== Events ================================-->
    <div class="main-events">
        <div class="container">           
            @if($events)
                @foreach($events as $e)
                    <div class="row mb-causes mb-causes-top">
                        <div class="col-md-6 col-sm-12 col-xs-12 center-causes">
                            <div class="person-img">
                                <a href="{{url('page/events/'.$e->id)}}" class="img-link">
                                    <span><i class="icon-eye" aria-hidden="true"></i></span>
                                    <img src="{{'images/event/'.$e->image}}" alt="causes1">
                                </a>
                            </div>
                        </div>
                        <?php 
                        
                       $publish_date = strtotime($e->date);
                    
                        ?>
               
                        <div class="col-md-6 col-sm-12 col-xs-12 ">
                            <div id="event-1" class="person-card ">
                                <div class="person-content">
                                    <h3><a href="{{url('page/events/'.$e->id)}}l" class="title-white">{{$e->title}} </a></h3>
                                    <ul class="gb-list">
                                        <li>
                                            <a href="#"><i class="icon-clock" aria-hidden="true"></i>
                                                {{date('M', $publish_date) }} {{ date('d', $publish_date) }}, {{ date('Y', $publish_date) }}</a>
                                        </li>
                                        <li><i class="icon-location-1"></i>
                                            <a href="{{url('page/events/'.$e->id)}}"> {{$e->location}} </a>
                                        </li>
                                    </ul>
                                    <div class="location">
                                        <span>{{$e->location}}</span>
                                        <!--<span>Entry Charge: {{$e->price}}</span>-->
                                    </div>
                                    {!! substr($e->description,0,400) !!}...
                                </div>
                            </div>
        
                            <div class="buttons">
                                <a href="{{url('page/events/'.$e->id)}}" class=" green-btn green-btn-4">Read More</a>
                            </div>
                        </div>
                    </div> <!--  /.row -->
                @endforeach
                 
                <nav class="pagination-1">
                <ul>
                   {!! $events->render() !!}
                </ul>
            </nav> <!-- /.Pagination -->
            @endif
           
            



            <!--======================= Pagination ========================-->
            
        </div> <!--  /.container -->
    </div> <!--  /.main-events -->

@endsection
<script>
    
    $(document).ready(function(){
        
        $("#eventSearch").submit(function(e) {
        
            e.preventDefault();
        
            var url =$(this).attr('action');
            var date = $('#date').val();
            var location = $('#location').val();
            var key = $('#key').val();
            
            $.ajax({
                   type: "POST",
                   url: url,
                   data:{
                       date : date,
                       location :location,
                       key :key,
                       "_token": "{{ csrf_token() }}"
                       
                   },
                   success: function(data)
                   {
                       alert(data); // show response from the php script.
                   }
                 });
        
            
        });
    })
</script>