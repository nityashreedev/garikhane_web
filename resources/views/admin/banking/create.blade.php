@extends('admin.layouts.app')
@section('content')
<style>
.note-toolbar {
    position: relative;
    z-index: 50;
}

.card-box {

    margin-bottom: 70px;

}

ul#imgList {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}
</style>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('banking')}}">banking</a></li>
                    <li class="breadcrumb-item active">{{isset($banking) ? 'banking Edit' : 'banking Create'}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{isset($banking) ? 'banking Edit' : 'banking Create'}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{isset($purpose) ? url('admin/banking/store/'.$banking->id) :  url('admin/banking/store') }}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" required value="{{isset($banking) ? $banking->title : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">banking Image</label>
                    <input type="file" name="image" id="fileUpload" value=""
                        {{isset($purpose) ? ($banking->image ? '': 'required' ): ''}} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if( isset($purpose) && $banking->image)

                    <img src="{{asset('/images/banking/'.$banking->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>

                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" required name="description"  rows="5"
                        placeholder="Please enter description">{{isset($banking) ? $banking->description : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Location</label>
                    <input type="text" name="location" id="location"
                        value="{{isset($banking) ? $banking->location : '' }}" class="form-control">
                </div>
                <!--<div class="form-group mb-3">-->
                <!--    <label for="example-email">Background Image</label>-->
                <!--    <input type="file" name="bgimage" id="bgfileUpload" value=" {{ isset($banking->bgimage) ? $banking->bgimage : '' }}"-->
                <!--        class="form-control"-->
                <!--        placeholder="Background Image">-->
                <!--    @error('bgimage')-->

                <!--    <div class="alert alert-danger">{{$message}}</div>-->
                <!--    @enderror-->

                <!--</div>-->
                <!--<div id="bgthumb-output">-->
                <!--    @if( isset($banking->bgimage))-->

                <!--    <img src="{{asset('/images/banking/bg/'.$banking->bgimage)}} " class="img-fluid img-thumbnails" style="background-size: cover;-->
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
                        value="{{isset($banking) ? $banking->meta_title : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Meta Description</label>
                    <textarea class="form-control" name="meta_desc" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($banking) ? $banking->meta_description : '' }}</textarea>
                </div>
                
                
                <div class="form-group mb-3">
                    <label for="product-meta-description">banking Date</label>
                    <input type="date" name="date" class="form-control"
                        value="{{isset($banking) ? $banking->date : '' }}" rows="5"
                        id="product-meta-description" placeholder="Please enter description">
                </div>
               
            </div> <!-- end card-box -->
            <div class="text-center mb-3">

                <button type="submit"
                    class="btn w-sm btn-success waves-effect waves-light sumbit">{{isset($purpose) ? "Update" : "Save"}}</button>

            </div>
        </div> <!-- end col-->
        
    </div>
   
</form>

<!-- end col-->
<!-- end row -->


<!-- end row -->
@endsection

@section('scripts')

@stop