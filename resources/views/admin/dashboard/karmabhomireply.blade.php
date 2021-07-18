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
                <h4 class="header-title">Reply User</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                    <form action="{{url('admin/form/karmabhomi/reply/message')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">User Name</label>
                                <input type="text" required name="title" readonly value="{{$karmabhomi->user->fname}}"
                                    class="form-control">
                                @error('title')
                             
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <input type="hidden" name="id" value="{{$karmabhomi->id}}">
                            <div class="form-group mb-3">
                                <label for="reply">Reply Text <span style="color:red;font-size: 39px;">* </span></label>
                                <textarea class="form-control" name ="comment" id="product-description" placeholder="NA if not applicable" required="required">{{isset($karmabhomi->reply) ? $karmabhomi->reply : '' }}</textarea>
                                @error('comment')

                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <button type="submit"
                                class="btn btn-primary">Update</button>
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