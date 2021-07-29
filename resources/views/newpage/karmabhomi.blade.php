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
			<h1> परियोजनाको आवेदन फारम</h1>
			<ul class="breadcrumb breadcrumb-news">
				<li><a href="{{url('/')}}">HOME</a></li>
				<li><a href="index.html">परियोजनाको आवेदन फारम/
						आवेदन फाराम भर्दा कुनै समस्या भएमा निम्न ठेगानामा संम्पर्क गर्न हुन अनुरोध छ ।</a></li><br>
				<li><a>ठेगाना: {{ $setting->address }}  </a></li>
				<li><a>सम्पर्क नम्बर: {{ $setting->phone }}</a></li>
			</ul>
		</div>
	</div>
	@include('admin.flashmessage.message')

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			<li>फारममा भर्दा केहि त्रुटी देखियो </li>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	@if(isset($message)) <h3 class="margintop">{{$message}}</h3>@endif
	<section class="form-cont">
		<div class="container">
			<div class="row">
				<form method="POST" action="{{url('karmabhomi/form/submission')}}" accept-charset="UTF-8"
					class="contact-forms" id="garikhaneForm" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="tab">

						<h3>१. व्यक्तिगत विवरण</h3>
						<p>
							<label>(१) नाम *</label>
							<input type="text" class="form-control required_field" placeholder="नाम"
								oninput="this.className = 'form-control required_field'" name="name" value="{{old('name')}}">

							@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(२) ठेगाना *</label>
							<label>प्रदेश *</label>
							<select class="form-control pradesh required_field" name="pradesh">
								<option value="" selected Disabled>प्रदेश</option>
								@foreach($pradeshs as $pradesh)
								<option value="{{$pradesh->id}}" {{ old('pradesh') == $pradesh->id ? 'selected' : '' }}
									data-id="{{$pradesh->id}}" @if(old('pradesh')) selected @endif>{{$pradesh->name}}
								</option>
								@endforeach
							</select>
							<div id="error">

							</div>

							@error('pradesh')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

						</p>
						<p>
							<label>जिल्ला *</label>
							<select class="form-control required_field" name="district" id="district" required>
								<option value="" Disabled selected> जिल्ला</option>
								@if($districts)
								@foreach($districts as $district)
								<option value="{{$district->id}}" data-id="{{$district->id}}" @if(old('district'))
									selected @endif> {{$district->name}}
								</option>
								@endforeach
								@endif
							</select>
							@error('district')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>

						<p>
							<label>पालिका *</label>
							<select class="form-control required_field" name="vdc" id="vdc" aria-invalid="false"
								required>
								<option value="" Disabled selected> पालिका</option>
								@if($municipality)
								@foreach($municipality as $m)
								<option value="{{$m->name}}" @if(old('vdc')) selected @endif> {{$m->name}}</option>
								@endforeach
								@endif
							</select>
							@error('vdc')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>वडा *</label>
							<select name="ward" required class="form-control required_field" aria-invalid="false">
								<option value="" selected Disabled> वडा</option>
								@for($i = 1 ;$i < 51 ; $i++) <option value="{{$i}}" @if(old('ward')) selected @endif>
									{{$i}}</option>
									@endfor
							</select>
							@error('ward')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>टोल *</label>
							<input type="text" class="form-control required_field" required placeholder="टोल"
								oninput="this.className = 'form-control required_field'" name="tole" value="{{old('tole')}}">

							@error('tole')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(३) सम्पर्क </label>
							<label>मोबाइल नम्बर : *</label>
							<input type="number" id="phone" class="form-control required_field"
								placeholder="सम्पर्क मोबाइल नम्बर" oninput="this.className = 'form-control required_field'"
								value="{{old('number')}}" onfocusout="validatePhone()" name="number" required>
							<div class="alert alert-danger error-phone">
								<p>फोनमा त्रुटी देखियो। १० अंक को नम्बर राख्नुहोस। </p>
							</div>
							@error('number')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>इमेल: *</label>
							<input type="email" class="form-control required_field" id="email" value="{{old('email')}}"
								placeholder="इमेल: " oninput="this.className = 'form-control required_field'" onfocusout="validateEmail()"
								name="email" required>

							<div class="alert alert-danger error-email">
								<p>इमेलमा त्रुटी देखियो। </p>
							</div>
							@error('email')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(४) लिङ्ग (एकमा चिन्ह लगाउनुस ) *</label>
							<div class="gender" id="gender-error"></div>
							<div class="form-check">
								<input class="form-check-input required_field" type="radio" name="gender"
									id="gridRadios1" value="महिला">
								<label class="form-check-label" for="gridRadios1">
									महिला
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gridRadios2"
									value="पुरुष" @if(old('gender')) checked @endif>
								<label class="form-check-label" for="gridRadios2">
									पुरुष
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="अन्य"
									@if(old('gender')) checked @endif>
								<label class="form-check-label" for="gridRadios2">
									अन्य
								</label>
							</div>
							@error('gender')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(५) जन्ममिति (बिक्रम सम्बत) (साल / महिना / गते) *</label>
							<input type="text" value="{{old('date')}}" name="date"
								class="form-control required_field date-picker" placeholder="जन्ममिति"
								oninput="this.className = 'form-control required_field'" />


							@error('date')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(६) शिक्षा(मिल्दो एकमा चिन्ह लगाउनुस ) *</label>
							<div class="form-check">
								<input class="form-check-input required_field" type="radio" name="education"
									value="१० कक्षासम्म" @if(old('education')) checked @endif>
								<label class="form-check-label" for="education2">
									१० कक्षासम्म
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="education" id="education2"
									value="१२ कक्षासम्म">
								<label class="form-check-label" for="education2">
									१२ कक्षासम्म
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="education" id="education2"
									value="स्नातक" @if(old('education')) checked @endif>
								<label class="form-check-label" for="education2">
									स्नातक
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="education" id="education2"
									value="स्नातकोत्तर वा अधिक" @if(old('education')) checked @endif>
								<label class="form-check-label" for="education2">
									स्नातकोत्तर वा अधिक
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="education" id="education2"
									value="साधारण लेखपढ" @if(old('education')) checked @endif>
								<label class="form-check-label" for="education2">
									साधारण लेखपढ
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="education" id="education2"
									value="सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त" @if(old('education')) checked
									@endif>
								<label class="form-check-label" for="education2">
									सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त
								</label>
							</div>
							@error('education')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(७)परिवारमा रहेको सदस्य संख्या *</label>
							<label>कुल *</label>
							<input type="number" placeholder="परिवारमा रहेको सदस्य संख्या"
								class="form-control required_field" oninput="this.className = 'form-control required_field'" name="family_total"
								value="{{old('family_total')}}">

							@error('family_total')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label>महिला *</label>
							<input type="number" placeholder="परिवारमा रहेको महिला संख्या"
								class="form-control required_field" oninput="this.className = 'form-control required_field'" name="family_female"
								value="{{old('family_female')}}">

							@error('family_female')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label>पुरुष *</label>
							<input type="number" placeholder="परिवारमा रहेको पुरुष संख्या"
								class="form-control required_field" oninput="this.className = 'form-control required_field'" name="family_male"
								value="{{old('family_male')}}">

							@error('family_male')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label>अन्य</label>
							<input type="number" placeholder="परिवारमा रहेको अन्य संख्या" class="form-control"
								oninput="this.className = 'form-control required_field'" name="family_others" value="{{old('family_others')}}">
						</p>
					</div>
					<div class="tab">
						<h3>(ख)व्यवसाय सम्बन्धित विवरण</h3>
						<p>
							<label>
								(१)‍‌‍ व्यवसायको किसिम (मिल्दोलाई छान्नुहोस् )? *
							</label>
							<div class="form-check">
								<input class="form-check-input required_field" type="radio" name="ob2" id="sroject1"
									value="नयाँ उद्योग/व्यवसाय स्थापना" @if(old('ob2')) checked @endif>
								<label class="form-check-label" for="sroject1">
									नयाँ उद्योग/व्यवसाय स्थापना

								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="ob2" id="project21"
									value="पुरानो उद्योग/व्यवसाय विस्तार" @if(old('ob2')) checked @endif>
								<label class="form-check-label" for="project21">
									पुरानो उद्योग/व्यवसाय विस्तार
								</label>
							</div>
							@error('ob2')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(२) व्यवसायको नाम *</label>
							<input placeholder="project ..." class="form-control required_field"
								oninput="this.className = 'form-control required_field'" name="ob3" value="{{old('ob3')}}">
							@error('ob3')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>(३)व्यवसायको ठेगाना *</label>
							<label>प्रदेश *</label>
							<select class="form-control pradesh required_field" name="business_pradesh" required>
								@if(!$karmabhomi)
								<option value="" selected Disabled>प्रदेश</option>
								@endif
								@foreach($pradeshs as $pradesh)
								<option value="{{$pradesh->id}}" data-id="{{$pradesh->id}}" @if($karmabhomi &&
									$karmabhomi->pradesh == $pradesh->id ) selected @endif>{{$pradesh->name}}</option>
								@endforeach
							</select>
							@error('business_pradesh')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</p>
						<p>
							<label>जिल्ला *</label>
							<select class="form-control required_field" name="business_district" id="district" required>
								<option value="" Disabled> जिल्ला</option>
								@if($districts)
								@foreach($districts as $district)
								<option value="{{$district->id}}" data-id="{{$district->id}}" @if($karmabhomi &&
									$karmabhomi->disrtict == $district->id ) selected @endif> {{$district->name}}
								</option>
								@endforeach
								@endif
							</select>
							@error('business_district')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							<p>
								<label>पालिका *</label>
								<select class="form-control required_field" required name="business_vdc" id="vdc"
									aria-invalid="false">
									<option value="" Disabled> पालिका</option>
									@if($municipality)
									@foreach($municipality as $m)
									<option value="{{$m->name}}" @if($karmabhomi && $karmabhomi->vdc == $m->name )
										selected @endif> {{$m->name}}</option>
									@endforeach
									@endif
								</select>
								@error('business_vdc')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>वडा *</label>
								<select required name="business_ward" required class="form-control required_field"
									aria-invalid="false">
									<option value="" selected Disabled> वडा</option>
									@for($i = 1 ;$i < 51 ; $i++) @if($karmabhomi && $karmabhomi->ward == $i)
										<option value="{{$i}}" selected>{{$i}}</option>

										@else
										<option value="{{$i}}">{{$i}}</option>
										@endif
										@endfor

								</select>
								@error('business_ward')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>टोल *</label>
								<input class="form-control required_field" required placeholder="टोल"
									oninput="this.className = 'form-control required_field'" name="business_tole" value="{{old('business_tole')}}">

								@error('business_tole')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(४)उदेश्य *</label>
								<input placeholder="व्यवसायको उदेश्य" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="business_aim" value="{{old('business_aim')}}">
								@error('business_aim')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(५)सुचारु वा विस्तार गर्नु को कारण *</label>
								<input placeholder="कारण" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="business_reason"
									value="{{old('business_reason') }}">

								@error('business_reason')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(६) उत्पादन हुने बस्तु वा सेवा *</label>
								<input placeholder="उत्पादन" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob4" value="{{old('ob4') }}">

								@error('ob4')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>
									(७) तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ? (मिल्दो एकमा चिन्ह लगाउनुस ) *
								</label>
								<div class="form-check">
									<input class="form-check-input required_field" type="radio" name="ob5"
										id="agriculture" value="कृषि" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="agriculture">
										कृषि
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="production"
										value="उत्पादन तथा प्रसोधन" @ @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="production">
										उत्पादन तथा प्रसोधन
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="production"
										value="शिक्षा" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="production">
										शिक्षा
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="tourism" value="पर्यटन"
										@if(old('ob5')) checked @endif>
									<label class="form-check-label" for="tourism">
										पर्यटन
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="tourism"
										value="सेवा उन्मुख व्यवसाय" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="tourism">
										सेवा उन्मुख व्यवसाय
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="tourism"
										value="विज्ञान तथा प्रविधि" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="tourism">
										विज्ञान तथा प्रविधि
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="tourism"
										value="सूचना तथा संचार" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="tourism">
										सूचना तथा संचार
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob5" id="business_other_field"
										value="अन्य" @if(old('ob5')) checked @endif>
									<label class="form-check-label" for="tourism">
										अन्य
									</label>
								</div>
								<input type="text" hidden id="business_field_others" oninput="this.className = 'form-control required_field'"
									name="business_field_others" placeholder="अन्य भए उल्लेख गर्नुहोस ">

								@error('ob5')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								@error('business_field_others')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror


							</p>
							<p>
								<label>(८) वार्षिक उत्पादन क्षमता (परिमाण) *</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">उत्त्पादित बस्तु</th>
										<th class="text-center">परिमाण</th>
										<th class="text-center">उत्पादन मूल्य </th>
										<th class="text-center">कैफियत</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="yearly_report">
										<tr>
											<td><input type="text" class="required_field"
													value="{{ old('yearly_production[0][product]') }}"
													name="yearly_production[0][product]" oninput="this.className = 'form-control required_field'"></td>
											<td><input type="text" class="required_field"
													value="{{ old('yearly_production[0][qty]') }}"
													name="yearly_production[0][qty]" oninput="this.className = 'form-control required_field'"></td>
											<td><input type="text" class="required_field"
													value="{{ old('yearly_production[0][price]') }}"
													name="yearly_production[0][price]" oninput="this.className = 'form-control required_field'"></td>
											<td><input type="text" class=""
													value="{{ old('yearly_production[0][remarks]') }}"
													name="yearly_production[0][remarks]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_yearly_report"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>

							<p>
								<label>(९) व्यवसायको लागि आबश्यक पर्ने सिप/तालिम र सो को उपलब्धता *</label>
								<input type="text" value="{{old('ob8')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob8">

								@error('ob8')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(१०) आवश्यक कच्चापदार्थ र सो को उपलब्धता *</label>
								<input type="text" class="form-control required_field" oninput="this.className = 'form-control required_field'"
									name="ob7" value="{{old('ob7') }}">

								@error('ob7')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p>
								<label>(११) आवश्यक कर्मचारी / कामदार</label>
								<input type="text" value="{{old('ob10')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob10">

								@error('ob10')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>मासिक जम्मा तलब</label>
								<input type="text" value="{{old('total_salary')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="total_salary">

								@error('total_salary')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(१२) संचालन हुने क्षमता *</label>
								<input type="text" value="{{old('ob11')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob11">

								@error('ob11')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>उत्पादन क्षमता *</label>
								<input type="text" value="{{old('ob12')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob12">

								@error('ob12')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p>
								<label>(१३)व्यवसाय संचालनको कुल लागत *</label>
								<input type="text" value="{{old('ob13')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob13">

								@error('ob13')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</p>
							<p>
								<label> (बैंक ऋण ) रु. *</label>
								<input type="text" class="form-control col-md-4 required_field"
									oninput="this.className = 'form-control required_field'" name="ob20" value="{{old('ob20')}}">

								@error('ob20')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label> (स्वपूंजी ) रु. *</label>
								<input type="text" value="{{old('ob21')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob21">

								@error('ob21')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label> (अपेक्षित ब्याजदर )% *</label>
								<input type="number" value="{{old('expected_interest')}}"
									class="form-control required_field" oninput="this.className = 'form-control required_field'"
									name="expected_interest">

								@error('expected_interest')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(१४)किस्ता र ऋण भुक्तानी प्रक्रिया
								</label>
								<div class="form-check">
									<input class="form-check-input required_field" type="radio" name="loan_payment_type"
										id="agriculture" value="मासिक" @if(old('loan_payment_type')) checked @endif>
									<label class="form-check-label" for="agriculture">
										मासिक
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_payment_type"
										id="agriculture" value="त्रैमासिक" @if(old('loan_payment_type')) checked @endif>
									<label class="form-check-label" for="agriculture">
										त्रैमासिक
									</label>
								</div>
								@error('loan_payment_type')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p>
								<label>(१५) ऋणको सुरक्षणको लागि रहने धितोको विवरण
								</label>
								<input type="text" value="{{old('ob22')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob22">

								@error('ob22')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p>
								<label>(१६)ऋण को बर्गिकरण
								</label>
								<div class="form-check">
									<input class="form-check-input required_field" type="radio" name="loan_category"
										id="agriculture" value="कृषि" @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										कृषि
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_category" id="agriculture"
										value="महिला " @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										महिला
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_category" id="agriculture"
										value="दलित " @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										दलित
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_category" id="agriculture"
										value="विदेशबाट फर्किएको " @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										विदेशबाट फर्किएको
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_category" id="agriculture"
										value="शिक्षित युवा  " @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										शिक्षित युवा
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="loan_category"
										id="loan_category_others" value="अन्य" @if(old('loan_category')) checked @endif>
									<label class="form-check-label" for="agriculture">
										अन्य
									</label>
								</div>
								<input hidden type="text" id="loan_category_text_field" name="loan_category_others_text"
									placeholder="अन्य भए उल्लेख गर्नुहोस ">
								@error('loan_category')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								@error('loan_category_others_text')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</p>

							<p>
								<label>(१७) खरिद गरिने तथा औजार को विवरण (मेशिनरी आवश्यक पर्ने भएमा मात्र उल्लेख
									गर्नुस।)</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">मेशिनेरिको नाम</th>
										<th class="text-center">लागत</th>
										<th class="text-center">उपलब्दता</th>
										<th class="text-center">कैफियत</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="required_machinery">
										<tr>
											<td><input type="text" oninput="this.className = 'form-control required_field'"
													name="machinery[0][machine_name]"></td>
											<td><input type="text" oninput="this.className = 'form-control required_field'"
													name="machinery[0][total_expense]"></td>
											<td><input type="text" oninput="this.className = 'form-control required_field'"
													name="machinery[0][availability]"></td>
											<td><input type="text" 	name="machinery[0][remarks]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_machinery"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
								@error('machinery.0.total_expense')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								@error('machinery.0.availability')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								@error('machinery.0.remarks')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>
							<p>
								<label>(१८) स्थिर पूंजी/सम्पत्ति *</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">स्थिर सम्पत्ति</th>
										<th class="text-center">अनुमानित मूल्य </th>
										<th class="text-center">विवरण</th>
										<th class="text-center">कैफियत</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="fixed_capital">
										<tr>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="fixed_capital[0][fixed_property]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="fixed_capital[0][approx_price]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="fixed_capital[0][details]"></td>
											<td><input type="text" class="" 
													name="fixed_capital[0][remarks]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_fixed_capital"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>
							<p>
								<label>(१९) चालु पूंजी//सम्पत्ति *</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">चालु सम्पत्ति</th>
										<th class="text-center">अनुमानित मूल्य </th>
										<th class="text-center">विवरण</th>
										<th class="text-center">कैफियत</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="running_capital">
										<tr>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="running_capital[0][running_property]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="running_capital[0][approx_price]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="running_capital[0][details]"></td>
											<td><input type="text" class="" 
													name="running_capital[0][remarks]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_running_capital"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>
							<p>
								<label>(२०)उत्पादनमा लाग्ने प्रति इकाई खर्चको विवरण *</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">नाम</th>
										<th class="text-center">अनुमानित मूल्य </th>
										<th class="text-center">अनुमानित बार्षिक उत्पादन </th>
										<th class="text-center">जम्मा खर्च </th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="unit_expense">
										<tr>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_expense[0][name]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_expense[0][approx_price]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_expense[0][approx_annual_production]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_expense[0][total_expense]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_unit_expense"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>
							<p>
								<label>(२१)बिक्रिबाट हुने प्रति इकाई आम्दानीको विवरण </label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">नाम</th>
										<th class="text-center">अनुमानित मूल्य </th>
										<th class="text-center">अनुमानित बार्षिक बिक्रि</th>
										<th class="text-center">जम्मा खर्च</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="unit_income">
										<tr>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_income[0][name]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_income[0][approx_price]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_income[0][approx_annual_sale]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="unit_income[0][total_expense]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_unit_income"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>
							<p>
								<label>(२२) बार्षिक संचालन खर्च *</label>
								<table class="table table-striped">
									<thead>
										<th class="text-center">नाम</th>
										<th class="text-center">अनुमानित मूल्य </th>
										<th class="text-center">अनुमानित बार्षिक बिक्रि</th>
										<th class="text-center">जम्मा खर्च</th>
										<th class="text-center">थप पंक्ति</th>
									</thead>
									<tbody id="annual_operation_cost">
										<tr>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="annual_operation_cost[0][name]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="annual_operation_cost[0][approx_price]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="annual_operation_cost[0][approx_annual_sale]"></td>
											<td><input type="text" class="required_field" oninput="this.className = 'form-control required_field'"
													name="annual_operation_cost[0][total_expense]"></td>
											<td><a class="btn btn-primary btn-sm pull-right add_annual_operation_cost"><i
														class="fa fa-plus"></i></a></td>
										</tr>
									</tbody>
								</table>
							</p>
							<p>
								<label>(२३) उत्पादित बस्तुको बजार *</label>
								<input type="text" value="{{old('ob16')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="ob16">

								@error('ob16')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</p>

							<p>
								<label>
									(२२) के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र
									कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ? (संचालनमा रहेको व्यवसाय भएमा मात्र
									भर्नुहोला।)
								</label>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob23" id="agriculture" value="छ"
										@if(old('ob23')) checked @endif>
									<label class="form-check-label" for="agriculture">
										छ
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="ob23" id="production" value="छैन"
										@if(old('ob23')) checked @endif>
									<label class="form-check-label" for="production">
										छैन
									</label>
								</div>
								@error('ob23')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p>
								<label>
									(२५)तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या छ?
								</label>
								<div class="form-check">
									<input class="form-check-input required_field" type="checkbox" name="ob24[]"
										id="agriculture" value="सेल्स तथा मार्केटिंग"
										@if(old('ob24[]')=="सेल्स तथा मार्केटिंग" ) @endif>
									<label class="form-check-label" for="agriculture">
										सेल्स तथा मार्केटिंग
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ob24[]" id="production"
										value="प्रविधि" {{ old('ob24') == "प्रविधि" ? 'checked':'' }}>
									<label class="form-check-label" for="production">
										प्रविधि
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ob24[]" id="production"
										value="संचालन व्यवस्थापन"
										{{ (is_array(old('ob24')) && in_array('संचालन व्यवस्थापन', old('ob24'))) ? ' checked' : '' }}>
									<label class="form-check-label" for="production">
										संचालन व्यवस्थापन
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ob24[]" id="education"
										value="मानव संसाधन" {{ old('ob24') == "मानव संसाधन" ? 'checked':'' }}>
									<label class="form-check-label" for="education">
										मानव संसाधन
									</label>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ob24[]" id="education"
										value="प्रशासन" {{ old('ob24') == "प्रशासन" ? 'checked':'' }}>
									<label class="form-check-label" for="education">
										प्रशासन
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="ob24[]"
										id="business_problem_others" value="अन्य"
										{{ old('ob24') == "अन्य" ? 'checked':'' }}>
									<label class="form-check-label" for="education">अन्य</label>
								</div>
								<input hidden type="text" id="ob24_others_text" name="ob24_others_text"
									value="{{ old('ob24_others_text') }}" placeholder="अन्य भए उल्लेख गर्नुहोस ">
								@error('ob24[]')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

								@error('ob24_others_text')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</p>
							<p>
								<label>(२६) तपाईंलाई पायक पर्ने बैंकको नाम के हो ?</label>
								<input type="text" value="{{old('bank_name') }}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="bank_name">

								@error('bank_name')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							</p>
							<p>
								<label>उक्त बैंक को पायक पर्ने शाखा</label>
								<input type="text" value="{{old('bank_branch')}}" class="form-control required_field"
									oninput="this.className = 'form-control required_field'" name="bank_branch">

								@error('bank_branch')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</p>

							<p><label>तपाइंको अमूल्य समय दिएर प्रस्नावाली भरिदिनु भएकोमा धन्यवाद !</label></p>
							<p><label>नोटः व्यवसाय विस्तारको लागि दर्ता कागज,कर चुक्ता प्रमाणपत्र,अडिट रिपार्टे पेश
									गर्नु पर्नेछ।</label></p>

							<div class="form_text">
								<div class="title">
									<h3>उद्देश्य</h3>
								</div>
								<ul>
									<li>->सम्भावित उद्यमी, नवीन उद्यमी तथा विस्तार/वृद्धिको सम्भावना बोकेका उद्यमीको
										पहिचान गर्ने ।</li>
									<li>->पहिचान गरिएको सम्भावित उद्यमी, नवीन उद्यमी तथा उद्यमी,व्यवसायीलाई बैंक तथा
										वित्तिय संस्था, लगानीकर्ता,सरकार र विकास साझेदारहरूसँग जोड्ने।</label></li>
									<li>->उद्यम, उद्यमी, लगानी तथा लगानीकर्ताको समन्वय हुने आधार निर्माण गर्ने ।</li>
									<li>->विदेश/वैदेशिक रोजगारबाट फर्केका युवालाई उद्यमशीलता सुरु गर्न प्रोत्साहन गर्ने
										।</li>
									<li>->बेरोजगार युवालाई रोजगारीको अवसर, ज्ञान तथा सीप एवं श्रोतसँग जोड्न समन्वय गर्ने
										।</li>

								</ul>
								<p>
									<strong>
										यस पृष्ठभूमि र उद्देश्यअनुरूप, हामीले सातै प्रदेशबाट सम्भाव्य उद्यमी,
										व्यवसायीहरूको खोजी गरिरहेका छौँ ।
										कृषि र यससँग सम्बन्धित परियोजना, उत्पादनमूलक क्षेत्र, पर्यटन, प्रविधि, शिक्षा,
										स्वास्थ्य तथा अन्य क्षेत्रका परियोजनाहरूका लागि आवेदन दिन सकिनेछ ।
									</strong>
								</p>
								<div class="title">
									<h3>कार्यक्रमहरु छनौट गर्दा निम्न विषयमा ध्यान दिइनेछ</h3>
								</div>
								<ul>
									<li>->एउटा उद्यमीको रूपमा उद्यम, उद्यमशीलताको यात्रालाई नेतृत्व दिन सक्ने, सुदृढ,
										प्रतिबद्ध व्यक्ति हुनुपर्नेछ |</li>
									<li>->उद्यम/व्यवसाय– सञ्चालनको अनुभव भएका र यससम्बन्धी सीप तथा ज्ञान भएकालाई
										प्राथमिकता दिइने छ |</li>
									<li>->इको सिस्टम (पारिस्थितिकी)– यहाँको समुदायसँग काम गर्ने मूल्य श्रृङखलाका हरेक
										पक्षसँग सुदृढ सम्बन्ध भएको हुनुपर्नेछ |</li>
									<li>->अर्थतन्त्रमा योगदान– परियोजना / स्टार्ट–अप्स (सानो व्यवसायको सुरुवात गर्ने)
										आकर्षक र उच्च वृद्धि / विस्तारको सम्भावना, रोजगारी सिर्जना गर्ने र सरकारले
										प्राथमिकीकरण गरेको उत्पादनमूलक क्षेत्र हुँदा राम्रो हुन्छ|</li>
								</ul>
								<p class="note">
									<strong>
										नोट : यो अभियान उद्यमशील बन्न चाहने व्यक्ति वा समुहहरुलाई उद्यमशील बनाउने
										कार्यमा सहयो गी संस्था मात्र हो ।
										यसले गरिखाने कार्यक्रम (व्यवसाय)का लागि आवश्यक ऋण उपलब्ध गराउनका निमित्त बैंक
										तथा वित्तिय संस्थासँग समन्वय
										गराइदिनुका साथै आवश्यक कानुनी कागजात तयार गरिदिने, तालिम दिने तथा व्यवस्थापन
										कार्यमा सहयोग गर्दछ ।
									</strong>
								</p>
								<div class="title">
									<h3>थप जानकारीको लागि सम्पर्क:</h3>
								</div>
								<div class="note">
									<p>टेलिफोन: ०१-४२६४८२३, इमेल : gareekhane@gmail.com</p>
									<p>नोटः अनलाइन आवेदन फारम भर्न तलको लिंक क्लिक गर्नुहोस् ।</p>
									<p>https://www.garikhane.com/garikhane-app-form</p>
								</div>
							</div>
					</div>

					<div style="overflow:auto;">
						<div style="float:right;">
							<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
						</div>
					</div>
					<!-- Circles which indicates the steps of the form: -->
					<div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<span class="step"></span>
					</div>
				</form>

			</div>
		</div>
	</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{-- nepali calendar --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css"
	crossorigin="anonymous" />
<script>
	$('.date-picker').nepaliDatePicker({
	dateFormat: '%y/ %m/ %d',
	closeOnDateSelect: true
  });

  $('.error-phone').hide();
  $('.error-email').hide();
</script>
{{-- <script>
	$('#garikhaneForm').validate({
		rules:{
			email:{
				required:true,
				email:true
			},
		},
		messages:{
			email:"email भर्नुहोस्।",
		}
	});

</script> --}}


<script type="text/javascript">
	// $(document).ready(function()
    // {
    //     $('.othertext').attr("required", false)
    //     $(document).on('click','#other', function()
    //     {
    //         console.log('ddd')
    //         $('.othertext').show();
    //        $('.othertext').attr("required", true);
    //     });        
    // });


    //    var base_url = 'https://www.karmabhoomisamaj.com';
    //      $('.pradesh').change(function(){
    //        console.log('sss');
    //         $("#district").prepend("<option value='' selected='selected'>पालिका छनौट गर्नुहोस् </option>");
    //         // get value of selected animal type
    //         var pradesh = $(this).find('option:selected').attr("data-id");
    
    //         $.ajax({
    //             url : base_url+'/pradesh',
    //             type:'POST',
    //             data: {
    //                 "_token": "{{ csrf_token() }}",
    //                  "id": pradesh
    //                 },
    //                success: function(data) {
                  
    //                 console.log(data);
    //                   var html = '';
    //                         var i;
                          
    //                         for(i=0; i<data.length; i++){
                              
    //                            html += '<option value="'+data[i]['name']+'" data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
    //                         }
                           
    //                          $('#district').html(html);
                   
    //              }
    //         });
    //     });
    //     $('#district').change(function(){
    //         // get value of selected animal type
    //         var district = $(this).find('option:selected').attr("data-id");
           
    
    //         $.ajax({
    //             url : base_url+'/district/'+ district,
    //             type:'POST',
    //             data: {
    //                 "_token": "{{ csrf_token() }}",
    //                  "id": district
    //                 },
    //                success: function(data) {
                  
                    
    //                   var html = '';
    //                         var i;
    //                         for(i=0; i<data.length; i++){
    //                             console.log(data[i]['name'])
    //                            html += '<option value="'+data[i]['name']+'" data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
    //                         }
                           
    //                          $('#vdc').html(html);
                   
    //              }
    //         });
    //     });
</script>

<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
  	document.getElementById("prevBtn").style.display = "none";
  } else {
  	document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
  	document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
  	document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
    window.scrollTo({ top: -20, behavior: 'smooth' });
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("garikhaneForm").submit();
    return false;
}
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validatePhone()
{
  var phone = document.getElementById('phone');
  var phone_pattern = /^\d{10}$/;
  if(phone.value.match(phone_pattern))
  {
	$('.error-phone').hide();
	valid = true;
  }else{
	$('.error-phone').show();
	valid = false;
  }
  return valid;
  }

 function validateEmail()
 {
 var email = document.getElementById('email');
  var email_pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if(email.value.match(email_pattern)){
	$('.error-email').hide();
	 valid = true;
  }else{
	$('.error-email').show();
	valid = false;
  }
  return valid;
 }
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("required_field");
  // A loop that checks every input field in the current tab:
  $('.error').remove();
  for (i = 0; i < y.length; i++) { 
	  if(y[i].type == "radio" || y[i].type == "checkbox"){
		  var name = y[i].getAttribute("name");
		  console.log(name);
		  var selection = document.querySelector('input[name="'+name+'"]:checked'); 
		  if(selection != null) {   
                console.log(selection.value + name+" is selected");
				valid = true;	  
            }   
            else {  
				var div = document.createElement('div');
				div.className += 'error';
				var text = document.createTextNode('यहाँ त्रुटी देखियो |');
				div.append(text); 
				y[i].parentElement.prepend(div);
				console.log(text);
				return;	
            } 
	  }
	  
	var phone = document.getElementById('phone');
  	var phone_pattern = /^\d{10}$/;
  	if(phone.value.match(phone_pattern))
  	{
		$('.error-phone').hide();
		valid = true;
  	}else{
		$('.error-phone').show();
		return;
  	}

	var email = document.getElementById('email');
	var email_pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
	if(email.value.match(email_pattern)){
		$('.error-email').hide();
		valid = true;
	}else{
		$('.error-email').show();
		return;
		}
	
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
	  var div = document.createElement('div');
		div.className += 'error';
		var text = document.createTextNode('यहाँ त्रुटी देखियो।  !');
		div.append(text); 
		y[i].after(div);
		 // and set the current valid status to false
		 valid = false;
		 return;
		 
     
  }
}
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
  	document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
  	x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		// dependent DropDown for state and district
		$('select[name="pradesh"]').on('change', function(){
			var pradeshId = $(this).val();
			console.log(pradeshId);
			if(pradeshId) {
                $.ajax({
                    url: '/pradesh',
                    type: "POST",
					dataType: "json",
					data:{
						"_token": "{{ csrf_token() }}",
						"id":pradeshId,
					},
                    success:function(data) {                      
						$('select[name="district"]').empty();
					  		 var i; 
                         for(i=0; i<data.length; i++){
							$('select[name="district"]').append('<option value="'+ data[i]['id'] +'">'+ data[i]['name'] +'</option>');
						 }
                    }
                });
            }else{
                $('select[name="district"]').empty();
            }
		});
		$('select[name="district"]').on('change', function(){
			var districtId = $(this).val();
			console.log(districtId);
			if(districtId) {
                $.ajax({
                    url: '/district',
                    type: "POST",
					dataType: "json",
					data:{
						"_token": "{{ csrf_token() }}",
						"id":districtId,
					},
                    success:function(data) {                      
						$('select[name="vdc"]').empty();
					  		 var i; 
                         for(i=0; i<data.length; i++){
							$('select[name="vdc"]').append('<option value="'+ data[i]['id'] +'">'+ data[i]['name'] +'</option>');
						 }
                    }
                });
            }else{
                $('select[name="vdc"]').empty();
            }
		});

		//Dependent dropdown for business address  
		$('select[name="business_pradesh"]').on('change', function(){
			var pradeshId = $(this).val();
			console.log(pradeshId);
			if(pradeshId) {
                $.ajax({
                    url: '/pradesh',
                    type: "POST",
					dataType: "json",
					data:{
						"_token": "{{ csrf_token() }}",
						"id":pradeshId,
					},
                    success:function(data) {                      
						$('select[name="business_district"]').empty();
					  		 var i; 
                         for(i=0; i<data.length; i++){
							$('select[name="business_district"]').append('<option value="'+ data[i]['id'] +'">'+ data[i]['name'] +'</option>');
						 }
                    }
                });
            }else{
                $('select[name="business_district"]').empty();
            }
		});
		$('select[name="business_district"]').on('change', function(){
			var districtId = $(this).val();
			console.log(districtId);
			if(districtId) {
                $.ajax({
                    url: '/district',
                    type: "POST",
					dataType: "json",
					data:{
						"_token": "{{ csrf_token() }}",
						"id":districtId,
					},
                    success:function(data) {                      
						$('select[name="business_vdc"]').empty();
					  		 var i; 
                         for(i=0; i<data.length; i++){
							$('select[name="business_vdc"]').append('<option value="'+ data[i]['id'] +'">'+ data[i]['name'] +'</option>');
						 }
                    }
                });
            }else{
                $('select[name="business_vdc"]').empty();
            }
		});

		$("input[type='radio'][name='ob5']").change(function(){
			if($('#business_other_field').is(":checked")){
				$('#business_field_others').addClass("required_field");
        		$('#business_field_others').show();
    		}else{
				$('#business_field_others').removeClass("required_field");
        		$('#business_field_others').hide();
    		}
		});

		$("input[type='radio'][name='loan_category']").change(function(){
			if($('#loan_category_others').is(":checked")){
				$('#loan_category_text_field').addClass("required_field");
        		$('#loan_category_text_field').show();
    		}else{
				$('#loan_category_text_field').removeClass("required_field");
        		$('#loan_category_text_field').hide();
    		}
		});

		$("#business_problem_others").change(function(){
			if($('#business_problem_others').prop("checked")){
				$('#ob24_others_text').addClass("required_field");
        		$('#ob24_others_text').show();
    		}else{
				$('#ob24_others_text').removeClass("required_field");
        		$('#ob24_others_text').hide();
    		}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var i=0;
		$('.add_yearly_report').click(function(){
			i++;
			$('#yearly_report').append('<tr><td><input type="text" class="required_field" name="yearly_production['+i+'][product]"></td><td><input type="text" class="required_field" name="yearly_production['+i+'][qty]"></td><td><input type="text" class="required_field" name="yearly_production['+i+'][price]"></td><td><input type="text" class="" name="yearly_production['+i+'][remarks]"></td><td><button class="btn btn-danger btn-sm" id="remove-tr"><i class="fa fa-times"></i></button></td></tr>');
										
			console.log(i);
		});

		$(document).on('click', '#remove-tr', function(){
			$(this).parents('tr').remove();
		});
		
		// add and remove button for machinery
		var j=0;
		$('.add_machinery').click(function(){
			j++;
			console.log(j);
			$('#required_machinery').append('<tr><td><input type="text" class="required_field" name="machinery['+j+'][machine_name]"></td><td><input type="number" class="required_field" name="machinery['+j+'][total_expense]"></td><td><input type="text" class="required_field" name="machinery['+j+'][availability]"></td><td><input type="text" class="" name="machinery['+j+'][remarks]"></td><td><a class="btn btn-danger btn-sm remove-machinery"><i class="fa fa-times"></i></a></td></tr>');
		});

		$(document).on('click', '.remove-machinery', function(){
			$(this).parents('tr').remove();
		});

		// add and remove button for fixed capital
		var k = 0;
		$('.add_fixed_capital').click(function(){
			k++;
			console.log(k);
			$('#fixed_capital').append('<tr><td><input type="text" class="required_field" name="fixed_capital['+k+'][fixed_property]"></td><td><input type="text" class="required_field" name="fixed_capital['+k+'][approx_price]"></td><td><input type="text" class="required_field" name="fixed_capital['+k+'][details]"></td><td><input type="text" class="" name="fixed_capital['+k+'][remarks]"></td><td><a class="btn btn-danger btn-sm"><i class="fa fa-times remove_fixed_capital"></i></a></td></tr>');
		});

		$(document).on('click', '.remove_fixed_capital', function(){
			$(this).parents('tr').remove();
		});

		// Add and remove button for runnig assets
		var l = 0;
		$('.add_running_capital').click(function(){
			l++;
			console.log(l);
			$('#running_capital').append('<tr><td><input type="text" name="running_capital['+l+'][running_property]"></td><td><input type="text" name="running_capital['+l+'][approx_price]"></td><td><input type="text" name="running_capital['+l+'][details]"></td><td><input type="text" name="running_capital['+l+'][remarks]"></td><td><a class="btn btn-danger btn-sm"><i class="fa fa-times remove_running_capital"></i></a></td></tr>');
		});

		$(document).on('click', '.remove_running_capital', function(){
			$(this).parents('tr').remove();
		});
	});

	//Add and remove button for UNIT EXPENSES
	var m=0;
	$('.add_unit_expense').click(function(){
		m++;
		console.log(m);
		$('#unit_expense').append('<tr><td><input type="text" class="required_field" name="unit_expense['+m+'][name]"></td><td><input type="text" class="required_field" name="unit_expense['+m+'][approx_price]"></td><td><input type="text" class="required_field" name="unit_expense['+m+'][approx_annual_production]"></td><td><input type="text" class="required_field" name="unit_expense['+m+'][total_expense]"></td><td><a class="btn btn-danger btn-sm remove_unit_expense"><i class="fa fa-times "></i></a></td></tr>');
	});
	$(document).on('click', '.remove_unit_expense', function(){
		$(this).parents('tr').remove();
	});
	
	// Add and remove button for annula Unit Income
	var n=0;
	$('.add_unit_income').click(function(){
		n++;
		console.log(n);
		$('#unit_income').append('<tr><td><input type="text" class="required_field" name="unit_expense['+n+'][name]"></td><td><input type="text" class="required_field" name="unit_expense['+n+'][approx_price]"></td><td><input type="text" class="required_field" name="unit_expense['+n+'][approx_annual_production]"></td><td><input type="text" class="required_field" name="unit_expense['+n+'][total_expense]"></td><td><a class="btn btn-danger btn-sm remove_unit_income"><i class="fa fa-times"></i></a></td></tr>');
	});
	$(document).on('click', '.remove_unit_income', function(){
		$(this).parents('tr').remove();
	});

	// add and remove button for annual Operation Cost
	var o=0;
	$('.add_annual_operation_cost').click(function(){
		o++;
		console.log(o);
		$('#annual_operation_cost').append('<tr><td><input type="text" class="required_field" name="annual_operation_cost['+o+'][name]"></td><td><input type="text" class="required_field" name="annual_operation_cost['+o+'][approx_price]"></td><td><input type="text" class="required_field" name="annual_operation_cost['+o+'][approx_annual_sale]"></td><td><input type="text" class="required_field" name="annual_operation_cost['+o+'][total_expense]"></td><td><a class="btn btn-danger btn-sm remove_annual_operation_cost"><i class="fa fa-times"></i></a></td></tr>');
	});
	$(document).on('click', '.remove_annual_operation_cost', function(){
		$(this).parents('tr').remove();
	});

</script>
{{-- <script>
	$(document).ready(function(){
		var j=0;
		$('.add_machinery').click(function(){
			j++;
			console.log(j);
			$('#required_machinery').append('<tr><td><input type="text" name="machinery['+j+'][machine_name]"></td><td><input type="number" name="machinery['+j+'][total_expense]"></td><td><input type="text" name="machinery['+j+'][availability]"></td><td><input type="text" name="machinery['+j+'][remarks]"></td><td><a class="btn btn-danger btn-sm remove-machinery"><i class="fa fa-times"></i></a></td></tr>');
		});

		$(document).on('click', '.remove-machinery', function(){
			$(this).parents('tr').remove();
		});
	});
</script> --}}

@endsection