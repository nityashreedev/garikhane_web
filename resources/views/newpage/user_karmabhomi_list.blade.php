@extends('layouts.frontendlayout')
@section('content')
<style>
	#regForm {
		background-color: #ffffff;
		font-family: Raleway;
		padding: 40px;
		width: 100%;
	}

	h1 {
		text-align: center;
	}

	.back-img {
		text-align: center;
	}

	.margintop {
		text-align: center;
		margin-top: 19px;
	}

	input {
		padding: 10px;
		font-size: 17px;
		font-family: Raleway;
		border: 1px solid #aaaaaa;
		width: 100%;
	}

	.form-check input {
		width: 11px;
	}

	.tab p label {
		width: 100%;
		margin-top: 20px;
		font-size: 20px;
		color: black;
		font-weight: 800;
	}

	/* Mark input boxes that gets an error on validation: */
	input.invalid {
		background-color: #ffdddd;
	}

	/* Hide all steps by default: */
	.tab {
		display: none;
	}

	button {
		background-color: #4CAF50;
		color: #ffffff;
		border: none;
		padding: 10px 20px;
		font-size: 17px;
		font-family: Raleway;
		cursor: pointer;
	}

	button:hover {
		opacity: 0.8;
	}

	#prevBtn {
		background-color: #bbbbbb;
	}

	/* Make circles that indicate the steps of the form: */
	.step {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbbbbb;
		border: none;
		border-radius: 50%;
		display: inline-block;
		opacity: 0.5;
	}

	.step.active {
		opacity: 1;
	}

	/* Mark the steps that are finished and valid: */
	.step.finish {
		background-color: #4CAF50;
	}

	.head-title h4 {
		text-align: center;
	}
</style>
<div class="page">
	<!--=============================== Header ===========================-->

	<!--=============================== Banner ==========================-->
	<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
		<div class="shadow-main">
			<h1> परियोजना सम्बन्धि बिवरण फारम</h1>
			<ul class="breadcrumb breadcrumb-news">
				<li><a href="{{url('/')}}">HOME</a></li>
				<li><a href="index.html">परियोजना सम्बन्धि बिवरण फारम
						आवेदन फाराम भर्दा कुनै समस्या भएमा निम्न ठेगानामा संम्पर्क गर्न हुन अनुरोध छ ।</a></li>
			</ul>
		</div>
	</div>
	@include('admin.flashmessage.message')

	@if(isset($message))<h3 class="margintop">{{$message}}</h3>@endif
	<section class="form-cont">
		<div class="container">
			<div class="row">
				<table class="table table-striped">
                    <thead>
                        <th>नाम</th>
                        <th>परियोजनाको नाम</th>
                        <th>मिति</th>
                    </thead>
                    <tbody>
                        @foreach($karmabhomis as $karmabhomi)
                        <tr>
                            <td>{{ $karmabhomi->name}}</td>
                            <td>{{ $karmabhomi->ob3 }}</td>
                            <td>{{ $karmabhomi->created_at->format('m/d/Y') }}</td>
                        </tr>
                        @endforeach
                        <a href="{{ route('karmabhomi_form') }}" class="btn btn-success pull-right">अर्को फारम भर्नुहोस्</a>
                    </tbody>
                </table>
			</div>
		</div>
	</section>
</div>


@endsection