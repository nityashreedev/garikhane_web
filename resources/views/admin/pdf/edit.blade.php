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
                <h4 class="header-title">Edit Pdf</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">
                      
                        <form action="{{isset($purpose) ? url('admin/pdf/store/'.$pdf->id) :  url('admin/pdf/store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Title</label>
                                <input type="text" required name="title" value="{{isset($pdf->title) ? $pdf->title : ''}}"
                                    class="form-control">
                                @error('title')

                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                           
                            <div class="form-group mb-3">
                                <label for="example-email">File</label>
                                 {{$pdf->file}}
                                <input type="file" name="file" 
                                    value="{{$pdf->file}}" class="form-control"
                                    placeholder="File Upload">
                                @error('file')

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