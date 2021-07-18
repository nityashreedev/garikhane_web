@include('includes.head')
<body>
<!-- Header start -->
@include('includes.header')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Page Title start -->


<section class="main-banner" style="margin-top:0px !important">
    <div class="main-banner-slider">
        @foreach($banners as $banner)
        <div class="main-banner-single" style="background-image:url({{ asset('images/banner/'.$banner->image) }});">
           
        </div>
        @endforeach
    </div>
  </section>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-4 col-sm-6"> 
          <div class="sidebar-headings">Menu </div>
          <div class="list-groups list-group-flushs">
            <a href="{{url('events')}}" class="list-group-items list-group-item-actions bg-lights">Event</a>
          <a href="{{url('jobs')}}" class="list-group-items list-group-item-actions bg-lights">Jobs</a>
            <a href="{{url('banking')}}" class="list-group-items list-group-item-actions bg-lights">Banking Information</a>
            @if(Auth::user() && Auth::user()->id != 33)
            <a href="{{url('mentor')}}" class="list-group-items list-group-item-actions bg-lights">Mentor Form</a>
            <a href="{{url('reply')}}" class="list-group-items list-group-item-actions bg-lights">Admin reply</a>
          <a href="{{url('entreprenure')}}" class="list-group-items list-group-item-actions bg-lights">Enteprenure Form</a>
            @endif
          </div>
      </div>
     
      <div class="col-md-8 col-sm-12"> 
        <div id="wp-job-board-popup-message" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning">You are already intrested.</div></div>
        <div id="success" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning" >Thank you for Interest</div></div>
        <!-- Search List -->
        <ul class="searchList">
          @if(count($events) >0 )
              @foreach($events as $e)
        
              <!-- job start -->
                <li>
                  <div class="row">
                    <div class="col-md-8 col-sm-8">
                    <div class="jobimg"><img src="{{asset('images/event/'.$e->image)}}" alt="Job Name" /></div>
                      <div class="jobinfo">
                      <h3><a href="{{url('page/events/'.$e->id)}}">{{$e->title}}</a></h3>
                     
                      <div class="location">  - <span>{{$e->location}}</span></div>
                      </div>
                   
                      @if(Auth::user() && Auth::user()->id != 33)
                      <input type="hidden" id="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="userLog" id="userLog" value="1">
                    @else
                    <input type="hidden" name="userLog" id="userLog" value="0">
                    @endif
                      <div class="clearfix"></div>
                    </div>
                    @if(Auth::user() && Auth::user()->id != 33)
                    <div class="col-md-4 col-sm-4">
                    <div class="listbtn"><a class="listbtns" href="">Apply Now</a>
                      <input type="hidden" id="event_id" name="event"  value="{{$e->id}}"/>
                        </div>
                    </div>
                    @endif
                  </div>
                <p>{{ substr(strip_tags($e->description),0,150) }}</p>
                </li>
              <!-- job end --> 
              @endforeach
            @endif
        </ul>
       
      </div>
    </div>
  </div>
</div>

@include('includes.footer')

<script src="https://yetimultipurpose.com/frontend/js/jquery-3.3.1.min.js"></script>
<script src="https://yetimultipurpose.com/frontend/js/bootstrap.min.js"></script>
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