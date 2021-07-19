<!DOCTYPE html>
<html lang="en">

	<!-- Mirrored from thx-html.fruitfulcode.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 14:39:26 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

	<head>
		<meta charset="UTF-8">
		<title>गरिखाने</title>
		<link rel="icon" href="{{asset('front/assets/images/logo-Garikhane_Final.png')}}" type="image/x-icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/manual.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/owlcarousel/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/owlcarousel/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/bootstrap-responsive.min.css')}}">

		{{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
		<!-- Google fonts Poppins -->
		<!-- Font Awesome -->
		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css">
		<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
		<!-- Fontello -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css"
			integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
			crossorigin="anonymous" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/animation.cs')}}s" type="text/css" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/fontello.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/fontello-codes.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/fontello-embedded.css')}}"
			type="text/css" />
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/fontello-ie7.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('front/assets/css/css-fontello/fontello-ie7-codes.css')}}"
			type="text/css" />

		<!-- End Google Tag Manager -->
	</head>
	<style>
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
		}

		.sticky+.content {
			padding-top: 60px;
		}

		.navbar.navbar-default.sticky {
			background: black;
			height: 121px;
		}

		.bounce-up .listss {
			opacity: 0;
			-moz-transition: all 700ms ease-out;
			-webkit-transition: all 700ms ease-out;
			-o-transition: all 700ms ease-out;
			transition: all 700ms ease-out;
			-moz-transform: translate3d(0px, 200px, 0px);
			-webkit-transform: translate3d(0px, 200px, 0px);
			-o-transform: translate(0px, 200px);
			-ms-transform: translate(0px, 200px);
			transform: translate3d(0px, 200, 0px);
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			backface-visibility: hidden;
		}

		.bounce-up.in-view .listss {
			opacity: 1;
			-moz-transform: translate3d(0px, 0px, 0px);
			-webkit-transform: translate3d(0px, 0px, 0px);
			-o-transform: translate(0px, 0px);
			-ms-transform: translate(0px, 0px);
			transform: translate3d(0px, 0px, 0px);
		}
	</style>

	<body data-rsssl=1>

		<div class="page">

			<!--=============================== Header ===========================-->
			<header class="header-block black top-bar">
				<div class="container-fluid">
					<div class="row notice">

						{{-- <div class="col-lg-8 col-sm-8 col-xs-12 lh">
							<p>Welcome to our website! Contact No: +977-1-4264823 / Email:
								<a href="mailto: gareekhane@gmail.com"> gareekhane@gmail.com</a>
							</p>
						</div> --}}
						<div class=" col-lg-2 col-md-2 col-xs-2 notice_title ">
							<h4>Notices</h4> &nbsp;<span class="fa fa-caret-right fa-2x"></span>
						</div>
						<div class="col-md-6 col-lg-6 col-sm-8 col-xs-6 notice_slider ">
							@foreach($notices as $n)
							<p><a href="{{ url('notice/detail/'.$n->id) }}">{{ $n->title }}</a></p>
							@endforeach
						</div>
						<div class=" col-lg-2 col-md-2  col-sm-6 col-xs-4 ph_no lh pl-0 pr-0 ">
							<img src="/images/whatsapp.png" height="20px" width="20px">
							<a href='https://wa.me/{{ $setting->whatsapp_number }}'
								target="_blank">{{ $setting->whatsapp_number }}</a>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 login lh pl-0 pr-0 ">
							<a href="{{ url('pdf') }}"><span>Downloads</span></a>
						</div>

						<div class="col-md-2 col-sm-3 col-xs-4 login lh pl-0 pr-0 ">

							@if(Auth::user() && Auth::user()->role != 'admin')
							<span> <i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->fname}} </span>
							<i class="fa fa-lock" aria-hidden="true"></i>
							<a class="get" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>

							@elseif(Auth::user() && Auth::user()->role == 'admin')
							<a href="{{url('/login')}}">Go to Dashboard </a>

							@else
							<a href="{{url('/login')}}">Login</a>
							@endif
						</div>
					</div>
				</div>
			</header>

			<!--=============================== Menu-Bar ========================-->
			<div class="menuBar">
				<div class="container-fluid">
					<div class="row nav-responsive">
						<div class="col-md-2 col-sm-2">
							<div class="navbar-header">
								<div class="logo">
									<a href="{{url('/')}}" class="navbar-brand">
										<img src="{{asset('front/assets/images/logo-Garikhane_Final.png')}}"
											alt="Homepage logo">
									</a>
								</div>
								<a href="#" class="navbar-toggle collapsed" data-toggle="collapse"
									data-target="#navbar-menu">
									Menu
								</a>
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<nav class="navbar navbar-default " id="navbar">
								<div class="navbar-middle">
									<div id="navbar-menu" class="collapse navbar-collapse ">
										<ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
													aria-expanded="false">हाम्रो बारेमा</a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="{{url('aboutus')}}">परिचय</a></li>
													<li><a href="{{url('boardmember')}}">विशेष समिति</a></li>
													<li class="second-dropdown"><a href="#">प्रदेश समिति <i
																class="fa fa-caret-right pull-right"></i></a>
														<ul class="second-dropdown-menu" role="menu">
															<li class="hovereffect"><a
																	href="{{ url('state1/commite') }}">प्रदेश नं १</a>
															</li>
															<li class="hovereffect"><a
																	href="{{ url('state2/commite') }}">प्रदेश नं २</a>
															</li>
															<li class="hovereffect"><a
																	href="{{ url('bagmati/commite') }}">बागमती प्रदेश
																</a></li>
															<li class="hovereffect"><a
																	href="{{ url('gandaki/commite') }}">गण्डकी प्रदेश
																</a></li>
															<li class="hovereffect"><a
																	href="{{ url('lumbini/commite') }}">लुम्बिनी
																	प्रदेश</a></li>
															<li class="hovereffect"><a
																	href="{{ url('karnali/commite') }}">कर्णाली
																	प्रदेश</a></li>
															<li class="hovereffect"><a
																	href="{{ url('sudurpaschim/commite') }}">सुदुरपश्चिम
																	प्रदेश</a></li>
														</ul>
													</li>
													<li><a href="{{url('commitemember')}}">व्यवस्थापन (सचिवालय)</a></li>
												</ul>
											</li>

											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
													aria-expanded="false">अभियान </a>
												<ul class="dropdown-menu" role="menu">
													@if($Programs)
													@foreach($Programs as $p)
													<li><a href="{{url('program/'.$p->id)}}">{{$p->title}} </a></li>
													@endforeach
													@endif

												</ul>
											</li>
											<!--<li class="dropdown">-->
											<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown"-->
											<!--       role="button" aria-expanded="false" title="Our causes">रोजगार</a>-->
											<!--    <ul class="dropdown-menu" role="menu">-->
											<!--        <li><a href="{{url('jobs')}}">रोजगार </a></li>-->
											<!--        <li><a href="{{url('job/provider')}}">रोजगार प्रदायक</a></li>-->
											<!--    </ul>-->
											<!--</li>-->
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
													aria-expanded="false">परियोजना</a>
												<ul class="dropdown-menu" role="menu">

													<!--<li><a href="{{url('garkhanne/project')}}">गरीखाने प्रोजेक्ट</a></l
											i>-->
													<li><a href="{{url('garikhane-app-form')}}">परियोजनाको आवेदन
															फारम</a></li>
													<li><a href="{{url('project/idea/bank?project_id=0')}}">प्रोजेक्ट आइडिया बैंक</a></li>
													<li><a href="{{url('entrepreneurship')}}">उद्यमशीलताको प्रक्रिया</a>
													</li>
													{{-- <li><a href="{{url('project/idea/bank?project_id=1')}}">लगानीको
													लागि तयार</a>
											</li> --}}
											{{-- <li><a href="{{url('project/idea/bank?project_id=2')}}">प्रशिक्षण स्टेज
											परियोजनाहरु</a></li> --}}
											{{-- <li><a href="{{url('project/idea/bank?project_id=3')}}">व्यवसाय चरण
											परियोजनाहरूको लागि योजना</a></li> --}}
											{{-- <li><a href="{{url('project/idea/bank?project_id=4')}}">परियोजनाहरू जुन
											बैंक र वित्तीय संस्थामा पुगेका छन्
											</a></li> --}}

											<!--<li><a href="{{url('banking')}}">बै्क</a></li>-->
										</ul>
										</li>
										{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"
										role="button" aria-expanded="false">रोजगारी </a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="{{url('job/provider')}}">रोजगारदाता </a></li>
										<li><a href="{{url('jobs')}}">रोजगारी खोज्ने</a></li>

										</ul>
										</li> --}}
										<li class="{{ (request()->is('events')) ? 'active' : '' }}"><a
												href="{{url('events')}}">कार्यक्रम</a></li>
										{{-- <li class="{{ (request()->is('pdf')) ? 'active' : '' }}"><a
												href="{{url('pdf')}}">डाउनलोड</a></li> --}}

										<!--<li class="dropdown">-->
										<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown"-->
										<!--       role="button" aria-expanded="false" title="News">Get Involved</a>-->
										<!--    <ul class="dropdown-menu" role="menu">-->
										<!--        <li><a href="{{url('mentor')}}">Mentor Form</a></li>-->
										<!--        <li><a href="{{url('entreprenure')}}">Enterprenure Form</a></li>-->

										<!--    </ul>-->
										<!--</li>-->


										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-expanded="false">मिडिया ग्यालरी </a>
											<ul class="dropdown-menu" role="menu">

												<li><a href="{{url('image-category')}}">तस्बिर पुस्तिका</a></li>
												<li><a href="{{url('notice')}}">सूचना</a></li>
												<li><a href="{{url('press')}}"> प्रेस बिज्ञप्ति</a></li>
												<li><a href="{{url('news')}}">समाचार</a></li>


											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
												aria-expanded="false">अन्य</a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="{{url('link')}}">महत्वपूर्ण लिंक</a></li>
												<li><a href="https://www.karmabhoomisamaj.com/" target="_blank">कर्मभूमि
														समाज</a></li>
												<li><a href="{{url('partners')}}">साझेदार संस्था</a></li>
												<li><a href="{{url('testimonial')}}">सान्दर्भिक भनाईहरु</a></li>
												<li><a href="{{url('faq')}}">बारम्बार सोधिने प्रश्नहरु</a></li>

											</ul>
										</li>

										<li class="last {{ (request()->is('contactus')) ? 'active' : '' }}"><a
												href="{{url('contactus')}}">सम्पर्क</a></li>
										</ul>
									</div>


								</div>
							</nav>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-4 top-right-btn">
							<ul class="top-right-icon">

								<li><a class="top-right-icons" target="_blank" href="{{ $setting->facebook }}"><img src="/images/social_icons/facebook.png"></a></li>
								<li><a class="top-right-icons" target="_blank" href="{{ $setting->instagram }}"><img src="/images/social_icons/instagram.png"></a></li>
								<li><a class="top-right-icons" target="_blank" href="{{ $setting->twitter }}"><img src="/images/social_icons/twitter.png"></a></li>
								<li><a class="top-right-icons" target="_blank" href="{{ $setting->linkedin }}"><img src="/images/social_icons/linkedin.png"></a></li>
								<li><a class="top-right-icons" target="_blank" href="{{ $setting->youtube }}"><img src="/images/social_icons/youtube.png"></a></li>
								<li><a class="top-right-icons" target="_blank" href="mailto:{{ $setting->gmail }}"><img src="/images/social_icons/gmail.png"></a></li>
							</ul>
							<ul>
								<li><a href="{{ url('garikhane-form') }}" class=" btn btn-outline-secondary red-btn">परियोजनाको फारम</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>