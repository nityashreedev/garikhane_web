@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> आवेदक फारम</h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>आवेदक फारम</a></li>
            </ul>
        </div>
    </div>
 @include('admin.flashmessage.message')
    <!--=============================== Contact With Us =================-->
    <div class="main-container-1">
        <div class="container">
            <h2 class="text-center">{{$job_title->title}}</h2>
            <div class="row">
                <form action="{{url('apply/job/store') }}" id="form" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cover Letter</label>
                        <textarea class="form-control ckeditor" name="text"  rows="5" value="{{ old('text', '') }}"
                        placeholder="Please enter description"></textarea>
                      </div>
                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                      <input type="hidden" name="job_id" value="{{ request()->get('job_id') }}">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Cv Upload</label>
                        <input type="file" name="file" id="file" value=""  required class="form-control"
                        placeholder="Cv Upload">
                      </div>
                     
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('panel/assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>
    $("#form").submit( function(e) {
      var messageLength = CKEDITOR.instances['text'].getData().replace(/<[^>]*>/gi, '').length;
      if( !messageLength ) {
          alert( 'Please enter a message' );
          e.preventDefault();
       }
 });
</script>
    @endsection