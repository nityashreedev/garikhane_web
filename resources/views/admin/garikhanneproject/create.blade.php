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
                <h4 class="header-title">Create our Projects</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/garikhanne/project/store/'.$garikhanneproject->id) :  url('admin/garikhanne/project/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Name</label>
                                <input type="text" required name="name" value="{{isset($garikhanneproject->title) ? $garikhanneproject->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email"> Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($purpose) ? ($garikhanneproject->image ? '$garikhanneproject->image': 'required' ): ''}}   class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $garikhanneproject->image)
                                    <img  src="{{asset('/images/garikhanneproject/'.$garikhanneproject->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Project Description</label>
                                <textarea class="form-control ckeditor" name = "description"  rows="5" value="{{isset($garikhanneproject->description) ? $garikhanneproject->description : '' }}"
                                placeholder="Please enter description">{{isset($garikhanneproject->description) ? $garikhanneproject->description : '' }}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="text">Project Details</label>
                                <textarea class="form-control ckeditor" name = "details"  rows="5" value="{{isset($garikhanneproject->details) ? $garikhanneproject->details : '' }}"
                                placeholder="Please enter description">{{isset($garikhanneproject->details) ? $garikhanneproject->details : '' }}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
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