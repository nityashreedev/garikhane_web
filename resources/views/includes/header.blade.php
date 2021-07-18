<style>
  ul.navbar-nav {
  margin-top: 30px;
}
li.nav-item.dropdown {
  margin: 0;
}
li.nav-item {
  margin: 15px;
}
ul.navbar-nav {
  margin-right: 70px;
}
</style>

<header class="main-header">
<!-- Header Top -->
<div class="header-top" style="padding: 8px 0px; !important">
    <div class="auto-container">
        <div class="clearfix">
              
              <!--Top Left-->
              <div class="top-left">
                <ul class="clearfix">
                  <li><span class="icon flaticon-technology"></span><a href="tel:{{$setting->phone}}" >{{$setting->phone}}</a></li>
                      <li><span class="icon flaticon-note"></span><a href="mailto:{{$setting->gmail}}">{{$setting->gmail}}</a> </li>
                  </ul>
              </div>
              
              <!--Top Right-->
              <div class="top-right">
              
                <!--social-icon-->
                  <div class="social-icon">
                  <a href="{{$setting->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a>
                      <a href="{{$setting->instagram}}"><span class="fa fa-instagram"></span></a>
                      <a href="{{$setting->twitter}}"><span class="fa fa-twitter"></span></a>
                  </div>
                  
                  
              </div>
              
          </div>
          
      </div>
  </div><!-- Header Top End -->  <body>

<div class="main-box">
<div class="auto-container">
  <div class="outer-container clearfix">
      <!--Logo Box-->
      <div class="logo-box">
      <div class="logo"><a href="{{url('/')}}"><img src="{{asset('frontend/logo.png')}}" alt=""  style="
            width: 107px;
            height: 90px;
        "></a></div>
          
      </div>
     
      <div class="nav-outer clearfix">


     <nav class="navbar navbar-expand-md scrolling-navbar">
       <div class="collapse navbar-collapse" id="main-navbar">

                <ul class="navbar-nav ">
	
	<li class="menu-item @if (Route::getCurrentRoute()->uri() == '/') active @endif">
		<a href="{{url('/')}}">Home</a>
	</li>
	<li class="menu-item {{ (request()->is('aboutus')) ? 'active' : '' }}" >

		<a href="{{url('aboutus')}}">About Us</a>
	</li>

	<li class="menu-item ">
		<a href="{{url('jobs')}}" target="_self">Jobs</a>
	</li>

	<li class="menu-item {{ (request()->is('events')) ? 'active' : '' }}">
		<a href="{{url('events')}}" target="_self">Events</a>
	</li>

	<li class="menu-item {{ (request()->is('contactus')) ? 'active' : '' }}">
		<a href="{{url('contactus')}}" target="_self">Contact</a>
	</li>

	<li class="menu-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Project
		</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{url('garkhanne/project')}}">Grikhanne Project</a></li>
			<li><a class="dropdown-item" href="{{url('project/idea/bank')}}">Project Idea bank</a></li>
			<li><a class="dropdown-item" href="{{url('banking')}}">Banking</a></li>
		</ul>
	</li>

	<li class="menu-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Get Involved
		</a>
		<ul class="dropdown-menu">
			@if(Auth::user() && Auth::user()->id != 33)
			<li><a class="dropdown-item" href="{{url('entreprenure')}}">Entreprenure Form</a></li>
			<li><a class="dropdown-item" href="{{url('mentor')}}">Mentor Form</a></li>
			@else
			<li><a class="dropdown-item" href="{{url('/login')}}">Entreprenure Form</a></li>
			<li><a class="dropdown-item" href="{{url('/login')}}">Mentor Form</a></li>
			@endif
			@if(Auth::user() && Auth::user()->id != 33)
			<li><a class="dropdown-item" href="{{url('user/profile')}}">Setting</a></li>
			@endif
		</ul>
	</li>
	@if(Auth::user() && Auth::user()->id != 33)
	<?php 
         $mentormessage = App\Models\UserMentor::where('user_id',Auth::user()->id)->where('user_type','web')->first();
        if($mentormessage && $mentormessage->accept_status == 0)
          $mentorstatusmsg = 'Your Mentor Form Is In Pending State';
          elseif($mentormessage && $mentormessage->accept_status == 1)
          $mentorstatusmsg = 'Your Mentor Form Has Accepted';
          elseif($mentormessage && $mentormessage->accept_status == 2)
          $mentorstatusmsg = 'Your Mentor Form Has Rejected';
          else
          $mentorstatusmsg = '';
          
          if($mentormessage && $mentormessage->reply)
          $mentorreply = $mentormessage->reply;
          else
          $mentorreply ='';
        
         
        $enterprenuremessage = App\Models\UserEnterprenure::where('user_id',Auth::user()->id)->where('user_type','web')->first();
        if($enterprenuremessage && $enterprenuremessage->accept_status == 0)
          $entreprenurestatusmsg = 'Your Enterprenure Form Is In Pending State';
          elseif($enterprenuremessage && $enterprenuremessage->accept_status == 1)
          $entreprenurestatusmsg = 'Your Enterprenure Form Has Accepted';
          elseif($enterprenuremessage && $enterprenuremessage->accept_status == 2)
          $entreprenurestatusmsg = 'Your Enterprenure Form Has Rejected';
          else
          $entreprenurestatusmsg = '';
          
        if($enterprenuremessage && $enterprenuremessage->reply)
          $enterprenurereply = $mentormessage->reply;
          else
          $enterprenurereply ='';
         ?>
	<li class="menu-item no-padding">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			<i class="fas fa-bell"></i>
		</button>
	</li>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              
            <h3>Notification:</h3>
         
            <p>{{$mentorstatusmsg}}</p>
            <p>{{$entreprenurestatusmsg}}</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
	<li class="menu-item no-padding">
	    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModals">
			<i class="fas fa-envelope"></i>
		</button>
		
	</li>
	<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              
            <h3>Notification:</h3>
            <p>{{$mentorreply}}</p>
            <p>{{$enterprenurereply}}</p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
</div>
@endif
</ul>
  
                    
  </div>
 
</nav>
<!-- Hidden Nav Toggler -->

@if(Auth::user() && Auth::user()->id != 33)
<a class="get"  href="{{ route('logout') }}"onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 @csrf
</form>
@else
<a href="{{url('login')}}" class="get">Login / SignUp</a>
@endif


              
</div>
<div class="nav-toggler">
      <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
      </div><!-- / Hidden Nav Toggler -->
</div>    
</div>
</div>

<section class="hidden-bar right-align">

  <div class="hidden-bar-closer">
      <button class="btn"><i class="fa fa-close"></i></button>
  </div>
  
  <!-- Hidden Bar Wrapper -->
  <div class="hidden-bar-wrapper">
  
      <!-- .logo -->
      <div class="logo text-center">
      <a href="{{url('/')}}"><img src="{{asset('frontend/logo.png')}}" alt=""></a>			
      </div><!-- /.logo -->
      
      <!-- .Side-menu -->
      <div class="side-menu">
      <!-- .navigation -->
          <ul class="navigation">
                  <ul class="navigation clearfix"  >
                    
                    <li class="nav-item @if (Route::getCurrentRoute()->uri() == '/') active @endif">
                      <a href="{{url('/')}}">Home</a>
 
                   </li>
                   <li class="nav-item {{ (request()->is('aboutus')) ? 'active' : '' }}" >
                     
                     <a href="{{url('aboutus')}}">About Us</a>
                   </li>
                     <li class="nav-item ">
                    <a href="{{url('jobs')}}" target="_self">Jobs</a>
                      </li>
                      <li class="nav-item {{ (request()->is('events')) ? 'active' : '' }}">
 <a href="{{url('events')}}" target="_self">Events</a>
 </li>
                      <li class="nav-item {{ (request()->is('contactus')) ? 'active' : '' }}">
                     <a href="{{url('contactus')}}" target="_self">Contact</a>
                      </li>
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Project
                     </a>
                     
                     <ul class="dropdown-menu">
                      
                     <li><a class="dropdown-item" href="{{url('garkhanne/project')}}">Grikhanne Project</a></li>
                     <li><a class="dropdown-item" href="{{url('project/idea/bank')}}">Project Idea bank</a></li>
                     
                     </ul>
                    
                   </li>
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Get Involved
                     </a>
                     <ul class="dropdown-menu">
                       @if(Auth::user() && Auth::user()->id != 33)
                     <li><a class="dropdown-item" href="{{url('entreprenure')}}">Entreprenure Form</a></li>
                     <li><a class="dropdown-item" href="{{url('mentor')}}">Mentor Form</a></li>
                       @else
                     <li><a class="dropdown-item" href="{{url('/login')}}">Entreprenure Form</a></li>
                     <li><a class="dropdown-item" href="{{url('/login')}}">Mentor Form</a></li>
                       @endif
                     </ul>
                     
                      
                    
                   </li>
                    
                  </ul>
          </ul>
      </div><!-- /.Side-menu -->
      <a href="http://localhost/rescuedynamic/public/enroll" class="get">Get Involved</a>
      <div class="social-icons">
          <ul>
              <li><a href="#"><i class="fa fa-facebook" style="padding-top: 7px;"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" style="padding-top: 7px;"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" style="padding-top: 7px;"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" style="padding-top: 7px;"></i></a></li>
          </ul>
      </div>
      
  </div><!-- / Hidden Bar Wrapper -->
</section>