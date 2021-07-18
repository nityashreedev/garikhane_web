@include('includes.head')
<body>
<!-- Header start -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/mediaelementplayer.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('asset/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/fl-bigmug-line.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/materrials.scss')}}">
<!-- Custom Style -->
<link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style.scss')}}">
<link rel="stylesheet" href="{{asset('asset/css/slick-theme.css')}}">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />

<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/all.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->


<link href="{{asset('frontend/css/utility.css')}}" rel="stylesheet">

<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/slick-theme.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

<link href="{{asset('frontend/css/styles-merged.css')}}" rel="stylesheet">
<link rel="icon" href="{{asset('frontend/logo.png')}}" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Page Title start -->
@include('includes.header')

<style>
    i.fas.fa-chevron-right.right-arrow.slick-arrow{
padding: 15px;
    background: rgba(255,255,2558,0.7);
    position: absolute;
    bottom: 25px;
    right: 50px;
    z-index: 999;
    width: 40px;
    height: 40px;
}
i.fas.fa-chevron-left.left-arrow.slick-arrow{
padding: 15px;
    background: rgba(255,255,2558,0.7);
    position: absolute;
    bottom: 25px;
    right: 100px;
    z-index: 999;
    width: 40px;
    height: 40px;
}

</style>

<section class="main-banner" style="margin-top:0px !important;position: relative;">
    <div class="main-banner-slider">
        @foreach($banners as $banner)
        <div class="main-banner-single" style="background-image:url({{ asset('images/banner/'.$banner->image) }});    height: 500px;
    background-size: contain;     background-repeat: no-repeat;">
           
        </div>
        @endforeach
    </div>
  </section>
<!-- Page Title End -->

<!-- Page Title End -->
<!-- ABOUT PRODUCTS 
<section class="main-partners sec-padding">
    <div class="container">
        <div class="main-partners-inner">
            @if($services)
            @foreach($services as $s)
            <div class="main-partners-single">
            <a href="#"><img src="{{asset('images/service/'.$s->image)}}" alt=""></a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
  </section>-->
  <!-- WELCOME -->
<section class="main-welcome sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="welcome-text">
                <h2>{{$setting->title}}</h2>
                   <p>  <p>{!! substr($setting->description,0,20000) !!}</p></p>
                    <div class="welcome-read-more">
                    <a href="{{url('aboutus')}}">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="welcome-image">
                <img src="{{asset('images/setting/'.$setting->image)}}" alt="">
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <section class="main-projects sec-padding">
    <div class="container">
        <div class="sec-title">
            <h2>Events</h2>
        </div>
        <div class="row">
            @if($events)

             @foreach($events as $e)
        <div class="col-md-4">
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
                    <span class="location"><i class="fas fa-map-marker-alt"></i> {{$e->location}} </span>
                </div>
            </div>
        </div>
           @endforeach
        <div class="xyz col-md-12" style="text-align:center; margin-top: 25px !important"><a href="{{ url('events') }}" style="margin: 10px;" class="btn btn-rohan">View More Events</a></div>
            @endif
        </div>
    </div>
    
  </section>

  <!--Jobs -->
  <section class="main-projects sec-padding jobs">
    <div class="container">
        <div class="sec-title">
            <h2>Jobs</h2>
        </div>
        <div class="row">
            @if($jobs)
           
            @foreach($jobs as $j)
            <div class="col-md-4 mt-top">
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
           <div class="xyz col-md-12" style="text-align:center;"><a href="{{ url('jobs') }}" style="margin: 10px;" class="btn btn-rohan">View More Jobs</a></div>
        
            @endif
        </div>
    </div>
    
  </section>
  
<!-- TESTIMONIALS -->
<section class="main-testimonials sec-padding">
    <div class="container">
        <div class="sec-title">
            
            <h2>Messages</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-testimonials-slider">
                    @if($testimonials)
                    @foreach($testimonials as $testimonial)
                    <div class="main-testimonials-single">
                        <div class="test-single-text">
                        <p>{{strip_tags($testimonial->description)}}</p>
                        </div>
                        <div class="test-single-info">
                            <div class="test-single-info-img">
                                <a href="{{url('/testimonial/'.$testimonial->id)}}" >
                            <img src="{{asset('images/testimonial/'.$testimonial->image)}}" alt="">
                            </a>
                            </div>
                            <div class="test-single-info-text">
                            <span>{{$testimonial->name}}</span>
                           
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <!-- PARTNERS -->
<section class="main-partners sec-padding">
    <div class="container">
        <div class="sec-title">
            <p>Who we are associated with</p>
            <h2>Our Partners</h2>
        </div>
        <div class="main-partners-inner">
            @if($partners)
            @foreach($partners as $partner)
            <div class="main-partners-single">
            <a href="#"><img src="{{asset('images/partner/'.$partner->image)}}" alt=""></a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
  </section>

@include('includes.footer')

<script src="https://yetimultipurpose.com/frontend/js/slick.min.js"></script>
<script src="https://yetimultipurpose.com/frontend/js/custom.js"></script>

<script>
  var base_url = '{!! url('/login') !!}';
   
    $(document).ready(function(){

      var base_url = "{{ env('APP_URL')}}";
      $('#wp-job-board-popup-message').hide()
        $('.listbtn').on('click',function(e){
          
          e.preventDefault();
        var status = $('#userLog').val();
        var user_id = $('#user_id').val();
        var event_id = $(this).find("input[type=hidden][name=event]").val();
        $.ajax({
            type: "POST",
            url: base_url + '/event/user',
            data: {
                status: status,
                user_id: user_id,
                event_id: event_id,
              
                "_token": "{{ csrf_token() }}"
            },
            success: function(msg) {

                if (msg.success === true) {
                   
                    $('#success').removeAttr("style");
                    location.reload(true);
                   
                } else {
                  $('#wp-job-board-popup-message').removeAttr("style");
                }
                setTimeout(function() {
                    $('#alert').fadeOut('fast');
                }, 3000)
            },
            error: function(msg) {
                $('#alert').html('Server Error');
            }
        });
       });
        
       
    });

   
</script>