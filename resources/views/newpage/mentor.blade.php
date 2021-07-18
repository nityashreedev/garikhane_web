
@extends('layouts.frontendlayout')
@section('content')
<style>
.form-control {
	background: rgba(255, 255, 255, 0.1);
	border: none;
	color: #000;
	/* border-radius: 0; */
	/*max-width: none;*/
	/*height: opx;*/
}
</style>
<div id="menuBar-charity"></div>
<!--=============================== Banner ==========================-->
<div class="banner" style="position: relative;
height: 481px;
background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
background-size: cover;
background-position: 0 5%;
background-repeat: no-repeat;">
<div class="shadow-main">
	<h1> Mentor Form </h1>
	<ul class="breadcrumb breadcrumb-news">
		<li><a href="{{url('/')}}">HOME</a></li>
		<li><a>Mentor Form</a></li>
	</ul>
</div>
</div>
@include('admin.flashmessage.message')
<section class="inner-apply-online sec-padding">
	<div class="container">
		<div class="inner-apply-online-form">
			<div class="iaof-title">
				<span>Gari Khanne</span>
				<h2>Mentor Form</h2>
				<h5>{{$message}}</h5>
			</div>


			<form method="POST" action="{{isset($mentor->id) ? url('mentor/form/submission/'.$mentor->id) :  url('mentor/form/submission')}}" accept-charset="UTF-8" class="contact-forms" id="contactForm" enctype="multipart/form-data">
				{{csrf_field()}}
				<input name="user_id" type="hidden" value="{{isset(Auth::user()->id) ? Auth::user()->id : '' }}">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label> पूरा नाम <span style="color:red;">*</span></label><br>
							<span class="wpcf7-form-control-wrap adv_name"><input required type="text" name="name" value="{{isset($mentor->name) ? $mentor->name : '' }}"
								size="40"
								class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
								aria-required="true" aria-invalid="false" placeholder="Enter your Name"
								></span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label> इमेल ठेगाना <span style="color:red;">*</span></label><br>
								<span class="wpcf7-form-control-wrap adv_name"><input required type="email" name="email" value="{{isset($mentor->email) ? $mentor->email : '' }}"
									size="40"
									class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
									aria-required="true" aria-invalid="false" placeholder="Enter your Email"
									></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group half-wid-group hwg-left">
									<label>लिङ्ग <span style="color:red;">*</span> </label><br>
									<span class="wpcf7-form-control-wrap adv_noppol"><select required name="gender"
										class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
										<option value= "" selected Disabled>लिङ्ग</option>
										<option value="महिला" @if($mentor && $mentor->gender == 'महिला') selected @endif>महिला</option>
										<option value="पुरुष" @if($mentor && $mentor->gender == 'पुरुष') selected @endif>पुरुष</option>
										<option value="अन्य" @if($mentor && $mentor->gender == 'अन्य') selected @endif>अन्य</option>

									</select></span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group half-wid-group hwg-left">
									<label> फोन नम्बर <span style="color:red;">*</span></label><br>
									<span class="wpcf7-form-control-wrap adv_name"><input required type="number" name="phone" value="{{isset($mentor->phone) ? $mentor->phone : '' }}"
										size="40"
										class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
										aria-required="true" aria-invalid="false" placeholder="Enter your Name"
										></span>
									</div>

								</div>

								<div class="col-lg-6">
									<div class="form-group half-wid-group hwg-left">
										<label> प्रदेश <span style="color:red;">*</span> </label><br>
										<span class="wpcf7-form-control-wrap adv_noppol"><select required name="pradesh"
											class="wpcf7-form-control wpcf7-select form-control pradesh " aria-invalid="false">
											<option value= "" selected Disabled>प्रदेश</option>
											@foreach($pradeshs as $pradesh)
											<option value="{{$pradesh->name}}"  data-id="{{$pradesh->id}}" @if($mentor && $mentor->pradesh == $pradesh->name ) selected @endif>{{$pradesh->name}}</option>
											@endforeach


										</select></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group half-wid-group hwg-left">
										<label> जिल्ला <span style="color:red;">*</span> </label><br>
										<span class="wpcf7-form-control-wrap adv_noppol"><select required name="district"
											class="wpcf7-form-control wpcf7-select form-control " id="district"aria-invalid="false">
											<option value=""  Disabled> जिल्ला</option>
											@if($districts)

											@foreach($districts as $district)
											<option value="{{$district->name}}" data-id="{{$district->id}}"  @if($mentor && $mentor->$district == $district->name ) selected @endif> {{$district->name}}</option>
											@endforeach
											@endif
										</select></span>
									</div>
								</div>
								<div class="col-lg-6">
									<input type="hidden" class='dist' value="{{isset($mentor->district) ? $mentor->district : '' }}">
									<div class="form-group half-wid-group hwg-left">
										<label>पालिका <span style="color:red;">*</span></label><br>
										<span class="wpcf7-form-control-wrap adv_noppol"><select required name="vdc"
											class="wpcf7-form-control wpcf7-select form-control " id="vdc" aria-invalid="false">
											<option value= ""  Disabled> पालिका</option>
											@if($municipality)
											@foreach($municipality as $m)
											<option value="{{$m->name}}"  @if($mentor && $mentor->vdc == $m->name ) selected @endif> {{$m->name}}</option>
											@endforeach
											@endif
										</select></span>
									</div>

								</div>
								<div class="col-lg-12">
									<div class="fkso">
										<h6>व्यक्तिगत जानकारी</h6>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label> हाल कार्यरत वा आवद्ध रहेको संस्था <span style="color:red;">*</span></label><br>
										<span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="ob1" value="{{isset($mentor->ob1) ? $mentor->ob1 : '' }}"
											size="40"
											class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
											aria-required="true" aria-invalid="false" 
											></span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label> हालको पद <span style="color:red;">*</span></label><br>
											<span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="ob2" value="{{isset($mentor->ob2) ? $mentor->ob2 : '' }}"
												size="40"
												class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
												aria-required="true" aria-invalid="false" 
												></span>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label> क्षेत्रगत विज्ञता/ तपाइंको विशेषज्ञताको क्षेत्रको अनुभव <span style="color:red;">*</span></label><br>
												<span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="ob3" value="{{isset($mentor->ob3) ? $mentor->ob3 : '' }}"
													size="40"
													class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
													aria-required="true" aria-invalid="false" 
													></span>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label> तपाइंको अनुभवको अवधि कति हो? <span style="color:red;">*</span></label><br>
													<span class="wpcf7-form-control-wrap adv_name"><input  type="int" name="ob4" value="{{isset($mentor->ob4) ? $mentor->ob4 : '' }}"
														size="40"
														class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
														aria-required="true" aria-invalid="false" 
														></span>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label> पाइंको अन्य पेशागत आवद्धता के-के छन्, अथवा अन्य संलग्नता उल्लेख गर्नुहोस  <span style="color:red;">*</span></label><br>
														<span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="ob5" value="{{isset($mentor->ob5) ? $mentor->ob5 : '' }}"
															size="40"
															class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
															aria-required="true" aria-invalid="false" 
															></span>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>तपाईं कस्तो प्रकारको प्रशिक्षक हुनलाई आवेदन भर्दै हुनुहुन्छ? <span style="color:red;">*</span></label><br>
															<span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob6"
																class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
																<option value= "" selected Disabled> छनौट गर्नुहोस् </option>
																<option value="प्राज्ञिक"@if($mentor && $mentor->ob6 == 'प्राज्ञिक') selected @endif>प्राज्ञिक</option>
																<option value="क्षेत्रगत विशेषज्ञ"@if($mentor && $mentor->ob6 == 'क्षेत्रगत विशेषज्ञ') selected @endif>क्षेत्रगत विशेषज्ञ</option>
																<option value="उद्यमी/ लगानीकर्ता"@if($mentor && $mentor->ob6 == 'उद्यमी/ लगानीकर्ता') selected @endif>उद्यमी/ लगानीकर्ता</option>
															</select></span>
														</div>
													</div>

													<div class="col-lg-6">
														<div class="form-group">
															<label>यदि प्राज्ञिक व्यक्ति क्षेत्रगत विशेषज्ञ हो उक्त विषय, क्षेत्र र पक्षको उल्लेख गर्नुहोस <span style="color:red;">*</span></label><br>
															<span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob7"
																class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
																<option  value= "" selected Disabled>  छनौट गर्नुहोस्   </option>
																<option value="कृषि"@if($mentor && $mentor->ob7 == 'कृषि') selected @endif>कृषि</option>
																<option value="उत्पादन तथा प्रशोधन"@if($mentor && $mentor->ob7 == 'उत्पादन तथा प्रशोधन') selected @endif>उत्पादन तथा प्रशोधन</option>
																<option value="पर्यटन"@if($mentor && $mentor->ob7 == 'पर्यटन') selected @endif>पर्यटन</option>
																<option value="शिक्षा"@if($mentor && $mentor->ob7 == 'शिक्षा') selected @endif>शिक्षा</option>
																<option value="स्वास्थ्य"@if($mentor && $mentor->ob7 == 'स्वास्थ्य') selected @endif>स्वास्थ्य</option>
																<option value="सेवामूलक"@if($mentor && $mentor->ob7 == 'सेवामूलक') selected @endif>सेवामूलक</option>
																<option value="अन्य"@if($mentor && $mentor->ob7 == 'अन्य') selected @endif>अन्य</option>
															</select></span>
														</div>

													</div>
													<div class="col-lg-12">
														<div class="fkso">
															<h6>
																प्रशिक्षण कार्यको बारेमा
															</h6>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label> तपाइंको भविष्यका प्रशिक्षार्थीलाई महिनामा कति घण्टा (अधिकतम) दिन सक्नुहुन्छ? <span style="color:red;">*</span></label><br>
																<span class="wpcf7-form-control-wrap adv_name"><input  type="int" name="ob8" value="{{isset($mentor->ob8) ? $mentor->ob8 : '' }}"
																	size="40"
																	class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
																	aria-required="true" aria-invalid="false" 
																	></span>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label> प्रशिक्षण कार्यक्रमबाट तपाईंका अपेक्षाहरु के छन्? <span style="color:red;">*</span></label><br>
																	<span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="ob9" value="{{isset($mentor->ob9) ? $mentor->ob9 : '' }}"
																		size="40"
																		class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
																		aria-required="true" aria-invalid="false" 
																		></span>
																	</div>
																</div>

																<div class="col-lg-6">

																	<label> यसभन्दा अघि पनि प्रशिक्षकको रूपमा काम गर्नुभएको छ? <span style="color:red;">*</span> </label><br>
																	<span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob10"
																		class="wpcf7-form-control wpcf7-select form-control ob10 " aria-invalid="false">
																		<option value= "" selected Disabled> छनौट गर्नुहोस् </option>
																		<option value="छ" @if($mentor && $mentor->ob10 == 'छ') selected @endif>छ</option>
																		<option value="छैन" @if($mentor && $mentor->ob10 == 'छैन') selected @endif>छैन</option>
																		<option value="1">Other:</option>


																	</select></span>

																	<div class="other">
																		<input type="text" value="{{isset($mentor->ob10) ? $mentor->ob10 : '' }}"
																		class="wpcf7-form-control wpcf7-select form-control"  name="ob101" required>

																	</div>     
																</div>
																<div class="col-lg-6">
																	<div class="form-group">
																		<label> यदि छ भने कस्तो प्रशिक्षण कार्यमा सहभागी हुनुहुन्थ्यो? उल्लेख गर्नुहोस  <span style="color:red;">*</span></label><br>
																		<span class="wpcf7-form-control-wrap adv_name"><textarea  type="text" name="ob11" value="{{isset($mentor->ob11) ? $mentor->ob11 : '' }}"
																			size="40" row="3"
																			class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
																			aria-required="true" aria-invalid="false" 
																			>{{isset($mentor->ob11) ? $mentor->ob11 : '' }}</textarea></span>
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label>तपाईंको व्यक्तिगत विवरण वा तपाइंको अनुभव तथा योग्यता समावेश भएको संक्षिप्त विवरण संलग्न गर्नुहोस: <span style="color:red;">*</span> </label><br>
																			<span class="wpcf7-form-control-wrap file-129"><input required="" value="" type="file" name="citizen" size="40" class="wpcf7-form-control wpcf7-multifile form-control" multiple="multiple" aria-invalid="false"></span>
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label>तपाईंको पासपोर्ट आकारको तस्वीर संलग्न गर्नुहोस (गगल्स, सन्ग्लास अथवा क्याप लगाएको तस्वीर प्रयोग नगर्नुहोला)<span style="color:red;">*</span></label><br>
																			<span class="wpcf7-form-control-wrap file-129"><input required="" value="" type="file" name="psp" size="40" class="wpcf7-form-control wpcf7-multifile form-control" multiple="multiple" aria-invalid="false"></span>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="col-lg-12 text-center">
																			<div class="button-holder-cnt">
																				<p> <input type="submit" value="Submit"
																					class="wpcf7-form-control wpcf7-submit btn btn-default">
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
															</form>

														</div>
													</div>
												</section>
												<script>

													var base_url = 'http://etechsoln.com/garikhanne/public';
													$('.pradesh').change(function(){

														$("#vdc").prepend("<option value='' selected='selected'>पालिका छनौट गर्नुहोस् </option>");
        // get value of selected animal type
        var pradesh = $(this).find('option:selected').attr("data-id");

        $.ajax({
        	url : base_url+'/pradesh/'+ pradesh,
        	type:'POST',
        	data: {
        		"_token": "{{ csrf_token() }}",
        		"id": pradesh
        	},
        	success: function(data) {


        		var html = '';
        		var i;

        		for(i=0; i<data.length; i++){

        			html += '<option value='+data[i]['name']+' data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
        		}

        		$('#district').html(html);

        	}
        });
    });
													$('#district').change(function(){
        // get value of selected animal type
        var district = $(this).find('option:selected').attr("data-id");


        $.ajax({
        	url : base_url+'/district/'+ district,
        	type:'POST',
        	data: {
        		"_token": "{{ csrf_token() }}",
        		"id": district
        	},
        	success: function(data) {


        		var html = '';
        		var i;
        		for(i=0; i<data.length; i++){
        			console.log(data[i]['name'])
        			html += '<option value="'+data[i]['name']+'" data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
        		}

        		$('#vdc').html(html);

        	}
        });
    });
</script>
<script>
	$('.other').hide();
	$('input[name="ob101"]').removeAttr('required');

	$(document).ready(function(){
		$('.other').hide();
		$('input[name="ob101"]').removeAttr('required');
		$('.ob10').on('change',function(){
			$('.other').hide();
			$('input[name="ob101"]').removeAttr('required');
			if($(this).find("option:selected").val() == 1)
			{
				$('.other').show();
			}

		});

	});

</script>
@endsection