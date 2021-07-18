@extends('layouts.homelayout')

@section('content')
@if($title  == "Event Summary")
  @if($single->bgimage)
<div class="pageTitle" style="background: url({{ asset('images/event/bg/'.$single->bgimage) }}) no-repeat;  background-size: cover;">
    @else
    <div class="pageTitle" style="background: url({{ asset('images/event/'.$single->image) }}) no-repeat;  background-size: cover;">
    @endif
	@else
	@if($single->bgimage)
	<div class="pageTitle" style="background:  url({{ asset('images/job/bg/'.$single->bgimage) }})  no-repeat; background-size: cover;">
	    @else
	    <div class="pageTitle" style="background:  url({{ asset('images/job/'.$single->image) }})  no-repeat; background-size: cover;">
	    @endif
	@endif
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">{{($title  == "Event Summary") ? 'Event Listing' : 'Job Listing'}}</h1>
        </div>
        <div class="col-md-6 col-sm-6">
			@if($title  == "Event Summary")
		<div class="breadCrumb"><a href="{{url('/')}}">Home</a> / <a href="{{url('events')}}">Event</a> / <span>{{$single->title}}</span></div>
		@else
		<div class="breadCrumb"><a href="{{url('/')}}">Home</a> / <a href="{{url('jobs')}}">Jobs</a> / <span>{{$single->title}}</span></div>
		@endif
	</div>
      </div>
    </div>
  </div>
<div class="job_details_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="row">
				<div class="job_details_header col-md-8">
					<div class="single_jobs white-bg d-flex justify-content-between">
						<div class="jobs_left d-flex align-items-center">
							<div class="thumb">
								@if($title  == "Event Summary")
							<img src="{{asset('images/event/'.$single->image)}}" alt="">
								@else
								<img src="{{asset('images/job/'.$single->image)}}" alt="">
								@endif
								</div>
								<div class="jobs_conetent tsa">
									<h4>{{$single->title}}</h4>
									<div class="links_locat d-flex align-items-center">
										<div class="location">
											<p>
												<i class="fa fa-map-marker"></i> {{$single->location}}
											</p>
										</div>
										<div class="location">
											<p>
												<i class="fa fa-clock-o"></i> {{$single->date}}
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="jobs_right">
								
							</div>
						</div>
					</div>
						<div class="col-lg-4">
									<div class="job_sumary">
									    <div class="listbtn">
									         @if(Auth::user())
								   <input type="hidden" value ="{{Auth::user()->id}}" name="user_id" id="user_id">
								   <?php
									$alreayinterestevent = App\Models\UserEvent::where('user_id',Auth::user()->id)->where('event_id',$single->id)->where('type','web')->first();
									$alreayinterestjob = App\Models\UserJob::where('user_id',Auth::user()->id)->where('type','web')->where('job_id',$single->id)->first(); 
									?>
								    @else
								     <input type="hidden" value ="0" name="user_id" id="user_id">
									@endif
								<input type="hidden" id="post_type" value="{{$title}}">
								<input type="hidden" id="post_id" value="{{$single->id}}">
								@if(Auth::user() && $title  == "Event Summary" && $alreayinterestevent )
								<a href="">Already Interested</a>
								@elseif(Auth::user() && $title != "Event Summary" && $alreayinterestjob )
								<a href="" >Already Interested</a>
								@else
								<a href="">Interested</a>
								@endif
								
								</div>
										<div class="job_content">
											<ul>
												<li><strong>Published on:</strong> 
												<span>{{$single->date}}</span>
												</li>
												@if(isset($single->vacancy))
												<li><strong>Vacancy: </strong>
													<span>{{$single->vacancy}} Position</span>
												</li>
												@endif
												@if(isset($single->salary))
												<li><strong>Salary: </strong>
												<span>{{$single->salary}}</span>
												</li>
												@endif
												<li><strong>Location: </strong>
												<span>{{$single->location}}</span>
												</li>
												@if(isset($single->price))
												<li><strong>Price:</strong> 
													<span>{{$single->price}}</span>
													</li>
												@endif
											</ul>
										</div>
									</div>
									
								</div>
								</div>
					<div class="descript_wrap white-bg">
						<div class="single_wrap">
							
							<p>{!! substr($single->description,0,2000000) !!}</p>
						</div>
					</div>
					
								</div>
							
							</div>
						</div>
					</div>
					<div id="wp-job-board-popup-message" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning">You are already intrested.</div></div>
					<div id="success" class="animated delay-2s fadeOutRight" style="display: none" ><div class="message-inner alert bg-warning" >Thank you for Interest</div></div>
				<script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script>
  
   
    $(document).ready(function(){

      var base_url = "{{ env('APP_URL')}}";
      $('#wp-job-board-popup-message').hide()
        $('.listbtn').on('click',function(e){
          e.preventDefault();
		  if($('#user_id').val() == 0)
		  {
			window.location.href = base_url + '/public/login'; 
		  }
		  else
		  {
				var user_id = $('#user_id').val();
				var post_type = $('#post_type').val();
				var post_id = $('#post_id').val();
        
				$.ajax({
					type: "POST",
					url: 'http://etechsoln.com/garikhanne' + '/public/interested/user',
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
        
       
    });

   
</script>
    
@endsection