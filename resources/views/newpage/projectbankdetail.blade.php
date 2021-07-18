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
.aside-bar-downloa {
    font-size: 15px;
    height: 175px;
}
.aside-bar-downloa span {
    display: block;
    font-size: 50px;
    padding-bottom: 15px;
}

.aside-bar-downloa {
    text-align: center;
    padding: 15px 0;
}
.aside-bar-downloa {
    background: #143c65;
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
        <h1>{{$projectideabank->name}}</h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
            <li><a href="{{url('project/idea/bank')}}">PROJECT IDEA BANK</a></li>
            <li><a>{{$projectideabank->name}}</a></li>

        </ul>
    </div>
</div>
<div class="page page-news page-single">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12"> <div class="main-post">
                    <!--====================== Main Post =======================-->
                    <div class="post-single">
                        <div class="person-card post-single-cont">
                            <div class="person-content">

                                <p style="text-align:justify">{!! substr($projectideabank->description,0,20000) !!}</p>

                                
 <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="nav-item active">
                <a class="nav-link " data-toggle="tab" href="#duck2" role="tab" aria-controls="duck2" aria-selected="true">Components/Technology
</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " data-toggle="tab" href="#chicken2" role="tab" aria-controls="chicken2" aria-selected="false">Market Opportunity
</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kiwi2" role="tab" aria-controls="kiwi2" aria-selected="false">Development/Investment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#emu2" role="tab" aria-controls="emu2" aria-selected="false">Successful Examples</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#emu3" role="tab" aria-controls="emu3" aria-selected="false">Reference</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#emu4" role="tab" aria-controls="emu4" aria-selected="false">Download</a>
              </li>
            </ul>
            
            <div class="tab-content mt-3">
                <div class="tab-pane active" id="duck2" role="tabpanel" aria-labelledby="duck-tab">
                    <div class="inner-about-us-con">
                         <p style="text-align:justify">{!! substr($projectideabank->project_component,0,20000) !!}</p>
                    </div>
                 </div>
                 <div class="tab-pane " id="chicken2" role="tabpanel" aria-labelledby="chicken-tab">
                   <div class="inner-about-us-con">
                         <p style="text-align:justify">{!! substr($projectideabank->market_opportunity,0,20000) !!}</p>
                    </div>
                </div>
                <div class="tab-pane" id="kiwi2" role="tabpanel" aria-labelledby="kiwi-tab">
                   <div class="inner-about-us-con">
                         <p style="text-align:justify">{!! substr($projectideabank->d_i_modality,0,20000) !!}</p>
                    </div>
                </div>
                <div class="tab-pane" id="emu2" role="tabpanel" aria-labelledby="emu-tab">
                   <div class="inner-about-us-con">
                         <p style="text-align:justify">{!! substr($projectideabank->success_example,0,20000) !!}</p>
                    </div>
                </div>
                <div class="tab-pane" id="emu3" role="tabpanel" aria-labelledby="emu3-tab">
                    <div class="inner-about-us-con">
                        <p style="text-align:justify">{!! substr($projectideabank->reference,0,20000) !!}</p>
                    </div>
                </div>
                <div class="tab-pane" id="emu4" role="tabpanel" aria-labelledby="emu4-tab">
                    @if($projectideabank->idea)
                    <div class="inner-about-us-con" style="margin: 10px 17px;">
                        <div class="row">
                                                           <div class="col-md-3">
                        <div class="aside-bar-downloa">
                            <a href="{{ url('project/idea/bank/pdf/'.$projectideabank->id) }}" target="0">
                                <span> <svg class="svg-inline--fa fa-file-download fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path></svg><!-- <i class="fas fa-file-download"></i> Font Awesome fontawesome.com --></span>
                                Download PDF
                            </a>
                        </div>
                   </div>
                     
                                                   
                </div>
                    </div>
                    @else
                    <div class="inner-about-us-con">
                        <p>No File Available for Download </p>
                        </div>
                        @endif
                </div>
            </div>
          </div>
        </div>
                            </div>

</div>
                       
                       
                    </div> <!-- /.post-single -->
                </div> <!-- /.main-post -->
            </div> <!-- /.col-lg-8 col-md-8 -->

        </div> <!--  /.row -->
    </div> <!--  /.container -->

@endsection