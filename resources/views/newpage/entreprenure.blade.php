
@extends('layouts.frontendlayout')
@section('content')
<style>
    form-control {
    background: rgba(255, 255, 255, 0.1);
   
    color: #000000;
   
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
            <h1> Enterprenure Form </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a>Enterprenure Form</a></li>
            </ul>
        </div>
    </div>
 @include('admin.flashmessage.message')
  <section class="inner-apply-online sec-padding">
    <div class="container">
        <div class="inner-apply-online-form">
            <div class="iaof-title">
                <span>Gari Khanne</span>
                <h2>Enterprenureship  Form</h2>
            </div>
            <h3>{{$message}}</h3>
            <h4>Required <span style="color:red;"> *</span></h4>
        <form method="POST" action="{{isset($enterprenure->id) ? url('enterprenure/form/submission/'.$enterprenure->id) : url('enterprenure/form/submission')}}" accept-charset="UTF-8" class="contact-forms" id="contactForm" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="user_id" type="hidden" value="{{isset(Auth::user()->id) ? Auth::user()->id : '' }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> नाम <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_name"><input required type="text" name="name" value="{{isset($enterprenure->name) ? $enterprenure->name : '' }}"
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                    aria-required="true" aria-invalid="false" placeholder="Enter your Name"
                                    ></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                          <label> ठेगाना <span style="color:red;">*</span></label><br>
                          <span class="wpcf7-form-control-wrap adv_name"><input required type="text" name="address" value="{{isset($enterprenure->address) ? $enterprenure->address : '' }}"
                                  size="40"
                                  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                  aria-required="true" aria-invalid="false" placeholder="Enter your Name"
                                  ></span>
                      </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group half-wid-group hwg-left">
                        <label> प्रदेश <span style="color:red;">*</span> </label><br>
                        <span class="wpcf7-form-control-wrap adv_noppol"><select required name="pradesh"
                                class="wpcf7-form-control wpcf7-select form-control pradesh " aria-invalid="false">
                                <option value= "" selected Disabled>प्रदेश</option>
                                @foreach($pradeshs as $pradesh)
                        <option value="{{$pradesh->name}}"  data-id="{{$pradesh->id}}" @if($enterprenure && $enterprenure->pradesh == $pradesh->name ) selected @endif>{{$pradesh->name}}</option>
                        @endforeach
                                
                                
                            </select></span>
                    </div>
                    <div class="form-group half-wid-group hwg-left">
                        <label> जिल्ला <span style="color:red;">*</span> </label><br>
                        <span class="wpcf7-form-control-wrap adv_noppol"><select required name="district"
                                class="wpcf7-form-control wpcf7-select form-control " id="district"aria-invalid="false">
                                <option value=""  Disabled> जिल्ला</option>
                                @if($districts)
                                @foreach($districts as $district)
                        <option value="{{$district->name}}" data-id="{{$district->id}}"  @if($enterprenure && $enterprenure->disrtict == $district->name ) selected @endif> {{$district->name}}</option>
                                @endforeach
                               @endif
                            </select></span>
                          </div>
                          <div class="form-group half-wid-group hwg-left">
                            <label>पालिका <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="vdc"
                                    class="wpcf7-form-control wpcf7-select form-control " id="vdc" aria-invalid="false">
                                    <option value= ""  Disabled> पालिका</option>
                                   @if($municipality)
                                   @foreach($municipality as $m)
                              <option value="{{$m->name}}"  @if($enterprenure && $enterprenure->vdc == $m->name ) selected @endif> {{$m->name}}</option>
                                      @endforeach
                                   @endif
                                </select></span>
                        </div>
                <div class="form-group half-wid-group hwg-left">
                  <label>वडा <span style="color:red;">*</span></label><br>
                  <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ward" required
                          class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                          <option value= "" selected Disabled> वडा</option>
                          @for($i = 1 ;$i < 51 ; $i++)
                                @if($enterprenure && $enterprenure->ward == $i)
                                     <option value="{{$i}}" selected>{{$i}}</option>
                  
                                 @else
                                 <option value="{{$i}}">{{$i}}</option>
                                 @endif
                          @endfor
                         
                      </select></span>
              </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group half-wid-group hwg-left">
                        <label>जातजाति <span style="color:red;">*</span> </label><br>
                        <span class="wpcf7-form-control-wrap adv_noppol"><select required name="caste"
                                class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                <option value= "" selected Disabled>जातजाति</option>
                                <option value="दलित (पहाडे: कामी, दमाई, सार्की, गाइने र बादी; तराई/मधेशी: चमार, लोहार, दुसाद, पासवान, तत्मा, खतावे, बान्तार, डोम, चिडिमार, धोबी, हलखोर, मुसहर)"@if($enterprenure && $enterprenure->caste == 'दलित (पहाडे: कामी, दमाई, सार्की, गाइने र बादी; तराई/मधेशी: चमार, लोहार, दुसाद, पासवान, तत्मा, खतावे, बान्तार, डोम, चिडिमार, धोबी, हलखोर, मुसहर)') selected @endif>दलित (पहाडे: कामी, दमाई, सार्की, गाइने र बादी; तराई/मधेशी: चमार, लोहार, दुसाद, पासवान, तत्मा, खतावे, बान्तार, डोम, चिडिमार, धोबी, हलखोर, मुसहर)</option>
                                <option value="उपेक्षित जनजाति (पहाडे: मगर, राई, लिम्बु, गुरुङ, तामाङ, भोटे, शेर्पा, लामा, वालुंग, ब्याँसी, घर्ती, भुजेल, कुमाल, सुनुवार, लेप्चा, मेचे, जिरेल र घिरेल; तराई/ मधेशी: थारु, धानुक, राजबंशी, ताजपुरिया, गंगाई, धिमाल, मेचे, किसान, मुण्डा, सतार, दनुवार, झाँगड/ढाँगड, कोचे, पतरकट्टा, कुसबडीया)" @if($enterprenure && $enterprenure->caste == 'उपेक्षित जनजाति (पहाडे: मगर, राई, लिम्बु, गुरुङ, तामाङ, भोटे, शेर्पा, लामा, वालुंग, ब्याँसी, घर्ती, भुजेल, कुमाल, सुनुवार, लेप्चा, मेचे, जिरेल र घिरेल; तराई/ मधेशी: थारु, धानुक, राजबंशी, ताजपुरिया, गंगाई, धिमाल, मेचे, किसान, मुण्डा, सतार, दनुवार, झाँगड/ढाँगड, कोचे, पतरकट्टा, कुसबडीया)') selected @endif>उपेक्षित जनजाति (पहाडे: मगर, राई, लिम्बु, गुरुङ, तामाङ, भोटे, शेर्पा, लामा, वालुंग, ब्याँसी, घर्ती, भुजेल, कुमाल, सुनुवार, लेप्चा, मेचे, जिरेल र घिरेल; तराई/ मधेशी: थारु, धानुक, राजबंशी, ताजपुरिया, गंगाई, धिमाल, मेचे, किसान, मुण्डा, सतार, दनुवार, झाँगड/ढाँगड, कोचे, पतरकट्टा, कुसबडीया)</option>
                                <option value="अनुपेक्षित जनजाति (नेवार र थकाली)"@if($enterprenure && $enterprenure->caste == 'अनुपेक्षित जनजाति (नेवार र थकाली)') selected @endif>अनुपेक्षित जनजाति (नेवार र थकाली)</option>
                                <option value="उपेक्षित गैर दलित (यादव, तेली, कलवार, सुंडी, सोनार, लोहार, कोइरी, कुर्मी, कानू, हलुवाई, हजाम/ठाकुर, बाधे, वहाए, रजभार, केवट, मलाहा, नुनिया, कुम्हार, कहार, लोधा, विन, बाँधा, भेडीयार, माली, कमार, धुनिया)"@if($enterprenure && $enterprenure->caste == 'उपेक्षित गैर दलित (यादव, तेली, कलवार, सुंडी, सोनार, लोहार, कोइरी, कुर्मी, कानू, हलुवाई, हजाम/ठाकुर, बाधे, वहाए, रजभार, केवट, मलाहा, नुनिया, कुम्हार, कहार, लोधा, विन, बाँधा, भेडीयार, माली, कमार, धुनिया)') selected @endif>उपेक्षित गैर दलित (यादव, तेली, कलवार, सुंडी, सोनार, लोहार, कोइरी, कुर्मी, कानू, हलुवाई, हजाम/ठाकुर, बाधे, वहाए, रजभार, केवट, मलाहा, नुनिया, कुम्हार, कहार, लोधा, विन, बाँधा, भेडीयार, माली, कमार, धुनिया)</option>
                                <option value="अन्य (पहाडे: बाहुन, क्षेत्री, ठकुरी, सन्यासी; तराई/मधेसी: राजपुत, कायस्थ, बानिया, मारवाडी, जैन, नारुङ)" @if($enterprenure && $enterprenure->caste == 'अन्य (पहाडे: बाहुन, क्षेत्री, ठकुरी, सन्यासी; तराई/मधेसी: राजपुत, कायस्थ, बानिया, मारवाडी, जैन, नारुङ)') selected @endif>अन्य (पहाडे: बाहुन, क्षेत्री, ठकुरी, सन्यासी; तराई/मधेसी: राजपुत, कायस्थ, बानिया, मारवाडी, जैन, नारुङ)</option>
                                <option value="धार्मिक अल्पसंख्यक (पहाडे: चुरौटे; तराई/मधेसी: मुसलमान)" @if($enterprenure && $enterprenure->caste == 'धार्मिक अल्पसंख्यक (पहाडे: चुरौटे; तराई/मधेसी: मुसलमान)') selected @endif>धार्मिक अल्पसंख्यक (पहाडे: चुरौटे; तराई/मधेसी: मुसलमान)</option>
                                
                            </select></span>
                    </div>
                    <div class="form-group half-wid-group hwg-left">
                        <label>लिङ्ग <span style="color:red;">*</span> </label><br>
                        <span class="wpcf7-form-control-wrap adv_noppol"><select required name="gender"
                                class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                <option value= "" selected Disabled>लिङ्ग</option>
                                <option value="महिला"@if($enterprenure && $enterprenure->gender == 'महिला') selected @endif>महिला</option>
                                <option value="पुरुष"@if($enterprenure && $enterprenure->gender == 'पुरुष') selected @endif>पुरुष</option>
                                <option value="अन्य"@if($enterprenure && $enterprenure->gender == 'अन्य') selected @endif>अन्य</option>
                              
                            </select></span>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label> टोल</label><br>
                  <span class="wpcf7-form-control-wrap adv_name"><input  type="text" name="tole" value="{{isset($enterprenure->tole) ? $enterprenure->tole : '' }}"
                              size="40"
                              class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                              aria-required="true" aria-invalid="false" placeholder="टोल"
                              ></span>
                  </div>
              </div>
              
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>जन्म मिति </label><br>
                            <span class="wpcf7-form-control-wrap dob "><input type="text" required name="date" id="nepali-datepicker" value="{{isset($enterprenure->date) ? $enterprenure->date : '' }}"
                                    class="bod-picker wpcf7-form-control"
                                    aria-required="true" aria-invalid="false"
                                    placeholder="Birth of Date"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label> शिक्षा <span style="color:red;">*</span> </label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="education"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> शिक्षा </option>
                                    <option value="१० कक्षासम्म" @if($enterprenure && $enterprenure->education == '१० कक्षासम्म') selected @endif>१० कक्षासम्म</option>
                                    <option value="१२ कक्षासम्म" @if($enterprenure && $enterprenure->education == '१२ कक्षासम्म') selected @endif>१२ कक्षासम्म</option>
                                    <option value="स्नातक" @if($enterprenure && $enterprenure->education == 'स्नातक') selected @endif>स्नातक</option>
                                    <option value="स्नातकोत्तर" @if($enterprenure && $enterprenure->education == 'स्नातकोत्तर') selected @endif>स्नातकोत्तर</option>
                                    <option value="साधारण लेखपढ" @if($enterprenure && $enterprenure->education == 'साधारण लेखपढ') selected @endif>साधारण लेखपढ</option>
                                    <option value="सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त" @if($enterprenure && $enterprenure->education == 'सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त') selected @endif>सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त</option>

                                </select></span>
                        </div>
                    
                    </div>
                    २. रोजगारी/ व्यवसाय विवरण (उपयुक्त कुनै एक उत्तरमा सहि चिनो लगाउनुहोस)

                    <div class="col-lg-6">
                    
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाइँ विदेशवाट हालसालै फर्किनु भएको हो? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob1"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="हो" @if($enterprenure && $enterprenure->ob1 == 'हो') selected @endif>हो</option>
                                    <option value="होइन" @if($enterprenure && $enterprenure->ob1 == 'होइन') selected @endif>होइन</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>हो भने, कुन क्षेत्र/ देशबाट फर्किनु भएको हो? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob2"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option  value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="भारत" @if($enterprenure && $enterprenure->ob2 == 'भारत') selected @endif>भारत</option>
                                    <option value="दक्षिण एसिया (भारत बाहेक)" @if($enterprenure && $enterprenure->ob2 == 'दक्षिण एसिया (भारत बाहेक)') selected @endif>दक्षिण एसिया (भारत बाहेक)</option>
                                    <option value="खाडी मुलुक" @if($enterprenure && $enterprenure->ob2 == 'खाडी मुलुक') selected @endif>खाडी मुलुक</option>
                                    <option value="मलेसिया" @if($enterprenure && $enterprenure->ob2 == 'मलेसिया') selected @endif>मलेसिया</option>
                                    <option value="युरोप" @if($enterprenure && $enterprenure->ob2 == 'युरोप') selected @endif>युरोप</option>
                                    <option value="उत्तर अमेरिका" @if($enterprenure && $enterprenure->ob2 == 'उत्तर अमेरिका') selected @endif>उत्तर अमेरिका</option>
                                    <option value="दक्षिण अमेरिका" @if($enterprenure && $enterprenure->ob2 == 'दक्षिण अमेरिका') selected @endif>दक्षिण अमेरिका</option>
                                    <option value="अफ्रिका" @if($enterprenure && $enterprenure->ob2 == 'अफ्रिका') selected @endif>अफ्रिका</option>
                                    <option value="दक्षिण पूर्वी एसिया" @if($enterprenure && $enterprenure->ob2 == 'दक्षिण पूर्वी एसिया') selected @endif>दक्षिण पूर्वी एसिया</option>
                                    <option value="अस्ट्रेलिया" @if($enterprenure && $enterprenure->ob2 == 'अस्ट्रेलिया') selected @endif>अस्ट्रेलिया</option>
                                    
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>फर्केको साल/ अवधी <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob3"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option  value= "" selected Disabled>  छनौट गर्नुहोस्   </option>
                                    <option value="४ महिना" @if($enterprenure && $enterprenure->ob3 == '४ महिना') selected @endif>४ महिना</option>
                                    <option value="६ महिना" @if($enterprenure && $enterprenure->ob3 == '६ महिना') selected @endif>६ महिना</option>
                                    <option value="१ वर्ष" @if($enterprenure && $enterprenure->ob3 == '१ वर्ष') selected @endif>१ वर्ष</option>
                                    <option value="१ वर्षभन्दा धेरै" @if($enterprenure && $enterprenure->ob3 == '१ वर्षभन्दा धेरै') selected @endif>१ वर्षभन्दा धेरै</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>फर्कनुको कारण <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob4"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled>  छनौट गर्नुहोस्   </option>
                                    <option value="करार अन्त्य" @if($enterprenure && $enterprenure->ob4 == 'करार अन्त्य') selected @endif>करार अन्त्य</option>
                                    <option value="आफ्नै देशमा केही गरौँ भन्ने सोचले" @if($enterprenure && $enterprenure->ob4 == 'आफ्नै देशमा केही गरौँ भन्ने सोचले') selected @endif>आफ्नै देशमा केही गरौँ भन्ने सोचले</option>
                                    <option value="निर्वासन" @if($enterprenure && $enterprenure->ob4 == 'निर्वासन') selected @endif>निर्वासन</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob4 == 'अन्य') selected @endif>अन्य</option>
                                </select></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label>कार्यक्षेत्र <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob5"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="कृषि" @if($enterprenure && $enterprenure->ob5 == 'कृषि') selected @endif>कृषि</option>
                                    <option value="उत्पादन तथा प्रशोधन" @if($enterprenure && $enterprenure->ob5 == 'उत्पादन तथा प्रशोधन') selected @endif>उत्पादन तथा प्रशोधन</option>
                                    <option value="शिक्षा" @if($enterprenure && $enterprenure->ob5 == 'शिक्षा') selected @endif>शिक्षा</option>
                                    <option value="पर्यटन" @if($enterprenure && $enterprenure->ob5 == 'पर्यटन') selected @endif>पर्यटन</option>
                                    <option value="सेवा उन्मुख व्यवसाय" @if($enterprenure && $enterprenure->ob5 == 'सेवा उन्मुख व्यवसाय') selected @endif>सेवा उन्मुख व्यवसाय</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob5 == 'अन्य') selected @endif>अन्य</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाइंको हालको अवस्था के हो? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob6"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option  value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="व्यवसाय (२ वर्ष देखि दर्ता भई संचालित)" @if($enterprenure && $enterprenure->ob6 == 'व्यवसाय (२ वर्ष देखि दर्ता भई संचालित)') selected @endif>व्यवसाय (२ वर्ष देखि दर्ता भई संचालित)</option>
                                    <option value="व्यवसाय (संचालन भएको २ वर्ष भन्दा बढी)" @if($enterprenure && $enterprenure->ob6 == 'व्यवसाय (संचालन भएको २ वर्ष भन्दा बढी)') selected @endif>व्यवसाय (संचालन भएको २ वर्ष भन्दा बढी)</option>
                                    <option value="नयाँ व्यवसाय गर्ने सोचमा" @if($enterprenure && $enterprenure->ob6 == 'नयाँ व्यवसाय गर्ने सोचमा') selected @endif>नयाँ व्यवसाय गर्ने सोचमा</option>
                                    <option value="नयाँ रोजगारीको खोजीमा" @if($enterprenure && $enterprenure->ob6 == 'नयाँ रोजगारीको खोजीमा') selected @endif>नयाँ रोजगारीको खोजीमा</option>
                                   
                                    
                                </select></span>
                        </div>
                    </div>
                    आफ्नै व्यवसाय दर्ता गरी संचालन गरिरहनुभएमा यो खण्ड भर्नु होला
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob7"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob7 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob7 == 'छैन') selected @endif>छैन</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <div class="form-group">
                                <label> तपाइंको व्यवसायको वित्तीय जानकारी खुलाई दिनु होला </label><br>
                            <span class="wpcf7-form-control-wrap address"><input type="text" required name="ob8" value="{{isset($enterprenure->ob8) ? $enterprenure->ob8 : ''}}" row ="3"
                                        size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                        aria-required="true" aria-invalid="false" ></span>
                            </div>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>वार्षिक आम्दानी <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob9"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled>  छनौट गर्नुहोस्  </option>
                                    <option value="१ लाख भन्दा मुनी"@if($enterprenure && $enterprenure->ob9 == '१ लाख भन्दा मुनी') selected @endif>१ लाख भन्दा मुनी</option>
                                    <option value="१ लाख देखि ५ लाख सम्म"@if($enterprenure && $enterprenure->ob9 == '१ लाख देखि ५ लाख सम्म') selected @endif>१ लाख देखि ५ लाख सम्म</option>
                                    <option value="५ लाख देखि १० लाख सम्म"@if($enterprenure && $enterprenure->ob9 == '५ लाख देखि १० लाख सम्म') selected @endif>५ लाख देखि १० लाख सम्म</option>
                                    <option value="१० लाख देखि २५ लाख सम्म"@if($enterprenure && $enterprenure->ob9 == '१० लाख देखि २५ लाख सम्म') selected @endif>१० लाख देखि २५ लाख सम्म</option>
                                    <option value="२५ लाख देखि ५० लाख सम्म"@if($enterprenure && $enterprenure->ob9 == '२५ लाख देखि ५० लाख सम्म') selected @endif>२५ लाख देखि ५० लाख सम्म</option>
                                    <option value="५० लाख देखि १ करोड सम्म"@if($enterprenure && $enterprenure->ob9 == '५० लाख देखि १ करोड सम्म') selected @endif>५० लाख देखि १ करोड सम्म</option>
                                    <option value="१ करोड भन्दा माथी" @if($enterprenure && $enterprenure->ob9 == '१ करोड भन्दा माथी') selected @endif>१ करोड भन्दा माथी</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>वार्षिक खर्च <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob10"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= ""  selected Disabled>  छनौट गर्नुहोस्    </option>
                                    <option value="१ लाख भन्दा मुनी"@if($enterprenure && $enterprenure->ob10 == '१ लाख भन्दा मुनी') selected @endif>१ लाख भन्दा मुनी</option>
                                    <option value="१ लाख देखि ५ लाख सम्म"@if($enterprenure && $enterprenure->ob10 == '१ लाख देखि ५ लाख सम्म') selected @endif>१ लाख देखि ५ लाख सम्म</option>
                                    <option value="५ लाख देखि १० लाख सम्म"@if($enterprenure && $enterprenure->ob10 == '५ लाख देखि १० लाख सम्म') selected @endif>५ लाख देखि १० लाख सम्म</option>
                                    <option value="१० लाख देखि २५ लाख सम्म"@if($enterprenure && $enterprenure->ob10 == '१० लाख देखि २५ लाख सम्म') selected @endif>१० लाख देखि २५ लाख सम्म</option>
                                    <option value="२५ लाख देखि ५० लाख सम्म"@if($enterprenure && $enterprenure->ob10 == '२५ लाख देखि ५० लाख सम्म') selected @endif>२५ लाख देखि ५० लाख सम्म</option>
                                    <option value="५० लाख देखि १ करोड सम्म"@if($enterprenure && $enterprenure->ob10 == '५० लाख देखि १ करोड सम्म') selected @endif>५० लाख देखि १ करोड सम्म</option>
                                    <option value="१ करोड भन्दा माथी" @if($enterprenure && $enterprenure->ob10 == '१ करोड भन्दा माथी') selected @endif>१ करोड भन्दा माथी</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>चल सम्पत्ति <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob11"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled>  छनौट गर्नुहोस्     </option>
                                    <option value="१ लाख भन्दा मुनी"@if($enterprenure && $enterprenure->ob11 == '१ लाख भन्दा मुनी') selected @endif>१ लाख भन्दा मुनी</option>
                                    <option value="१ लाख देखि ५ लाख सम्म"@if($enterprenure && $enterprenure->ob11 == '१ लाख देखि ५ लाख सम्म') selected @endif>१ लाख देखि ५ लाख सम्म</option>
                                    <option value="५ लाख देखि १० लाख सम्म"@if($enterprenure && $enterprenure->ob11 == '५ लाख देखि १० लाख सम्म') selected @endif>५ लाख देखि १० लाख सम्म</option>
                                    <option value="१० लाख देखि २५ लाख सम्म"@if($enterprenure && $enterprenure->ob11 == '१० लाख देखि २५ लाख सम्म') selected @endif>१० लाख देखि २५ लाख सम्म</option>
                                    <option value="२५ लाख देखि ५० लाख सम्म"@if($enterprenure && $enterprenure->ob11 == '२५ लाख देखि ५० लाख सम्म') selected @endif>२५ लाख देखि ५० लाख सम्म</option>
                                    <option value="५० लाख देखि १ करोड सम्म"@if($enterprenure && $enterprenure->ob11 == '५० लाख देखि १ करोड सम्म') selected @endif>५० लाख देखि १ करोड सम्म</option>
                                    <option value="१ करोड भन्दा माथी" @if($enterprenure && $enterprenure->ob11 == '१ करोड भन्दा माथी') selected @endif>१ करोड भन्दा माथी</option>
                                </select></span>
                        </div>
                        
                        <div class="form-group half-wid-group hwg-left">
                            <label>अचल सम्पत्ति <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob13"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्    </option>
                                    <option value="१ लाख भन्दा मुनी"@if($enterprenure && $enterprenure->ob13 == '१ लाख भन्दा मुनी') selected @endif>१ लाख भन्दा मुनी</option>
                                    <option value="१ लाख देखि ५ लाख सम्म"@if($enterprenure && $enterprenure->ob13 == '१ लाख देखि ५ लाख सम्म') selected @endif>१ लाख देखि ५ लाख सम्म</option>
                                    <option value="५ लाख देखि १० लाख सम्म"@if($enterprenure && $enterprenure->ob13 == '५ लाख देखि १० लाख सम्म') selected @endif>५ लाख देखि १० लाख सम्म</option>
                                    <option value="१० लाख देखि २५ लाख सम्म"@if($enterprenure && $enterprenure->ob13 == '१० लाख देखि २५ लाख सम्म') selected @endif>१० लाख देखि २५ लाख सम्म</option>
                                    <option value="२५ लाख देखि ५० लाख सम्म"@if($enterprenure && $enterprenure->ob13 == '२५ लाख देखि ५० लाख सम्म') selected @endif>२५ लाख देखि ५० लाख सम्म</option>
                                    <option value="५० लाख देखि १ करोड सम्म"@if($enterprenure && $enterprenure->ob13 == '५० लाख देखि १ करोड सम्म') selected @endif>५० लाख देखि १ करोड सम्म</option>
                                    <option value="१ करोड भन्दा माथी" @if($enterprenure && $enterprenure->ob13 == '१ करोड भन्दा माथी') selected @endif>१ करोड भन्दा माथी</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>पूंजीको संरचना <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob14"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="१ लाख भन्दा मुनी"@if($enterprenure && $enterprenure->ob14 == '१ लाख भन्दा मुनी') selected @endif>१ लाख भन्दा मुनी</option>
                                    <option value="१ लाख देखि ५ लाख सम्म"@if($enterprenure && $enterprenure->ob14 == '१ लाख देखि ५ लाख सम्म') selected @endif>१ लाख देखि ५ लाख सम्म</option>
                                    <option value="५ लाख देखि १० लाख सम्म"@if($enterprenure && $enterprenure->ob14 == '५ लाख देखि १० लाख सम्म') selected @endif>५ लाख देखि १० लाख सम्म</option>
                                    <option value="१० लाख देखि २५ लाख सम्म"@if($enterprenure && $enterprenure->ob14 == '१० लाख देखि २५ लाख सम्म') selected @endif>१० लाख देखि २५ लाख सम्म</option>
                                    <option value="२५ लाख देखि ५० लाख सम्म"@if($enterprenure && $enterprenure->ob14 == '२५ लाख देखि ५० लाख सम्म') selected @endif>२५ लाख देखि ५० लाख सम्म</option>
                                    <option value="५० लाख देखि १ करोड सम्म"@if($enterprenure && $enterprenure->ob14 == '५० लाख देखि १ करोड सम्म') selected @endif>५० लाख देखि १ करोड सम्म</option>
                                    <option value="१ करोड भन्दा माथी" @if($enterprenure && $enterprenure->ob14 == '१ करोड भन्दा माथी') selected @endif>१ करोड भन्दा माथी</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाइंको व्यावास्स्य संचालन गर्न कुनै प्रकारको आर्थिक चुनौती सामना गर्नु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob15"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob15 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob15 == 'छैन') selected @endif>छैन</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाइंले आफ्नो व्यवसाय संचालनको निम्ति कुनै आर्थिक सहयोग (ऋण) जुटाउने सोच बनाउनु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob16"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob16 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob16 == 'छैन') selected @endif>छैन</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>यदि छ भने तपाईंले आर्थिक पूर्वानुमान सहितका विस्तृत प्रस्ताव निर्माण गर्नु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob17"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option  value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob17 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob17 == 'छैन') selected @endif>छैन</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob18"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="कृषि" @if($enterprenure && $enterprenure->ob18 == 'कृषि') selected @endif>कृषि</option>
                                    <option value="उत्पादन तथा प्रसोधन" @if($enterprenure && $enterprenure->ob18 == 'उत्पादन तथा प्रसोधन') selected @endif>उत्पादन तथा प्रसोधन</option>
                                    <option value="शिक्षा" @if($enterprenure && $enterprenure->ob18 == 'शिक्षा') selected @endif>शिक्षा</option>
                                    <option value="पर्यटन" @if($enterprenure && $enterprenure->ob18 == 'पर्यटन') selected @endif>पर्यटन</option>
                                    <option value="सेवा उन्मुख व्यवसाय" @if($enterprenure && $enterprenure->ob18 == 'सेवा उन्मुख व्यवसाय') selected @endif>सेवा उन्मुख व्यवसाय</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob18 == 'अन्य') selected @endif>अन्य</option>
                                    
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या भोग्नु भएको छ? <span style="color:red;">*</span> </label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob19"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस्   </option>
                                    <option value="सेल्स तथा मार्केटिंग" @if($enterprenure && $enterprenure->ob19 == 'सेल्स तथा मार्केटिंग') selected @endif>सेल्स तथा मार्केटिंग</option>
                                    <option value="प्रविधि" @if($enterprenure && $enterprenure->ob19 == 'प्रविधि') selected @endif>प्रविधि</option>
                                    <option value="संचालन व्यवस्थापन" @if($enterprenure && $enterprenure->ob19 == 'संचालन व्यवस्थापन') selected @endif>संचालन व्यवस्थापन</option>
                                    <option value="मानव संसाधन" @if($enterprenure && $enterprenure->ob19 == 'मानव संसाधन') selected @endif>मानव संसाधन</option>
                                    <option value="प्रशासन" @if($enterprenure && $enterprenure->ob19 == 'प्रशासन') selected @endif>प्रशासन</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob19 == 'अन्य') selected @endif>अन्य</option>
                                    
                                </select></span>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        
                    </div>
                    नयाँ व्यवसाय गर्ने सोच भएको खण्डमा
                    <div class="col-lg-6">
                    
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाईंले आफ्नो नयाँ व्यवसायको विस्तृत योजना बनाउनु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob20"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob20 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob20 == 'छैन') selected @endif>छैन</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाईं आफ्नो नयाँ व्यवसाय दर्ता गर्ने प्रक्रियामा हुनुहुन्छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob21"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="प्रक्रियामा छु">प्रक्रियामा छु</option>
                                    <option value="प्रक्रिया नै शुरु गरेको छैन">प्रक्रिया नै शुरु गरेको छैन</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाइंले विस्तृत प्रस्ताव (आर्थिक पूर्वानूमान) सहितको प्रस्ताव निर्माण गर्नु भएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob22"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="छ" @if($enterprenure && $enterprenure->ob22 == 'छ') selected @endif>छ</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob22 == 'छैन') selected @endif>छैन</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>तपाइंको सम्भावित व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob23"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="कृषि" @if($enterprenure && $enterprenure->ob23 == 'कृषि') selected @endif>कृषि</option>
                                    <option value="प्रउत्पादन तथा प्रसोधन" @if($enterprenure && $enterprenure->ob23 == 'प्रउत्पादन तथा प्रसोधन') selected @endif>प्रउत्पादन तथा प्रसोधन</option>
                                    <option value="शिक्षा" @if($enterprenure && $enterprenure->ob23 == 'शिक्षा') selected @endif>शिक्षा</option>
                                    <option value="पर्यटन" @if($enterprenure && $enterprenure->ob23 == 'पर्यटन') selected @endif>पर्यटन</option>
                                    <option value="सेवा उन्मुख व्यवसाय" @if($enterprenure && $enterprenure->ob23 == 'सेवा उन्मुख व्यवसाय') selected @endif>सेवा उन्मुख व्यवसाय</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob23 == 'अन्य') selected @endif>अन्य</option>

                                </select></span>
                        </div>
                    </div>
                    रोजगारीको खोजीमा हुनु भएको खण्डमा
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाईं रोजगारीको खोजीमा हुनुहुन्छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob24"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="हो" @if($enterprenure && $enterprenure->ob24 == 'हो') selected @endif>हो</option>
                                    <option value="होइन" @if($enterprenure && $enterprenure->ob24 == 'होइन') selected @endif>होइन</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>यदि रोजगारीको खोजीमा हो भने, तपाइंले कुन क्षेत्रमा रोजगारीको खोजी गरिरहनुभएको छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob25"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="कृषि" @if($enterprenure && $enterprenure->ob25 == 'कृषि') selected @endif>कृषि</option>
                                    <option value="प्रउत्पादन तथा प्रसोधन" @if($enterprenure && $enterprenure->ob25 == 'प्रउत्पादन तथा प्रसोधन') selected @endif>प्रउत्पादन तथा प्रसोधन</option>
                                    <option value="शिक्षा" @if($enterprenure && $enterprenure->ob25 == 'शिक्षा') selected @endif>शिक्षा</option>
                                    <option value="पर्यटन" @if($enterprenure && $enterprenure->ob25 == 'पर्यटन') selected @endif>पर्यटन</option>
                                    <option value="सेवा उन्मुख व्यवसाय" @if($enterprenure && $enterprenure->ob25 == 'सेवा उन्मुख व्यवसाय') selected @endif>सेवा उन्मुख व्यवसाय</option>
                                    <option value="विज्ञान तथा प्रविधि" @if($enterprenure && $enterprenure->ob25 == 'विज्ञान तथा प्रविधि') selected @endif>विज्ञान तथा प्रविधि</option>
                                    <option value="सूचना तथा संचार" @if($enterprenure && $enterprenure->ob25 == 'सूचना तथा संचार') selected @endif>सूचना तथा संचार</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob25 == 'अन्य') selected @endif>अन्य</option>
                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>विगतमा रोजगारी भएको तर हाल बेरोजगार हो भने, तपाइंको आफ्नो कार्य अनुभवको विस्तृत विवरण खुलाइदिनु होला?</label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol">
                            <textarea type="text" class="wpcf7-form-control wpcf7-select form-control" name ="ob26" aria-invalid="false"row="3">{{isset($enterprenure->ob26) ?  $enterprenure->ob26 : ''}}</textarea>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>सीप तथा दक्षता <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob27"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= ""  selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="व्यवस्थापन" @if($enterprenure && $enterprenure->ob27 == 'व्यवस्थापन') selected @endif>व्यवस्थापन</option>
                                    <option value="प्रशासन" @if($enterprenure && $enterprenure->ob27 == 'प्रशासन') selected @endif>प्रशासन</option>
                                    <option value="वित्त व्यवस्थापन" @if($enterprenure && $enterprenure->ob27 == 'वित्त व्यवस्थापन') selected @endif>वित्त व्यवस्थापन</option>
                                    <option value="मानव संसाधन" @if($enterprenure && $enterprenure->ob27 == 'मानव संसाधन') selected @endif>मानव संसाधन</option>
                                    <option value="प्राविधिक" @if($enterprenure && $enterprenure->ob27 == 'प्राविधिक') selected @endif>प्राविधिक</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob27 == 'अन्य') selected @endif>अन्य</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>अनुभव अवधि <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob28"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="१ वर्ष भन्दा कम" @if($enterprenure && $enterprenure->ob28 == '१ वर्ष भन्दा कम') selected @endif>१ वर्ष भन्दा कम</option>
                                    <option value="१ देखि ३ वर्ष" @if($enterprenure && $enterprenure->ob28 == '१ देखि ३ वर्ष') selected @endif>१ देखि ३ वर्ष</option>
                                    <option value="३ देखि ५ वर्ष" @if($enterprenure && $enterprenure->ob28 == '३ देखि ५ वर्ष') selected @endif>३ देखि ५ वर्ष</option>
                                    <option value="५ देखि ७ वर्ष" @if($enterprenure && $enterprenure->ob28 == '५ देखि ७ वर्ष') selected @endif>५ देखि ७ वर्ष</option>
                                    <option value="७ वर्ष देखि १० वर्ष" @if($enterprenure && $enterprenure->ob28 == '७ वर्ष देखि १० वर्ष') selected @endif>७ वर्ष देखि १० वर्ष</option>
                                    <option value="१० वर्ष भन्दा धेरै" @if($enterprenure && $enterprenure->ob28 == '१० वर्ष भन्दा धेरै') selected @endif>१० वर्ष भन्दा धेरै</option>

                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>कार्यक्षेत्र <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob29"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                                    <option value="कृषि" @if($enterprenure && $enterprenure->ob29 == 'कृषि') selected @endif>कृषि</option>
                                    <option value="उत्पादन तथा प्रशोधन" @if($enterprenure && $enterprenure->ob29 == 'उत्पादन तथा प्रशोधन') selected @endif>उत्पादन तथा प्रशोधन</option>
                                    <option value="शिक्षा" @if($enterprenure && $enterprenure->ob29 == 'शिक्षा') selected @endif>शिक्षा</option>
                                    <option value="पर्यटन" @if($enterprenure && $enterprenure->ob29 == 'पर्यटन') selected @endif>पर्यटन</option>
                                    <option value="सेवा उन्मुख व्यवसाय" @if($enterprenure && $enterprenure->ob29 == 'सेवा उन्मुख व्यवसाय') selected @endif>सेवा उन्मुख व्यवसाय</option>
                                    <option value="बिज्ञान तथा प्रविधि" @if($enterprenure && $enterprenure->ob29 == 'बिज्ञान तथा प्रविधि') selected @endif>बिज्ञान तथा प्रविधि</option>
                                    <option value="सूचना तथा संचार" @if($enterprenure && $enterprenure->ob29 == 'सूचना तथा संचार') selected @endif>सूचना तथा संचार</option>


                                </select></span>
                        </div>
                        <div class="form-group half-wid-group hwg-left">
                            <label>के तपाइँ प्रशिक्षण, व्यवसाय विकास, परियोजनाको अध्ययन र विकासमा सहयोगको लागी निश्चित शुल्क तिर्न सक्ने अवस्थामा हुनुहुन्छ? <span style="color:red;">*</span></label><br>
                            <span class="wpcf7-form-control-wrap adv_noppol"><select required name="ob30"
                                    class="wpcf7-form-control wpcf7-select form-control " aria-invalid="false">
                                    <option value= "" selected Disabled> छनौट गर्नुहोस् </option>
                        
                                    <option value="छु" @if($enterprenure && $enterprenure->ob30 == 'छु') selected @endif>छु</option>
                                    <option value="छैन" @if($enterprenure && $enterprenure->ob30 == 'छैन') selected @endif>छैन</option>
                                    <option value="अन्य" @if($enterprenure && $enterprenure->ob30 == 'अन्य') selected @endif>अन्य</option>
                                   

                                </select></span>
                        </div>
                        <div class="form-group">
                            <label> यदि हुनुहुन्छ भने कति? <span style="color:red;">*</span> </label><br>
                        <span class="wpcf7-form-control-wrap adv_name"><input type="text" name="ob31" value="{{isset($enterprenure->ob31) ? $enterprenure->ob31 : '' }}"
                                    size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                    aria-required="true" aria-invalid="false">
                            </span>
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

<!--<script type="text/javascript" src="{{asset('frontend/js/jquery.nepaliDatePicker.js')}}"> </script>-->
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v3.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
            window.onload = function() {
                var mainInput = document.getElementById("nepali-datepicker");
               mainInput.nepaliDatePicker({
    unicodeDate: true,
    ndpYear: true,
    ndpMonth: true,
    
});
            };
        </script>
   
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
                                html += '<option value='+data[i]['name']+' data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
                            }
                           
                             $('#vdc').html(html);
                   
                 }
            });
        });
        </script>
  @endsection
 