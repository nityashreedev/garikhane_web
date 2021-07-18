@extends('layouts.frontendlayout')
@section('content')
<style>
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.rojs-btn {
    background: blue;
    padding: 10px;
    width: 100%;
    display: block;
    text-align: center;
    font-size: 17px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1>{{($title  == "Event Summary") ? ' कार्यक्रम' : 'Job Listing'}}</h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">HOME</a></li>
            @if($title  == "Event Summary")
            <li><a href="{{url('events')}}"> कार्यक्रम</a></li>
            @else
            <li><a href="{{url('jobs')}}">Jobs</a></li>
            @endif
            <li><a>{{$single->title}}</a></li>

        </ul>
    </div>
</div>
<div class="page page-news page-single">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="main-post">

                    <!--====================== Main Post =======================-->
                    <div class="post-single">
                        <div class="person-card post-single-cont">
                            <div class="person-content">
                                <div class="thumb">
								@if($title  == "Event Summary")
							<img src="{{asset('images/event/'.$single->image)}}" alt="">
								@else
								<img src="{{asset('images/job/'.$single->image)}}" alt="">
								@endif
								</div>
                                <p>{!! substr($single->description,0,2000000) !!}</p>
                            </div>
                        </div>

                    </div> <!-- /.post-single -->
                </div> <!-- /.main-post -->
            </div> <!-- /.col-lg-8 col-md-8 -->

            <!-- ======================= Sidebar ===================-->
            <div class="col-lg-4 col-md-5 col-sm-6 right-post-single">
                <div class="job_content">
                    <!--<a href="#" class="rojs-btn">Interested</a>-->
                    <div class="listbtn">
									@if(Auth::user())
									<?php
									$alreayinterestevent = App\Models\UserEvent::where('user_id',Auth::user()->id)->where('event_id',$single->id)->where('type','web')->first();
									$alreayinterestjob = App\Models\UserJob::where('user_id',Auth::user()->id)->where('type','web')->where('job_id',$single->id)->first(); 
									?>
								
								   <input type="hidden" value ="{{Auth::user()->id}}" name="user_id" id="user_id">
								    @else
								     <input type="hidden" value ="0" name="user_id" id="user_id">
									@endif
								<input type="hidden" id="post_type" value="{{$title}}">
								<input type="hidden" id="post_id" value="{{$single->id}}">
								
								@if(Auth::user() && $title  == "Event Summary" && $alreayinterestevent )
								<a class="rojs-btn listbtn" href="" style="background:blue;">Interested</a>
					
								 @elseif(Auth::user() && Auth::user()->id != 33)
								<a class="rojs-btn listbtn" style="background:gray;" href="{{url('user/event')}}">Interested</a>
								@endif
						
									
								
								</div>
                    <ul>
                        <li>
                            <strong>Published on:</strong> <span>{{$single->date}}</span>
                        </li>
                        @if(isset($single->vacancy))
                        <li>
                            <strong>Vacancy: </strong> <span>{{$single->vacancy}} Position</span>
                        </li>
                        @endif
                        @if(isset($single->salary))
                        <li><strong>Salary: </strong> <span>Rs.{{$single->salary}}</span>
                        </li>
                        @endif
                        <li><strong>Location: </strong> <span>{{$single->location}}</span>
                        </li>
                        <!--@if(isset($single->price))-->
                        <!--<li><strong>Entry Fee: </strong> <span>{{$single->price}}</span>-->
                        <!--</li>-->
                        <!--@endif-->
                    </ul>
                </div>
                @include('admin.flashmessage.message')
                <form method="POST" action="{{url('contact/form')}}" accept-charset="UTF-8" id="contact" enctype="multipart/form-data">
                    <input name="_token" type="hidden" value="bZk5peN947CaLyqxZrLt4IYs3kiR2s5wBM7hy4B5">
                {{csrf_field()}}
    <h3>Contact Us</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" id="name" tabindex="1" name="name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" id="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" id="phone" name="phone" tabindex="3" required>
    </fieldset>
   
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" id="enquiry" name="enquiry" required></textarea>
    </fieldset>
    <fieldset>
     <div class="g-recaptcha" id="g-recaptcha-response" data-sitekey="6LeI1n0aAAAAAG3uJp_O_183pdKcnoUsrxNNj1p5"></div>
     </fieldset>
                            <br><br>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
            </div> <!-- /.col-lg-4 col-md-4 -->

        </div> <!--  /.row -->
    </div> <!--  /.container -->
    
    <div id="wp-job-board-popup-message" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning">You are already intrested.</div></div>
					<div id="success" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning" >Thank you for Interest</div></div>
					
					      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>


 
     <script>
  
   
    $(document).ready(function(){

      var base_url = "{{ env('APP_URL')}}";
      $('#wp-job-board-popup-message').hide()
        $('.listbtn').on('click',function(e){
          e.preventDefault();
		  if($('#user_id').val() == 0)
		  {
			window.location.href = 'https://www.karmabhoomisamaj.com/login'; 
		  }
		  else
		  {
				var user_id = $('#user_id').val();
				var post_type = $('#post_type').val();
				var post_id = $('#post_id').val();
        
				$.ajax({
					type: "POST",
					url: 'https://www.karmabhoomisamaj.com/user/event',
					data: {
						post_type: post_type,
						user_id: user_id,
						post_id: post_id,
					
						"_token": "{{ csrf_token() }}"
					},
					success: function(msg) {

                   
						if (msg.success === true) {
							alert('Thank you for Interest');
							$('#success').removeAttr("style");
							$('.rojs-btn').css("background", "green");
							
						}
						else {
							$('#wp-job-board-popup-message').removeAttr("style");
						}
						if(msg.success == false)
						{
							alert('Already Submitted');
						}
						
					},
					error: function(msg) {
						$('#alert').html('Server Error');
					}
     		   });
		    }
       
       
       });
       
       
       
       $("#contact").submit(function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var enquiry = $('#enquiry').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            
            $.ajax({
           type: "POST",
           url: url,
           data: {
               name:name,
               email:email,
               enquiry:enquiry,
               phone:phone,
               "_token": "{{ csrf_token() }}"
               
           } ,
           success: function(data)
           {
               alert('Thank you !!')
              document.getElementById("contact").reset();
              $('.alertmessage').html('Thank you !!')
           },
           error: function(data)
           {
              document.getElementById("contact").reset();
               $('.alertmessage').html('You have already submitted')
           }
         });
            
        })
        
       
    });

   
</script>
@endsection