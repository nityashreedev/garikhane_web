@extends('admin.layouts.app')
@section('content')
<style>
.note-toolbar {
    position: relative;
    z-index: 50;
}

.card-box {

    margin-bottom: 70px;

}

ul#imgList {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}
</style>
@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/admin/project/idea/bank')}}">Project Idea</a></li>
                    <li class="breadcrumb-item active">{{isset($projectidea) ? 'Project Idea Edit' : 'Project Idea Create'}}</li>
                </ol>
            </div>
            <h4 class="page-title">{{isset($projectidea) ? 'Project Idea Edit' : 'Project Idea Create'}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{isset($purpose) ? url('admin/project/idea/bank/store/'.$projectidea->id) :  url('admin/project/idea/bank/store') }}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Name of Project<span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{isset($projectidea->name) ? $projectidea->name : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-name">Sector<span class="text-danger">*</span></label>
                    <input type="text" name="sector" value="{{isset($projectidea->sector) ? $projectidea->sector : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">projectidea Image</label>
                    <input type="file" name="image" id="fileUpload" value=""
                        {{isset($purpose) ? ($projectidea->image ? '': '' ): ''}} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if( isset($purpose) && $projectidea->image)

                    <img src="{{asset('/images/projectidea/'.$projectidea->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
                   width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>

                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="description"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea) ? $projectidea->description : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-description">Project Components/Technology <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="project_component"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea->project_component) ? $projectidea->project_component : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-description">Market Opportunity <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="market_opprotunity"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea->market_opportunity) ? $projectidea->market_opportunity : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-description">Successful Examples :  (if any) <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="success_example"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea->success_example) ? $projectidea->success_example : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-description">Development/Investment Modality <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="d_i_modality"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea->d_i_modality) ? $projectidea->d_i_modality : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-description">Reference <span class="text-danger">*</span></label>
                    <textarea class="form-control ckeditor" name="reference"  rows="5"
                        placeholder="Please enter description">{{isset($projectidea->reference) ? $projectidea->reference : '' }}</textarea>
                </div>
                
                <!--<div class="form-group mb-3">-->
                <!--    <label for="example-email">Background Image</label>-->
                <!--    <input type="file" name="bgimage" id="bgfileUpload" value=" {{ isset($projectidea->bgimage) ? $projectidea->bgimage : '' }}"-->
                <!--        class="form-control"-->
                <!--        placeholder="Background Image">-->
                <!--    @error('bgimage')-->

                <!--    <div class="alert alert-danger">{{$message}}</div>-->
                <!--    @enderror-->

                <!--</div>-->
                <!--<div id="bgthumb-output">-->
                <!--    @if( isset($projectidea->bgimage))-->

                <!--    <img src="{{asset('/images/projectidea/bg/'.$projectidea->bgimage)}} " class="img-fluid img-thumbnails" style="background-size: cover;-->
                <!--   width: 202px;">-->

                <!--    @endif-->
                <!--</div>-->

                <!--<br>-->
                <!--<div id="bgimage-holder"> </div>-->
                <!--<br>-->
               
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card-box">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Feature</h5>

                <div class="form-group mb-3">
                    <label for="product-meta-description">Meta Title</label>
                    <input type="text" name="meta_title" id="meta-title"
                        value="{{isset($projectidea) ? $projectidea->meta_title : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Meta Description</label>
                    <textarea class="form-control" name="meta_desc" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($projectidea) ? $projectidea->meta_description : '' }}</textarea>
                </div>
            
                <div class="form-group mb-3">
                    <label for="product-meta-description">Location</label>
                    <input type="text" name="location" id="location"
                        value="{{isset($projectidea) ? $projectidea->location : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Project Cost <small><i class="info">  </i></small></label>
                    <input type="number" name="project_cost" id="prices"
                        value="{{isset($projectidea->project_cost) ? $projectidea->project_cost : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Estimate<small><i class="info">  </i></small></label>
                    <input type="number" name="irr" id="price"
                        value="{{isset($projectidea->irr) ? $projectidea->irr : '' }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="pdf">PDF</label>
                    <input type="file" name="pdf" id="pdf" value="{{isset($purpose) ? ($projectidea->pdf ? '': '' ): ''}}"
                        {{isset($purpose) ? ($projectidea->pdf ? '': '' ): ''}} class="form-control"
                        placeholder="Pdf">
                    @error('pdf')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="form-group mb-3 example">
                    <select class="form-control" required name="project_id">
                        <option value="">Select Project</option>
                      <option value="0">Project idea bank</option>
                      <option value="1" >Ready for investment</option>
                      <option value="2">Training Stage projects</option>
                      <option value="3" >Planning for business stage projects</option>
                      <option value="4">Projects that have  reached banks and financial institutions</option>
                    </select>
                  </div>
               
            </div> <!-- end card-box -->
            <div class="text-center mb-3">

                <button type="submit"
                    class="btn w-sm btn-success waves-effect waves-light sumbit">{{isset($purpose) ? "Update" : "Save"}}</button>

            </div>
        </div> <!-- end col-->
        
    </div>
   
</form>

<!-- end col-->
<!-- end row -->


<!-- end row -->
@endsection

@section('scripts')

@stop