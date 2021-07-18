@extends('admin.layouts.app')

<style>
.thumb {
    margin: 10px 5px 0 0;
    width: 100px;
}
</style>
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/admin/job')}}">job</a></li>
                    <li class="breadcrumb-item active">{{isset($job) ? 'Job Edit' : 'Job Create'}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{isset($job) ? 'Job Edit' : 'Job Create'}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@if($errors->any())
    <div class="alert alert-danger alert-block message flash-message">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <h5 style="text-align:center;">{!! implode('', $errors->all('<div>:message</div>')) !!}</h5>
    </div>
@endif

<form action="{{isset($purpose) ? url('admin/job/store/'.$job->id) :  url('admin/job/store') }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" required value="{{isset($job) ? $job->title : (old('title') ? old('title') : '' ) }}"
                        id="product-name" class="form-control">
                </div>
               
                <div class="form-group mb-3">
                    <label for="example-email">Job Image</label>
                    <input type="file" name="image" id="fileUpload" value=""
                        {{isset($purpose) ? ($job->image ? '': 'required' ): ''}} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if( isset($purpose) && $job->image)

                    <img src="{{asset('/images/job/'.$job->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>
                
                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" required name="description"  rows="5"
                        placeholder="Please enter description">{{isset($job) ? $job->description : (old('description') ? old('description') : '' ) }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Location</label>
                    <input type="text" name="location" id="location"
                        value="{{isset($job->location) ? $job->location : (old('location') ? old('location') : '' ) }}" class="form-control">
                </div>
               
                <!--<div class="form-group mb-3">-->
                <!--    <label for="example-email">Background Image</label>-->
                <!--    <input type="file" name="bgimage" id="bgfileUpload" value="{{isset($job->bgimage) ? $job->bgimage : '' }}"-->
                <!--        class="form-control"-->
                <!--        placeholder="Background Image">-->
                <!--    @error('bgimage')-->

                <!--    <div class="alert alert-danger">{{$message}}</div>-->
                <!--    @enderror-->

                <!--</div>-->
                <!--<div id="bgthumb-output">-->
                <!--    @if(isset($job->bgimage))-->

                <!--    <img src="{{asset('/images/job/bg/'.$job->bgimage)}} " class="img-fluid img-thumbnails" style="background-size: cover;-->
                <!--   width: 202px;">-->

                <!--    @endif-->
                <!--</div>-->

                <!--<br>-->
                <!--<div id="bgimage-holder"> </div>-->
                <!--<br>-->
              
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card-box">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Feature</h5>

                <div class="form-group mb-3">
                    <label for="product-meta-description">Meta Title</label>
                    <input type="text" name="meta_title" id="meta-title"
                        value="{{isset($job->meta_title) ? $job->meta_title : (old('meta_title') ? old('meta_title') : '' ) }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Meta Description</label>
                    <textarea class="form-control" name="meta_desc" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($job->meta_description) ? $job->meta_description : (old('meta_desc') ? old('meta_desc') : '' ) }}</textarea>
                </div>
                 
                <div class="form-group mb-3">
                    <label for="product-meta-salary">Salary</label>
                    <input type="text" name="salary" class="form-control"
                        value="{{isset($job->salary) ? $job->salary :  (old('salary') ? old('salary') : '' ) }}" rows="5"
                        id="product-meta-salary" placeholder="Please enter Salary">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Vacancy</label>
                    <input type="number" name="vacancy" class="form-control"
                        value="{{isset($job->vacancy) ? $job->vacancy : (old('vacancy') ? old('vacancy') : '' ) }}" rows="5"
                        id="product-meta-vacancy" placeholder="number of vacancy">
                </div>
                
                <div class="form-group mb-3">
                    <label for="product-meta-description">job Date</label>
                    <input type="date" name="date" class="form-control"
                        value="{{isset($job->date) ? $job->date : (old('date') ? old('date') : '' ) }}" rows="5"
                        id="product-meta-description" placeholder="Please enter Job Date">
                        @if ($errors->has('deadline'))
                            <span class="help-block"> {{ $errors->first('deadline') }} </span>
                        @endif
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">job Deadline</label>
                    <input type="date" name="deadline" class="form-control"
                        value="{{isset($job->deadline) ? $job->deadline : (old('deadline') ? old('deadline') : '' ) }}" rows="5"
                        id="product-meta-deadline" placeholder="Please enter Job Deadline">
                        @if ($errors->has('deadline'))
                            <span class="help-block"> {{ $errors->first('deadline') }} </span>
                        @endif
                </div>

                <div class="form-group mb-3">
                    <input type="checkbox" name="notify_users">
                    <label for="product-meta-description">Notify Users</label>       
                </div>
               
                <div class="text-center mb-3">

                    <button type="submit"
                        class="btn w-sm btn-success waves-effect waves-light sumbit">{{isset($purpose) ? "Update" : "Save"}}</button>
    
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col-->
        
    </div>
   
</form>



@stop
@section('scripts')


@stop