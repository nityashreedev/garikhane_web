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
@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/admin/event')}}">Event</a></li>
                    <li class="breadcrumb-item active">{{isset($event) ? 'Event Edit' : 'Event Create'}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{isset($event) ? 'Event Edit' : 'Event Create'}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{isset($purpose) ? url('admin/event/store/'.$event->id) :  url('admin/event/store') }}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" required value="{{isset($event) ? $event->title : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">Event Image</label>
                    <input type="file" name="image" id="fileUpload" value="" 
                        {{isset($purpose) ? ($event->image ? '': 'required' ): ''}} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if( isset($purpose) && $event->image)

                    <img src="{{asset('/images/event/'.$event->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>

                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="description"  rows="5" required
                        placeholder="Please enter description">{{isset($event) ? $event->description : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Location</label>
                    <input type="text" name="location" id="location" required
                        value="{{isset($event) ? $event->location : '' }}" class="form-control">
                </div>
                <!--<div class="form-group mb-3">-->
                <!--    <label for="example-email">Background Image</label>-->
                <!--    <input type="file" name="bgimage" id="bgfileUpload" value=" {{ isset($event->bgimage) ? $event->bgimage : '' }}"-->
                <!--        class="form-control"-->
                <!--        placeholder="Background Image">-->
                <!--    @error('bgimage')-->

                <!--    <div class="alert alert-danger">{{$message}}</div>-->
                <!--    @enderror-->

                <!--</div>-->
                <!--<div id="bgthumb-output">-->
                <!--    @if( isset($event->bgimage))-->

                <!--    <img src="{{asset('/images/event/bg/'.$event->bgimage)}} " class="img-fluid img-thumbnails" style="background-size: cover;-->
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
                        value="{{isset($event) ? $event->meta_title : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Meta Description</label>
                    <textarea class="form-control" name="meta_desc" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($event) ? $event->meta_description : '' }}</textarea>
                </div>
                
                
                <div class="form-group mb-3">
                    <label for="product-meta-description">Event Date</label>
                    <input type="date" name="date" class="form-control" required
                        value="{{isset($event) ? $event->date : '' }}" rows="5"
                        id="product-meta-description" placeholder="Please enter description">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Price <small><i class="info"> Please enter price of write Free </i></small></label>
                    <input type="text" name="price" id="price" required
                        value="{{isset($event) ? $event->price : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Notify Users <small><i class="info"> Sends notification to every every mobile users </i></small></label>
                    <input type="checkbox" name="notify_user" id="notification"><label>Notify</label>
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