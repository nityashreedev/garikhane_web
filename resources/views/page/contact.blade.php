@include('includes.head')
@include('includes.header')
<style type="text/css">
    #mymap {
          border:1px solid red;
          width: 100%;
          height: 500px;
    }
  </style>
<!-- Page Title start -->
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Contact Us</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a> / <span>Contact Us</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->
@include('admin.flashmessage.message')
<section class="inner-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-info">
                    <div class="sec-title">
                        <p>Always at your service</p>
                        <h2> Get in touch</h2>
                    </div>
                    <ul class="con-info">

                    <li><i class="icon flaticon-technology"></i> {{$setting->phone}}</li>

                    <li><a href="mailto:{{$setting->gmail}}"><i class="far fa-envelope"></i>
                        {{$setting->gmail}}</a></li>
                        <li><i class="fas fa-history"></i>आइतबार – शुक्रबार १०:०० देखि  ५:०० बजे(Sunday  to Friday 10:00 AM to 5:00PM)</li>
                    <li><i class="fas fa-map-marker-alt"></i>{{$setting->address}}</li>
                    </ul>
                    <ul class="social">
                        <li>
                        <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                        <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 message-form">
                
                    <h2>Drop us a Message</h2>
            <form method="POST" action="{{url('contact/form')}}" accept-charset="UTF-8" class="contact-form" id="contactForm" enctype="multipart/form-data"><input name="_token" type="hidden" value="bZk5peN947CaLyqxZrLt4IYs3kiR2s5wBM7hy4B5">
                {{csrf_field()}}
                        <input type="text" id="fname"Required name="name" placeholder="Your Name (Required)"
                            style="width: 100%;">
                        <input type="text" id="email" Required name="email" placeholder="Your E-mail  (Required)"
                            style="width: 100%;">
                        <input type="text" id="phone" Required name="phone" placeholder="Phone" style="width: 100%;">
                        <input type="text" id="address" Required name="address" placeholder="Address" style="width: 100%;">
                        <textarea id="subject"  required name="enquiry" placeholder="Your Message"
                            style="height:120px; width:100%;"></textarea>
                        <input type="submit" value="Submit">
                     </form> 
                </div>
            

        </div>

    </div>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1oMb-_Sintp39ZDkDuAcNxa1vcLCiur0_" width="640" height="480"></iframe>
    
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@include('includes.footer')
