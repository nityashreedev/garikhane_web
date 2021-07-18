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
                <h4 class="header-title">Create Digital Library</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/digital-library/store/'.$digital->id) :  url('admin/digital-library/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($digital->title) ? $digital->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">File</label>
                                <input type="file" name="file" 
                                    value="" {{isset($purpose) ? ($digital->file ? '$digital->file': 'required' ): ''}}   class="form-control"
                                    placeholder="File">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($purpose) ? ($digital->image ? '$digital->image': 'required' ): ''}}   class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $digital->image)
                                    <img  src="{{asset('/images/digitallibrary/'.$digital->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Banner Text</label>
                                <textarea class="form-control ckeditor" name = "text"  rows="5" value="{{isset($digital->text) ? $digital->text : '' }}"
                                placeholder="Please enter description">{{isset($digital->text) ? $digital->text : '' }}</textarea>
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