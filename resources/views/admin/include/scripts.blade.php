<!-- Vendor js -->
<script src="{{asset('panel/assets/js/vendor.min.js')}}"></script>

<!-- Plugins js-->
<script src="{{asset('panel/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
{{-- <script src="{{asset('panel/assets/libs/flot-charts/jquery.flot.js')}}"></script> --}}
{{-- <script src="{{asset('panel/assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
<script src="{{asset('panel/assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
<script src="{{asset('panel/assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script> --}}

<!-- Dashboar 1 init js-->
{{-- <script src="{{asset('panel/assets/js/pages/dashboard-1.init.js')}}"></script> --}}

<!-- App js-->
<script src="{{asset('panel/assets/js/app.min.js')}}"></script>
{{-- <script src="{{asset('panel/assets/libs/datatables/jquery.dataTables.min.js')}}"></script> --}}
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('panel/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
{{-- <script src="{{asset('panel/assets/libs/datatables/dataTables.responsive.min.js')}}"></script> --}}
<script src="{{asset('panel/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/pdfmake/pdfmake.min.js.map')}}"></script>
<script src="{{asset('panel/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('panel/assets/libs/pdfmake/vfs_fonts.js')}}"></script>

<script src="{{asset('panel/assets/js/menu/menu.js')}}"></script>
<script src="{{asset('panel/assets/js/menu/scripts2.js')}}"></script>

<script type="text/javascript" src="{{asset('panel/assets/js/image-uploader.min.js')}}"></script>
<script src="{{asset('panel/assets/js/pages/datatables.init.js')}}"></script>
{{--<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>--}}
<script src="{{asset('panel/assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<!-- App js -->
<script src="{{asset('panel/assets/js/app.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!-- Summernote js -->
<script src="{{asset('panel/assets/libs/summernote/summernote-bs4.min.js')}}"></script>
<!-- Select2 js-->

<!-- Dropzone file uploads-->
<script src="{{asset('panel/assets/libs/dropzone/dropzone.min.js')}}"></script>

<!-- Init js -->
<script src="{{asset('panel/assets/js/pages/add-product.init.js')}}"></script>

<script src="{{asset('panel/assets/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('panel/assets/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('panel/assets/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('panel/assets/libs/dropify/dropify.min.js')}}"></script>
<!-- Magnific Popup-->
<script src="{{asset('panel/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- Gallery Init-->
<script src="{{asset('panel/assets/js/pages/gallery.init.js')}}"></script>

        <!-- Init js-->
        <script src="{{asset('panel/assets/js/pages/form-fileuploads.init.js')}}"></script>
<script>
$(".select2").select2();



Dropzone.options.myAwesomeDropzone = {
    addRemoveLinks: true,
    dictDefaultMessage: false,
    dictRemoveFile: "<i class='fe-x-square'></i>"
    
};
</script>
{{-- <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script> --}}
              

<script>
   
$(document).ready(function() {
    $('.input-images-1').imageUploader();

    $("#fileUpload").on('change', function () {

if (typeof (FileReader) != "undefined") {

    var image_holder = $("#image-holder");
    image_holder.empty();

    var reader = new FileReader();
    reader.onload = function (e) {
        $('div#thumb-output > img').remove();
        $("<img />", {
            "src": e.target.result,
            "class": "thumb-image",
            "style":"width: 400px;"
        }).appendTo(image_holder);


    }
    image_holder.show();
    reader.readAsDataURL($(this)[0].files[0]);
} else {
    alert("This browser does not support FileReader.");
}
});
$("#bgfileUpload").on('change', function () {

if (typeof (FileReader) != "undefined") {

    var bgimage_holder = $("#bgimage-holder");
    bgimage_holder.empty();

    var reader = new FileReader();
    reader.onload = function (e) {
        $('div#thumb-output > img').remove();
        $("<img />", {
            "src": e.target.result,
            "class": "thumb-image",
            "style":"width: 400px;"
        }).appendTo(bgimage_holder);


    }
    bgimage_holder.show();
    reader.readAsDataURL($(this)[0].files[0]);
} else {
    alert("This browser does not support FileReader.");
}
});
});

</script>
<script type="text/javascript">




</script>
