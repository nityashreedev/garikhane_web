@extends('admin.layouts.app')

<style>
.thumb {
    margin: 10px 5px 0 0;
    width: 100px;
}
</style>
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create testimonial</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/testimonial/store/'.$testimonials->id) :  url('admin/testimonial/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Name <span style="color:red;">* </span></label>
                                <input type="text" required name="title" value="{{isset($testimonials->name) ? $testimonials->name : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">testimonial Image <span style="color:red;">* </span></label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($purpose) ? ($testimonials->image ? '$testimonials->image': 'required' ): ''}}   class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $testimonials->image)
                                    <img  src="{{asset('/images/testimonial/'.$testimonials->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">testimonial Text <span style="color:red;">* </span></label>
                                <textarea class="form-control ckeditor" required name = "text" required rows="5" value="{{isset($testimonials->text) ? $testimonials->text : '' }}"
                                placeholder="Please enter description">{{isset($testimonials->description) ? $testimonials->description : '' }}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Designation</label>
                                <input type="text" required name="desig" value="{{isset($testimonials->designation) ? $testimonials->designation : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Facebook</label>
                                <input type="text"  name="fb" value="{{isset($testimonials->facebook) ? $testimonials->facebook : ''}}"
                                    class="form-control">
                                @error('fb')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Instagram</label>
                                <input type="text"  name="insta" value="{{isset($testimonials->instagram) ? $testimonials->instagram : ''}}"
                                    class="form-control">
                                @error('insta')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Twitter</label>
                                <input type="text"  name="twit" value="{{isset($testimonials->twitter) ? $testimonials->twitter : ''}}"
                                    class="form-control">
                                @error('twit')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <button type="submit"
                                class="btn btn-primary">{{isset($purpose) ? 'Update' : 'Save'}}</button>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->



@stop
@section('scripts')


@stop