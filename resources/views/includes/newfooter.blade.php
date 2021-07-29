    <!--=============================== Footer ===========================-->
    <div id="footer"></div>
<footer class="black">
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="footer-content">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb">
                        <div class="footer-about-info">
                            <h4> About Us </h4>
                            <p> {!! substr($setting->caption,0,20000) !!} </p>
                            <ul>
                                <li><i class="icon-location-1"></i>
                                    <span>{{$setting->address}} </span></li>
                                <li><i class="icon-phone"></i>
                                    <span>Phone: {{$setting->phone}}</span></li>
                                <li><i class="icon-mail"></i>
                                    <span>Email: <a href="mailto:{{$setting->gmail}}">{{$setting->gmail}}</a></span></li>
                            </ul>
                        </div>
                        <div class="social-link footer-social-link">
                            <ul>
                                <li><a href="{{$setting->twitter}}" target="0"><img class="footer-social" src="/images/social_icons/twitter-lg.png"></a></li>
                                <li><a href="{{$setting->facebook}}" target="0"><img class="footer-social" src="/images/social_icons/fb-lg.png"></a></li>
                                <li><a href="{{$setting->instagram}}"  target="0"><img class="footer-social" src="/images/social_icons/insta-lg.png"></a></li>
                                <li><a href="{{$setting->linkedin}}" target="0"> <img class="footer-social" src="/images/social_icons/linkedin-lg.png"></a></li>
                                <li><a href="mailto:{{$setting->gmail}}" target="0"><img class="footer-social" src="/images/social_icons/gmail-lg.png"></a></li>
                                <li><a href="{{$setting->youtube}}" target="0"><img class="footer-social" src="/images/social_icons/youtube-lg.png"></a></li>
                            </ul>
                        </div> <!-- footer-social-link -->
                        <div class="user_count">
                            

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 mb">
                        <!--<h4> Our jobs </h4>-->
                        <!--@if($Jobs)-->
                        <!--@foreach($Jobs as $j)-->
                        <!--<div class="news-1">-->
                        <!--    <a href="{{ url('page/jobs/'.$j->id) }}">-->
                        <!--        <img src="{{asset('images/job/'.$j->image)}}" alt="..." style="max-width: 22%;">-->
                        <!--    </a>-->
                        <!--    <div class="news">-->
                        <!--        <h5 class="news-h"><a href="{{ url('page/jobs/'.$j->id) }}">{{$j->title}}</a></h5>-->
                        <!--        <p class="date">{{ $j->created_at->format('M') }} {{ $j->created_at->format('d') }}, {{ $j->created_at->format('Y')}}</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--@endforeach-->
                        <!--@endif-->
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb">
                        <h4> Contact Us </h4>
                        
                        <form method="POST" action="{{url('contact/form')}}" accept-charset="UTF-8" class="contact-form" id="contactForm" enctype="multipart/form-data"><input name="_token" type="hidden" value="bZk5peN947CaLyqxZrLt4IYs3kiR2s5wBM7hy4B5">
                        {{csrf_field()}}
                            <div class="form-group">
                                <input id="names" name="name" type="text" placeholder="Name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="emails" name="email" type="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="phones" name="phone" type="number" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="addresss" name="address" type="text" placeholder="Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="enquirys" rows="4" name="enquiry" placeholder="Message..."></textarea>
                            </div>
                            
                            <input type="hidden" name="hid" value ="home">
                            <div class="g-recaptcha" id="g-recaptcha-responsess" data-sitekey="6Le4YIUbAAAAANokoSViQqpHZwyBQsUE7Bj-Y9Jf"></div>
                            <br><br>
                            
                            <div class="form-group buttons ">
                                <input type="submit" class="  btn-outline-secondary red-btn red-btn-form" value="Send Message">    
                            </div>
                           <div class="alertmessage" style="
                            text-align: center;
                            margin-top: -48px;
                            margin-left: 83px;
                        ">Thank you !!</div>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a class="top top-page" href="#"> <i class="icon-up-open-big"></i></a>
        </div>

        <div class="back-to-top-mob">
            <a class="top top-mob" href="#"> <i class="icon-up-open-big"></i></a>
        </div>
    </div>

    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="col-lg-8 col-md-8 col-sm-6 col-xs-6 copy-title">Copyright © 2020 Garikhane || <a href="{{ url('policies') }}">Privacy Policy</a></p>
                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6 user-count pull-right">
                        <strong>Total Visitors: {{ $user_counts }} </strong>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</footer>
</div>  <!--  /.page -->


<!-- JS code -->
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{asset('panel/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(document).ready( function () {
    $('#basic-datatable').DataTable();
} );
</script>
<script src="{{asset('front/assets/js/jquery.spincrement.js')}}"></script>
<!--<script src="{{asset('front/assets/js/scrollBar.js')}}"></script>-->
<script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/js/myScript.js')}}"></script>
<script>
        "use strict";
        // ===================== Menu Bar ======================
         $(document).ready(function(){
        var hrefPage = window.location.href;
        var menuItems = $('#navbar-menu a');
        menuItems.each(function(){
            var mi = $(this);
            var miHrefs = mi.attr("href")+"/";
            var miParents = mi.parents('li');
            if(hrefPage == miHrefs) {
                miParents.addClass("active").siblings().removeClass('active');
            }
        });
         });
    </script>
    {{-- <script>
$('.navbar-default .navbar-nav li').hover(
       function(){ $(this).addClass('open') },
              function(){ $(this).removeClass('open') }

)  
</script> --}}
<script>
   $(function() {
  $('#myModalssss').addClass('show');
});
$("button.close").click(function(){
  $('#myModalssss').removeClass('show'); 
});
</script>
<script>
    var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
</script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
       $(".alertmessage").remove();
    }, 5000 );
        $("#contactForm").submit(function(e) {
           
            e.preventDefault();
             var recaptcha = $("#g-recaptcha-response").val();
               if (recaptcha === "") {
                  event.preventDefault();
                  alert("Please check the recaptcha");
               }
            var url = $(this).attr('action');
            var enquiry = $('#enquirys').val();
            var name = $('#names').val();
            var email = $('#emails').val();
             var phone = $('#phones').val();
              var address = $('#addresss').val();
            
            $.ajax({
           type: "POST",
           url: url,
           data: {
               name:name,
               email:email,
               enquiry:enquiry,
               phone:phone,
               address:address,
               "_token": "{{ csrf_token() }}"
               
           } ,
           success: function(data)
           {
              
              
              $("#contactForm").trigger('reset')
              grecaptcha.reset();
              alert('Thank You!! Message sent Successgully');
              $('.alertmessage').html('Thank you !!')
              setTimeout(function(){
                    $(".alertmessage").remove();
                }, 5000 );
              
              
           },
           error: function(data)
           {
               $('.alertmessage').html('error')
           }
         });
            
        })
    })
</script>
<script>
    var $body = $(document.body);
var oldWidth = $body.innerWidth();
$body.css("overflow", "hidden");
$body.width(oldWidth);

var $body = $(document.body);
$body.css("overflow", "auto");
$body.width("auto");

</script>
    </body>
</html>