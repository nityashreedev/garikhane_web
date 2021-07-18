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
                    <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
               
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div>
            <h4 class="page-title">Setting</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{url('admin/setting/store/'.$setting->id)}}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{isset($setting->title) ? $setting->title : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">About Image</label>
                    <input type="file" name="image" id="fileUpload" value=""
                        {{ $setting->image ? '': '' }} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if($setting->image)

                    <img src="{{asset('/images/setting/'.$setting->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>

                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="description" rows="5"
                        placeholder="Please enter description">{{isset($setting->description) ? $setting->description : '' }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="product-description">Caption <span class="text-danger">*</span></label>
                    <textarea class="form-control note-editor note-frame card product-description" name="caption" id="product-caption" rows="6"
                        placeholder="Please enter description">{{isset($setting->caption) ? $setting->caption : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-name">Address<span class="text-danger">*</span></label>
                    <input type="text" name="address" value="{{isset($setting->address) ? $setting->address : '' }}"
                        id="product-address" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">Background Image</label>
                    <input type="file" name="bgimage" id="bgfileUpload" value=""
                        {{ $setting->bgimage ? $setting->bgimage : '' }} class="form-control"
                        placeholder="Background Image">
                    @error('bgimage')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="bgthumb-output">
                    @if( $setting->bgimage)

                    <img src="{{asset('/images/setting/bg/'.$setting->bgimage)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="bgimage-holder"> </div>
                <br>
             
               
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card-box">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Feature</h5>

                <div class="form-group mb-3">
                    <label for="product-meta-description">Meta Title</label>
                    <input type="text" name="meta_title" id="meta-title"
                        value="{{isset($setting->meta_title) ? $setting->meta_title : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Meta Description</label>
                    <textarea class="form-control" name="meta_desc" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($setting->meta_description) ? $setting->meta_description : '' }}</textarea>
                </div>
                
                
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Social Link</h5>
                       
                <div class="form-group mb-3">
                    <label for="product-meta-description">facebook</label>
                    <input type="text" name="facebook" id="facebook"
                        value="{{isset($setting->facebook) ? $setting->facebook : '' }}" class="form-control" placeholder="https://www.facebook.com/profile_name">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Twitter</label>
                    <input type="text" name="twitter" id="twitter"
                        value="{{isset($setting->twitter) ? $setting->twitter : '' }}" class="form-control" placeholder="https://www.twitter.com/profile_name">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Instagram</label>
                    <input type="text" name="instagram" id="instagram"
                        value="{{isset($setting->instagram) ? $setting->instagram : '' }}" class="form-control" placeholder="https://www.instagram.com/profile">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">LinkedIn</label>
                    <input type="text" name="linkedin" id="linkedin"
                        value="{{isset($setting->linkedin) ? $setting->linkedin : '' }}" class="form-control" placeholder="https://www.linkedin.com/in/profile">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Youtube</label>
                    <input type="text" name="youtube" id="youtube"
                        value="{{isset($setting->youtube) ? $setting->youtube : '' }}" class="form-control" placeholder="https://www.youtube.com/channel/.....">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Mail Address</label>
                    <input type="text" name="gmail" id="gmail"
                        value="{{isset($setting->gmail) ? $setting->gmail : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Phone Number</label>
                    <input type="text" name="phone" id="phone"
                        value="{{isset($setting->phone) ? $setting->phone : '' }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="product-meta-description">WhatsApp Number</label>
                    <input type="text" name="whatsapp_number" id="office_time"
                        value="{{isset($setting->whatsapp_number) ? $setting->whatsapp_number : '' }}" class="form-control">
                    @error('whatsapp_number')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="product-meta-description">Office Time</label>
                    <input type="text" name="office_time" id="office_time"
                        value="{{isset($setting->office_time) ? $setting->office_time : '' }}" class="form-control">

                    @error('office_time')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
            </div> <!-- end card-box -->
            <div class="text-center mb-3">

                <button type="submit"
                    class="btn w-sm btn-success waves-effect waves-light sumbit">Update</button>

    </div>
        </div> <!-- end col-->
    </div>
   
          
    
</form>
</div>
<!-- end col-->
<!-- end row -->


<!-- end row -->
@endsection

@section('scripts')

@stop