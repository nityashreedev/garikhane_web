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
                <h4 class="header-title">Create Notice</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/notice/store/'.$notices->id) :  url('admin/notice/store') }}" id="form" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($notices->title) ? $notices->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">Notice Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value=""class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $notices->image)
                                    <img  src="{{asset('/images/notice/'.$notices->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">Notice Description</label>
                                <textarea class="form-control ckeditor" required name = "text"  rows="5" value="{{isset($notices->text) ? $notices->text : '' }}"
                                placeholder="Please enter description">{{isset($notices->text) ? $notices->text : '' }}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                             <div class="form-group mb-3">
                                <label for="simpleinput">Link</label>
                                <input type="text"name="link" value="{{isset($notices->link) ? $notices->link : ''}}"
                                    class="form-control">
                                @error('link')

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
<script>
    $("#form").submit( function(e) {
      var messageLength = CKEDITOR.instances['text'].getData().replace(/<[^>]*>/gi, '').length;
      if( !messageLength ) {
          alert( 'Please enter a message' );
          e.preventDefault();
       }
 });
</script>

@stop