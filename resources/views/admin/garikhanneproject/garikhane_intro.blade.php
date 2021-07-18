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
                <h4 class="header-title">Create Garikhane Page Details</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($garikhane_page) ? route('update.garikhane.page', $garikhane_page->id) :  route('create.garikhane.page') }}" method="POST" enctype="multipart/form-data">
                            @if($garikhane_page)
                                @method('PUT')
                            @endif
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($garikhane_page->title) ? $garikhane_page->title : ''}}"
                                    class="form-control">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($garikhane_page) ? ($garikhane_page->image ? '$garikhane_page->image': 'required' ): ''}}   class="form-control">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($garikhane_page) && $garikhane_page->image)
                                    <img  src="{{asset('/images/background_images/'.$garikhane_page->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Project Description</label>
                                <textarea class="form-control ckeditor" name = "description"  rows="5" value="{{isset($garikhane_page->description) ? $garikhane_page->description : '' }}"
                                placeholder="Please enter description" required>{{isset($garikhane_page->description) ? $garikhane_page->description : '' }}</textarea>
                                @error('description')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            
                            <button type="submit"
                                class="btn btn-primary">{{isset($garikhane_page) ? 'Update' : 'Create'}}</button>
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