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
                <h4 class="header-title">Create Entrepreneurship Process Page Details</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($process) ? route('update.entrepreneurship.page', $process->id) :  route('create.entrepreneurship.page') }}" method="POST" enctype="multipart/form-data">
                            @if($process)
                                @method('PUT')
                            @endif
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($process->title) ? $process->title : ''}}"
                                    class="form-control">
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($process) ? ($process->image ? '$process->image': 'required' ): ''}}   class="form-control">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($process) && $process->image)
                                    <img  src="{{asset('/images/background_images/'.$process->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Page Description</label>
                                <textarea class="form-control ckeditor" name = "description"  rows="5" value="{{isset($process->description) ? $process->description : '' }}"
                                placeholder="Please enter description" required>{{isset($process->description) ? $process->description : '' }}</textarea>
                                @error('description')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            
                            <button type="submit"
                                class="btn btn-primary">{{isset($process) ? 'Update' : 'Create'}}</button>
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