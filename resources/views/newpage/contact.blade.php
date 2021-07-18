@extends('layouts.frontendlayout')
@section('content')
<div id="menuBar-charity"></div>
<style type="text/css">
    #mymap {
          border:1px solid red;
          width: 100%;
          height: 500px;
    }
  </style>
    <!--=============================== Banner ==========================-->
   <div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> सम्पर्क </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>सम्पर्क</a></li>
            </ul>
        </div>
    </div>
@include('admin.flashmessage.message')
    <!--=============================== Contact ================================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-contact">
                    <ul class="contact">
                        <li>
                            <strong>स्थान</strong>
                            <span>{{$setting->address}}</span>
                        </li>
                        <li>
                            <strong>कार्यालय समय</strong>
                            <span>{{$setting->office_time}}</span>
                        </li>
                        <li>
                            <strong>सम्पर्क नम्बर</strong>
                            <span>{{$setting->phone}}</span>
                        </li>
                        <li>
                            <a href="mailto:{{$setting->gmail}}">
                                <strong>इमेल</strong>
                                <span>{{$setting->gmail}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="leave-reply">
                         <form method="POST" action="{{url('contact/form')}}" accept-charset="UTF-8" class="contact-form" id="contactForms" enctype="multipart/form-data">
                {{csrf_field()}}
                            <div class="form-group">
                                <input id="name" name="name" type="text" placeholder="Name"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="E-mail"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <input id='phone' name="phone" type="number" placeholder="Phone"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <input id='phone' name="address" type="text" placeholder="Address"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="enquiry" class="form-control" rows="6" name="enquiry" placeholder="Message..."></textarea>
                            </div>
                            {{-- <div class="g-recaptcha" id="g-recaptcha-response" data-sitekey="6LeI1n0aAAAAAG3uJp_O_183pdKcnoUsrxNNj1p5"></div> --}}
                            <br><br>
                            <button class="red-btn red-btn-form" type="submit">Send Message</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  /.container -->
    </div> <!--  /.main-contact -->
    <div class="map">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1oMb-_Sintp39ZDkDuAcNxa1vcLCiur0_" width="640" height="480"></iframe>

    </div>
     <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqoUGdzvIo-cF3hxRdTG3T9RwKem0G2GMcallback=initMap&libraries=&v=beta" async></script>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	{{-- <script src="https://maps.google.com/maps/api/js"></script> --}}
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

 <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <script type="text/javascript">
 $(document).ready(function(){
     $("#contactForms").submit(function(event) {

//    var recaptcha = $("#g-recaptcha-response").val();
//    if (recaptcha === "") {
//       event.preventDefault();
//       alert("Please check the recaptcha");
//    }
});
     
 });

 function initMap() {
        // The location of Uluru
        const karma = { lat: 28.394857, lng: 84.124008 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10,
          center: karma,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: karma,
          map: map,
        });
      }

//     var locations = <?php print_r(json_encode($locations)) ?>;
//     console.log(locations)


//     var mymap = new GMaps({
//       el: '#mymap',
//       lat: 28.394857,
//       lng: 84.124008,
//       Center : {lat: 28, lng: 84},
//       zoom:6
//     });


//     $.each( locations, function( index, value ){
        
// 	    mymap.addMarker({
// 	      lat: value.latitude,
// 	      lng: value.longitude,
// 	      title: value.name,
// 	      click: function(e) {
// 	        alert('This is '+value.name+',.');
// 	      }
// 	    });
//    });


  </script>

@endsection
