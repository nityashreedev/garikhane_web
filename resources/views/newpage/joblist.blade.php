@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
height: 481px;
background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
background-size: cover;
background-position: 0 5%;
background-repeat: no-repeat;">
<div class="shadow-main">
	<div class="features-main">
		<h1> रोजगार </h1>
		<ul class="breadcrumb breadcrumb-news">
			<li><a href="{{url('/')}}">गृहपृष्ठ </a></li>
			<li><a>रोजगार </a></li>
		</ul>
	</div>
</div>
</div>


<!--=============================== Events ================================-->
<div class="main-events">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="get" action="{{url('jobs')}}" accept-charset="UTF-8" class="form-features" id="jobSearch" enctype="multipart/form-data">
					<div class="row row-rel">
						<div class="col-md-3 col-sm-6 col-xs-12 mb-features">
							<label>Jobs From</label>
							<input type="date" placeholder="Date" name="date" id="date" value="{{isset( $_GET['date']) ? $_GET['date'] : '' }}">
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 mb-features">
							<label>Search</label>
							<input type="text" placeholder="Keyword" name="key" id="key" value="{{isset( $_GET['key']) ? $_GET['key'] : '' }}">
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 mb-features">
							<label>Near</label>
							<input type="text" placeholder="Location" name="location" id="location" value="{{isset( $_GET['location']) ? $_GET['location'] : '' }}">
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 col-abs mb-features">
							<input type="submit" value="Find Jobs">
						</div>
					</div>
				</form>
			</div>
		</div>

		@if($jobs)
		@foreach($jobs as $j)
		<div class="row mb-causes mb-causes-top">
			<div class="col-md-6 col-sm-12 col-xs-12 center-causes">
				<div class="person-img oksa">
					<a href="{{url('page/jobs/'.$j->id)}}" class="img-link">
						<span><i class="icon-eye" aria-hidden="true"></i></span>
						@if(isset($j->image))
						<img src="{{'images/job/'.$j->image}}" alt="causes1">
						@endif
					</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 ">
				<div id="event-1" class="person-card ">
					<div class="person-content">
						<h3><a href="{{url('page/jobs/'.$j->id)}}" class="title-white">{{$j->title}} </a></h3>
						<ul class="gb-list">
							<li>
								<a href="#"><i class="icon-clock" aria-hidden="true"></i>
									{{ $j->created_at->format('M') }} {{ $j->created_at->format('d') }}, {{ $j->created_at->format('Y') }}</a>
							</li>
							<li><i class="icon-location-1"></i>
									<a href="{{url('page/jobs/'.$j->id)}}"> {{$j->location}} </a>
							</li>
						</ul>
						<div class="location">
								<span>{{$j->location}}</span>
								<span>Salary: {{$j->salary}}</span>
								<span>Vacancy: {{$j->vacancy}}</span>
								<span style="color:red;">Deadline: {{$j->deadline}}</span>
						</div>
							<p>{!! strip_tags(\Illuminate\Support\Str::words($j->description, 35,'....'))  !!}</p>
						</div>
					</div>

					<div class="buttons">
						<a href="{{url('page/jobs/'.$j->id)}}" class=" green-btn green-btn-4">Read More</a>
					</div>
			</div> <!--  /.row -->
		</div>
			@endforeach

			<nav class="pagination-1">
				<ul>
					{!! $jobs->render() !!}
				</ul>
			</nav> <!-- /.Pagination -->
			@endif





			<!--======================= Pagination ========================-->

		</div> <!--  /.container -->
	</div> <!--  /.main-events -->
</div>
	@endsection
	<script>

		$(document).ready(function(){

			$("#jobSearch").submit(function(e) {

				e.preventDefault();

				var url =$(this).attr('action');
				var date = $('#date').val();
				var location = $('#location').val();
				var key = $('#key').val();

				$.ajax({
					type: "POST",
					url: url,
					data:{
						date : date,
						location :location,
						key :key,
						"_token": "{{ csrf_token() }}"

					},
					success: function(data)
					{
                       alert(data); // show response from the php script.
                   }
               });


			});
		})
	</script>