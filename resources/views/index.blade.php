@extends('layouts.frontendlayout')
@section('content')
@if(isset($popup))
<div id="myModalssss" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$popup->title}}</h4>
      </div>
      <div class="modal-body">
        <img src="{{asset('images/popup/'.$popup->image)}}">
      </div>
    </div>

  </div>
</div>
@endif

<!--=============================== Slider ==========================-->
    <div class="slider">
        <div id="home-carousel" class="carousel" data-ride="carousel">
            @if(count($banners) > 0)
                <div class="carousel-inner" role="listbox">
                    @foreach($banners as $key =>$banner)
                        @if($key == 0)
                            <div class="item active" style="background-image:url({{ asset('images/banner/'.$banner->image) }});background-repeat: no-repeat; background-size:100% 100%; height: 525px;">
                                <div class="container p0">
                                    <div class="item-content">
                                        <div class="gb-middle ">
                                            <div class="slider-info ">
                                                <!--<h4>{{$banner->title}}</h4>-->
                                                <h2>{{strip_tags($banner->text)}}</h2>
                                                <div class="buttons">
                                                    <a href="{{url('contactus')}}" class="red-btn red-btn-0">सम्पर्क गर्नुहोस्</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.item-content -->
                                </div>
                            </div><!-- /.item -->
                        @else
                            <div class="item" style="background-image:url({{ asset('images/banner/'.$banner->image) }});background-repeat: no-repeat; background-size:100% 100%; height: 525px;">
                                <div class="container p0">
                                    <div class="item-content">
                                        <div class="gb-middle ">
                                            <div class="slider-info ">
                                                <!--<h4>{{$banner->title}}</h4>-->
                                                <h2>{{strip_tags($banner->text)}}</h2>
                                                <div class="buttons">
                                                    <a href="{{url('contactus')}}" class="red-btn red-btn-0">सम्पर्क गर्नुहोस्</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.item-content -->
                                </div>
                            </div><!-- /.item -->
                        @endif
                    @endforeach
                        
                </div>

            <ol class="carousel-indicators">
                @foreach($banners as $key =>$banner)
                    @if($key == 0)
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    @else
                    <li data-target="#home-carousel" data-slide-to="{{$key}}"></li>
                    @endif
                @endforeach
            </ol>
        @endif
        </div>
        <!-- /.carousel slide -->
    </div><!-- /.slider -->

    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-us">
                        <p><img src="{{asset('images/setting/'.$setting->image)}}" alt="about-us"></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="container-text">
                        <h2 class="title-text">{{$setting->title}}</h2>

                        <div class="wave-line"></div>
                            <p>{!! substr($setting->description,0,1385) !!}</p>
                        <div class="buttons">
                            <a href="{{url('aboutus')}}" class=" red-btn red-btn-1">अधिक हेर्नुहोस्</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=============================== Images ==========================-->
    <div class="main-container-1 grey">
        <div class="container">
            <div class="row">
                 @if($programs)
                 @foreach($programs as $p)
                <div class="col-md-3 col-sm-3 col-xs-12 text-center mb animation-element bounce-up cf">
                    <div class="images listss">
                        <p><a href="{{url('program/'.$p->id)}}"><img src="{{asset('images/service/'.$p->image)}}" alt="drop"></a></p>
                    </div>
                    <div class="images-text sks">
                        <h2><a href="{{url('program/'.$p->id)}}">{{$p->title}}</a></h2>
                    </div>
                </div>
               @endforeach
               @endif   
            </div>
        </div>
    </div>

    <!--=============================== Charity Events ==================-->
    <div class="events black">
        <div class="main-container-1 shadow">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="title-text">कार्यक्रम</h2>
                        <div class="wave-line wave-center"></div>
                    </div>
                </div>

                <div class="row">
                   @if($events)
                   @foreach ($events->chunk(3) as $chunk)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        @foreach ($chunk as $e)
                         <?php 
                       $publish_date = strtotime($e->date);
                        ?>
                        <div class="events-line">
                            <div class="col-md-2 col-sm-2 col-xs-3 height100">
                                <div class="events-title text-center">
                                    <p>
                                        <a href="{{ url('page/events/'.$e->id) }}">{{ date('d', $publish_date) }}
                                            <span>{{ date('M', $publish_date) }}</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-9 pl">
                                <h6>
                                    <a href="{{ url('page/events/'.$e->id) }}" class="white">{{$e->title}} </a>
                                </h6>
                                <ul class="gb-list">
                                    <li>
                                        <a href="{{ url('page/events/'.$e->id) }}"><i class="icon-clock" aria-hidden="true"></i>
                                            {{ date('M', $publish_date) }} {{ date('d', $publish_date) }}, {{ date('y', $publish_date)}}</a>
                                    </li>
                                    <li><i class="icon-location-1"></i>
                                        <a href="{{ url('page/events/'.$e->id) }}">{{$e->location}} </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!--=============================== Number ======================-->
    <!--<div class="number" id="counts">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-3 col-sm-6 col-xs-12 mb center ">-->
    <!--                <div class="text">-->
    <!--                    <p>-->
    <!--                        <span class="spincrement">{{$projectcount}}</span>-->
    <!--                        <span class="text-1">Projects </span>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-sm-6 col-xs-12 mb center ">-->
    <!--                <div class="text">-->
    <!--                    <p>-->
    <!--                        <span class="spincrement">{{$jobcount}}</span>-->
    <!--                        <span class="text-1"> Jobs </span>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-sm-6 col-xs-12 mb center ">-->
    <!--                <div class="text">-->
    <!--                    <p>-->
    <!--                        <span class="spincrement ml">{{$eventcount}}</span>-->
    <!--                        <span class="text-1"> Events </span>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-sm-6 col-xs-12 center ">-->
    <!--                <div class="text">-->
    <!--                    <p><span class="spincrement">{{count($partners)}}</span>-->
    <!--                        <span class="text-1"> Partners </span>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--=============================== Our Causes ======================
    <div class="main-container-1">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2 class="title-text">Our Jobs</h2>
                        <div class="wave-line wave-center"></div>
                        <p class="paragraph-white">Fundraising event ideas have become a staple in many organizations
                            as a way to help with fundraising event planning, entertaining and engaging your donors </p>
                    </div>
                </div>
            </div>

            <div class="row">

                @if($jobs)
                
                @foreach($jobs as $j)
                <div class="col-lg-4 col-md-4 col-sm-6 mb">
                    <div class="person-card ">
                        <div class="person-img">
                            <a href="{{ url('page/jobs/'.$j->id) }}" class="img-link">
                                <span><i class="icon-eye" aria-hidden="true"></i></span>
                                <img src="{{asset('images/job/'.$j->image)}}" alt="" class="img">
                            </a>
                        </div>
                        <div class="person-content">
                            <h3><a href="{{ url('page/jobs/'.$j->id) }}" class="title-white">{{$j->title}}</a></h3>
                        {!! substr($j->description,0,200) !!} 
                        </div>
                    </div>
                    <div class="scale-area">
                        <h6><i class="icon-location-1"></i>
                                      {{$j->location}} </h6>
                        <h6 class="pull-right"><i class="fas fa-calendar-week"></i>
                                       {{$j->created_at}} </h6>
                    </div>
                </div>
            @endforeach
            @endif
                

                
            </div>
        </div>
    </div>
-->
    <!--=============================== Be a Volunteer ==================-->
<!--     <div class="container-fluid black main-container-1">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="content-1 pull-right">
                    <h2 class="title-text">Be a Volunteer Our Community</h2>
                    <div class="wave-line"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="buttons">
                        <a href="charity-login/index.html" class="red-btn red-btn-5">Join Us Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 pos-ab">
                <div class="offset-image-1">
                    <div class="shadow-r"></div>
                </div>
            </div>
        </div>
    </div> -->

   

    <!--=============================== Latest News =====================-->
    <div class="main-container-1">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2 class="title-text">परियोजना</h2>
                        <div class="wave-line wave-center"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                @if($garikhanneproject)
                @foreach($garikhanneproject as $project)
                <div class="col-lg-6 col-md-6 col-sm-6 mb ">
                    <div class="person-card">
                        <div class="person-img oksa">
                            <a href="{{url('garkhanne/project/details/'.$project->id)}}" class="img-link">
                                <span><i class="icon-eye" aria-hidden="true"></i></span>
                                <img src="{{asset('images/garikhanneproject/'.$project->image)}}" alt="">
                            </a>
                        </div>
                        <div class="person-content">
                            <h3><a href="{{url('garkhanne/project/details/'.$project->id)}}" class="title-white">{{$project->title}}</a></h3>
                            <p>{!! strip_tags(\Illuminate\Support\Str::words($project->description, 35,'....'))  !!}</p>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="{{url('garkhanne/project/details/'.$project->id)}}" class="red-btn red-btn-7">अधिक हेर्नुहोस्
</a>
                    </div>
                </div>
                @endforeach
                @endif
               
            </div>
        </div>
    </div>
    <div class="event">
        <div class="main-container-1">
            <div class="container">
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2 class="title-text">सूचना</h2>
                        <div class="wave-line wave-center"></div>
                    </div>
                </div>
            </div>
                <div class="row">
                   @if($notice)
                   @foreach ($notice->chunk(3) as $chunk)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        @foreach ($chunk as $n)
                        <div class="events-line">
                            <div class="col-md-2 col-sm-2 col-xs-3 height100">
                                <div class="events-title text-center">
                                    <p>
                                        <a href="{{ url('notice/detail/'.$n->id) }}">{{ $n->created_at->format('d') }}
                                            <span>{{ $n->created_at->format('M') }}</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-9 pl">
                                <h6>
                                    <a href="{{ url('notice/detail/'.$n->id) }}" class="white">{{$n->title}} </a>
                                </h6>
                                <ul class="gb-list">
                                    <li>
                                        @if(isset($n->link))
                                        <a href="{{$n->link}}"><i class="icon-clock" aria-hidden="true"></i>
                                            {{ $n->created_at->format('M') }} {{ $n->created_at->format('d') }}, {{ $n->created_at->format('Y') }}</a>
                                        @else
                                        <a href="{{ url('notice/detail/'.$n->id) }}"><i class="icon-clock" aria-hidden="true"></i>
                                            {{ $n->created_at->format('M') }} {{ $n->created_at->format('d') }}, {{ $n->created_at->format('Y') }}</a>
                                        @endif
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
     <!--=============================== Charity Volunteer ===============-->
    <div class="main-container-1 ">
        <div class="container">
 @if($testimonials)
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2 class="title-text">सान्दर्भिक भनाईहरु </h2>
                        <div class="wave-line wave-center"></div>
                        <!--<p class="paragraph-white">Who we are associated with</p>-->
                    </div>
                </div>
            </div>

            <div class="row">
                 @foreach($testimonials as $t)
                <div class="col-lg-4">
              <div class="card">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                  <blockquote class="blockquote text-center">
                    <p>"{!! strip_tags(\Illuminate\Support\Str::words($t->description, 95,'....'))  !!}"</p>
                  </blockquote>
                  <div class="author d-flex align-items-center">
                    <span>
                    {{$t->name}}
                </span>
                  <img class="avatar rounded-circle mx-2" src="{{asset('images/testimonial/'.$t->image)}}" alt="Bologna">
        
                  </div>
                </div>
              </div>
            </div>
                @endforeach
               

            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="buttons">
                        <a href="{{url('testimonial')}}" class="red-btn red-btn-6">अधिक हेर्नुहोस्</a>
                    </div>
                </div>
            </div>
@endif
        </div>
         
    </div>
 <!--=============================== Charity Volunteer ===============-->
    <div class="main-container-1 ">
        <div class="container">
 @if($partners)
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center">
                        <h2 class="title-text">साझेदार संस्थाहरु</h2>
                        <div class="wave-line wave-center"></div>
                        <!--<p class="paragraph-white">Who we are associated with</p>-->
                    </div>
                </div>
            </div>

            <div class="owl-carousel">
                 @foreach($partners as $partner)
                <div class="person-card item partner">
                    <a href="{{ $partner->link}}" target="_blank">
                    <img src="{{asset('images/partner/'.$partner->image)}}" alt="" class="img">
                    </a>
                    <h4 style="text-align:center;margin-top:5px;">{{$partner->title}}</h4>
                </div><!--/person card-->
                @endforeach
               

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="buttons">
                        <a href="{{url('partners')}}" class="red-btn red-btn-6">अधिक हेर्नुहोस्</a>
                    </div>
                </div>
            </div>
 @endif
        </div>
         
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
     window.onunload = function () {
	sessionStorage.removeItem('variableName');
}
 </script>
    @endsection