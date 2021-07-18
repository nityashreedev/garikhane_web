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
                <h4 class="header-title">Edit FAQ</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/faq/store/'.$faq->id) :  url('admin/faq/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Question</label>
                                <input id="action_name" name="question" type="text" placeholder="" class="form-control input-md" value="{{isset($faq->question) ? $faq->question : ''}}">
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="text">Answer</label>
                                <textarea id="action_name" row="50" name="ans" type="text" placeholder="" class="ckeditor form-control input-md" value="{{isset($faq->ans) ? $faq->ans : ''}}">{{isset($faq->ans) ? $faq->ans : ''}}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">file</label>
                                <input type="file" name="file" id="fileUpload"
                                    value="" {{isset($purpose) ? ($faq->file ? $faq->file: '' ): ''}}   class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $faq->file)
                                    <img  src="{{asset('/images/faq/'.$faq->file)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            
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