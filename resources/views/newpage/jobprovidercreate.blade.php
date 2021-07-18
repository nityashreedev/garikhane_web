@extends('layouts.frontendlayout')
@section('content')
<style>
    .form-cont {
    padding: 50px 0;
}
input.form-control {
    color: #000;
}
textarea.form-control.ckeditor {
    color: #000;
}
</style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1>{{isset($purpose) ? 'Edit Job' : 'Add New Job'}}</h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li><a>{{isset($purpose) ? 'Edit Job' : 'Add New Job'}}</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact With Us =================-->
    <section class="form-cont">
        <div class="container">
            <div class="row">
                @php
                $today_date = \Carbon\Carbon::now();
               
                @endphp
                <form action="{{isset($purpose) ? url('job/provider/create-job/update/'.$job->id) :  url('job/provider/create-job/store') }}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
                    <div class="col-md-12">
                        <div class="form-group">
                         <label>Title<span class="text-danger">*</span></label>
                         <input type="title" value="{{isset($job->title) ? $job->title : '' }}" name="title" class="form-control" required placeholder="Title">
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label>Image<span class="text-danger">*</span></label>
                         <input type="file" name="image" value="{{isset($job->image) ? $job->image : '' }}" id="fileUpload" value="" class="form-control" placeholder="Image">
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label>Location<span class="text-danger">*</span></label>
                         <input type="text" name="location" value="{{isset($job->location) ? $job->location : '' }}" required class="form-control" placeholder="Location">
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label>Salary<span class="text-danger">*</span></label>
                         <input type="text" name="salary" value="{{isset($job->salary) ? $job->salary : '' }}" required class="form-control" placeholder="Salary">
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label>No. of Vacancy<span class="text-danger">*</span></label>
                         <input type="number"  name="vacancy" value="{{isset($job->vacancy) ? $job->vacancy : '' }}" required class="form-control" placeholder="Vacancy">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>Start Date<span class="text-danger">*</span></label>
                         <input type="date" name="date" min="{{$today_date}}"  pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])/(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])/(?:30))|(?:(?:0\[13578\]|1\[02\])-31))"  required value="{{isset($job->date) ? $job->date : '' }}" class="form-control" placeholder="Date">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label>End Date<span class="text-danger">*</span></label>
                         <input type="date" name="deadline"  pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])/(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])/(?:30))|(?:(?:0\[13578\]|1\[02\])-31))"  required value="{{isset($job->deadline) ? $job->deadline : '' }}" class="form-control" placeholder="Date">
                     @if ($errors->has('deadline'))
                            <span class="help-block"> {{ $errors->first('deadline') }} </span>
                        @endif
                     </div>
                 </div>
                 <div class="col-md-12">
                     <div class="form-group">
                         <label>Description<span class="text-danger">*</span></label>
                         <textarea class="form-control ckeditor" required name="description"   rows="5" placeholder="Please enter description">{{isset($job->description) ? $job->description : '' }}</textarea>
                     </div>
                 </div>
                 <div class="col-md-12">
                     <div class="form-group">
                        <button type="submit"
                        class="btn w-sm btn-success waves-effect waves-light sumbit">Save</button>
                    </div>
                </div>
             </form>
         </div>
     </div>
 </section>
</div>
 <script src="{{asset('panel/assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
@endsection