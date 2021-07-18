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
                <h4 class="header-title">Create Gallery Image</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/gallery/store/'.$gallerys->id) :  url('admin/gallery/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Image Caption</label>
                                <input type="text" required name="title" value="{{isset($gallerys->title) ? $gallerys->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="" {{isset($purpose) ? ($gallerys->image ? '$gallerys->image': 'required' ): ''}}   class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $gallerys->image)
                                    <img  src="{{asset('/images/gallery/'.$gallerys->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            
                            <div class="form-group mb-3 example">
                            <select class="form-control" required name="category_id">
                                <option value="">Select Image Category</option>
                               @if($image_category)
                                   @foreach($image_category as $ic)
                                     @if( isset($purpose))
                                    <option value="{{$ic->id}}" @if($gallerys &&  $gallerys->category_id == $ic->id) selected @endif>{{$ic->title}}</option>
                                    @else
                                    <option value="{{$ic->id}}" >{{$ic->title}}</option>
                                    @endif
                                   @endforeach
                               @endif
                            </select>
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