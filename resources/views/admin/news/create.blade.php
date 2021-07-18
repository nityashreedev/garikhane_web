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
                <h4 class="header-title">Create News</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/news/store/'.$news->id) :  url('admin/news/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($news->title) ? $news->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="example-email">News Image</label>
                                <input type="file" name="image" id="fileUpload"
                                    value="{{isset($purpose) ? ($news->image ? '$news->image': 'required' ): ''}}"    class="form-control"
                                    placeholder="Email">
                                @error('image')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div id="thumb-output">
                                @if( isset($purpose) && $news->image)
                                    <img  src="{{asset('/images/news/'.$news->image)}} "
                                                class="img-fluid img-thumbnails">
                                
                                @endif
                                </div>
                            
                            <br>
                            <div id="image-holder"> </div>
                            <br>
                            <div class="form-group mb-3">
                                <label for="text">News Description</label>
                                <textarea class="form-control ckeditor" name = "text"  rows="5" value="{{isset($news->text) ? $news->text : '' }}"
                                placeholder="Please enter description">{{isset($news->text) ? $news->text : '' }}</textarea>
                                @error('text')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Link</label>
                                <input type="text"name="link" value="{{isset($news->link) ? $news->link : ''}}"
                                    class="form-control">
                                @error('link')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Publish Date</label>
                                <input type="date"name="publish_date" value="{{isset($news->publish_date) ? $news->publish_date : ''}}"
                                    class="form-control">
                                @error('publish_date')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3 example">
                            <select class="form-control" required name="type">
                                <option value="">Select Type</option>
                               @if( isset($purpose))
                                <option value="news" @if($news->type == 'news')selected @endif>News</option>
                              <option value="press" @if($news->type == 'press')selected @endif>Press Release</option>
                                @else
                                <option value="news">News</option>
                              <option value="press" >Press Release</option>
                                @endif
                              
                              
                            </select>
                          </div>
                            <div class="form-group mb-3">
                                <input type="checkbox" name="notify_users">
                                <label for="simpleinput">Notify Users</label>    
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