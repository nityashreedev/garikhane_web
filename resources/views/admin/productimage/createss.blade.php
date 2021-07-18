@extends('admin.layouts.app')
@section('content')
<form
    action="{{isset($purpose) ? url('admin/product-image/store/'.$products->id) :  url('admin/product-image/store') }}"
    method="post">
    {{csrf_field()}}
    <h1> upload files </h1>
    <input type="file" name="files[]" id ="files" multiple>
    <button type="submit" class="btn btn-primary submits">{{isset($purpose) ? "Update" : "Save"}}</button>
</form>

<div class="card">
    <div class="card-header">
        <h5>File Upload</h5>
    </div>
    <div class="card-block">
        <form
            action="{{isset($purpose) ? url('admin/product-image/store/'.$products->id) :  url('admin/product-image/store') }}"
            class="dropzone" id="myAwesomeDropzone">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="file" id="files" name="files[]" multiple />
            {{csrf_field()}}


        </form>
        <div class="text-center m-t-20">
            <button class="btn btn-primary submit">Upload Now</button>
        </div>
    </div>
</div>





@endsection()
@section('scripts')
<script>
$(document).ready(function() {

    $('.submit').click(function() {


        var form_data= new FormData();
        var fd = [];


        // Read selected files
        
        var totalfiles = $('.dz-image').find('img').length;
        console.log( $('.dz-image').find('img').length);
        $('.dz-image').each(function(){
            fd.push($(this).find('img').attr('alt'));
            form_data.append("files[]",$(this).find('img').attr('alt'));
           
        })
       
    console.log(fd);

        // AJAX request
        $.ajax({
            url: "{{url('admin/product-image/store')}}",
            type: 'post',
            data: form_data,
            contentType: false,
            dataType: 'json',
            cache: false,
            processData:false,

            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            success: function(response) {

console.log('helo')
                for (var index = 0; index < response.length; index++) {
                    var src = response[index];

                    // Add img element in <div id='preview'>
                    $('#preview').append('<img src="' + src +
                        '" width="200px;" height="200px">').append("_token",
                        "{{ csrf_token() }}");
                }

            },
            error:function()
            {
                console.log('eoor');
            }
        });

    });

});
</script>
@stop