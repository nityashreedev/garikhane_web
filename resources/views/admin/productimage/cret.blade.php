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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">test</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">product</a></li>
                    <li class="breadcrumb-item active">Product create</li>
                </ol>
            </div>
            <h4 class="page-title">Add Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{isset($purpose) ? url('admin/product/store/'.$products->id) :  url('admin/product/store') }}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">Title<span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{isset($products) ? $products->title : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="example-email">Product Image</label>
                    <input type="file" name="image" id="fileUpload" value=""
                        {{isset($purpose) ? ($products->image ? '': 'required' ): ''}} class="form-control"
                        placeholder="Email">
                    @error('image')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <div id="thumb-output">
                    @if( isset($purpose) && $products->image)

                    <img src="{{asset('/images/products/'.$products->image)}} " class="img-fluid img-thumbnails" style="background-size: cover;
    width: 202px;">

                    @endif
                </div>

                <br>
                <div id="image-holder"> </div>
                <br>

                <div class="form-group mb-3">
                    <label for="product-description">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="description" id="product-description" rows="5"
                        placeholder="Please enter description">{{isset($products) ? $products->description : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-summary">Summary</label>
                    <textarea class="form-control" name="summary" id="product-summary" rows="3"
                        placeholder="Please enter summary">{{isset($products) ? $products->summary : '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="product-category">Status <span class="text-danger">*</span></label>
                    <select class="form-control select2" name="status[]" data-toggle="select2" multiple="multiple"
                        data-placeholder="Choose ...">
                        @foreach($status_value as $key => $value)
                        <option value="{{$key}}"
                            {{ isset($status_explode) ? (in_array($key,$status_explode) ? 'selected' : '') : $value}}>
                            {{$value}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Feature</h5>

                <div class="form-group mb-3">
                    <label style="font-size: 14px;">
                        <span style='color:navy;font-weight:bold'>Attachment Instructions :</span>
                    </label>
                    <ul>
                        <li>
                            Allowed only files with extension (jpg, png, gif)
                        </li>
                        <li>
                            Maximum number of allowed files 10 with 300 KB for each
                        </li>
                        <li>
                            you can select files from different folders
                        </li>
                    </ul>
                    <!--To give the control a modern look, I have applied a stylesheet in the parent span.-->
                    <span class="btn btn-success fileinput-button">
                        <span>Select Attachment</span>
                        <input type="file" name="files[]" value="" id="files" multiple
                            accept="image/jpeg, image/png, image/gif,"><br />
                    </span>

                    <output id="Filelist">

                        @if(isset($purpose))
                        @if($product_image)
                        @foreach($product_image as $img)
                        <div class="img-wrap" style ="display:none;">
                            <span class="close">&times;</span>
                            <img class="thumb" src="{{asset('/images/products/gallery/'.$img->image)}} " title=""
                                style="height:109px" data-id="{{$img->id}}" />
                        </div>
                        @endforeach
                        @endif
                        @endif


                    </output>

                </div>

                <div class="input-field">
                    <label class="active">Photos</label>
                    <div class="input-images-2" style="padding-top: .5rem;"></div>
                </div>

                <div class="form-group mb-3">
                    <label for="product-meta-title">Total Kitchen Room</label>
                    <input type="number" value="{{isset($products) ? $products->kitchen : '' }}" name="kitchen"
                        class="form-control" id="product-meta-title" placeholder="Enter title">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-title">Total Bed Room</label>
                    <input type="number" name="bed" value="{{isset($products) ? $products->bed : '' }}"
                        class="form-control" id="product-meta-title" placeholder="Enter title">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-keywords">Total Area SQ.ft</label>
                    <input type="number" value="{{isset($products) ? $products->area : '' }}" name="total_area"
                        class="form-control" id="product-meta-keywords" placeholder="Enter keywords">
                </div>
                <div class="form-group mb-3">
                    <label for="product-price">Total Price <span class="text-danger">*</span></label>
                    <input type="number" name="total_price" value="{{isset($products) ? $products->price : '' }}"
                        class="form-control" name="total_price" id="product-price" placeholder="Enter amount">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-keywords">Price per Area SQ.ft</label>
                    <input type="number" class="form-control"
                        value="{{isset($products) ? $products->price_per_area : '' }}" name="price_per_area"
                        id="product-meta-keywords" placeholder="Enter keywords">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Build Year</label>
                    <input type="date" name="build_year" class="form-control"
                        value="{{isset($products) ? $products->build_year : '' }}" rows="5"
                        id="product-meta-description" placeholder="Please enter description">
                </div>
                <div class="form-group mb-3">
                    <label for="product-meta-description">Location</label>
                    <input type="text" name="location" id="location"
                        value="{{isset($products) ? $products->location : '' }}" class="form-control">
                </div>
            </div> <!-- end card-box -->

        </div> <!-- end col-->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">

                <button type="submit"
                    class="btn w-sm btn-success waves-effect waves-light sumbit">{{isset($purpose) ? "Update" : "Save"}}</button>

            </div>
        </div> <!-- end col -->
    </div>
</form>

<!-- end col-->
<!-- end row -->


<!-- end row -->
@endsection

@section('scripts')
<script>
   $(document).ready(function()
   {
    let preloaded = [
                    {id: 1, src: 'https://picsum.photos/500/500?random=1'},
                    {id: 2, src: 'https://picsum.photos/500/500?random=2'},
                    {id: 3, src: 'https://picsum.photos/500/500?random=3'},
                    {id: 4, src: 'https://picsum.photos/500/500?random=4'},
                    {id: 5, src: 'https://picsum.photos/500/500?random=5'},
                    {id: 6, src: 'https://picsum.photos/500/500?random=6'},
                ];
                
                $('.input-images-2').imageUploader({
                    preloaded: preloaded,
                    imagesInputName: 'photos',
                    preloadedInputName: 'images',
                    maxSize: 2 * 1024 * 1024,
                    maxFiles: 10,
                   
                });
   });
  

</script>

<!-- <script>
    
var image = [];
image = $('.img-wrap img').map(function() {
    return $(this).data("id");
}).get();
</script> -->
@stop