@extends('admin.layouts.app')


    <link href="{{ asset('panel/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('panel/assets/libs/select2/select2-bootstrap.min.css')}}" rel="stylesheet"
    type="text/css" />


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create Location</h4>
                

            </div>
            

            <div class="row">
                <div class="col-lg-6">
                <form action="{{url('admin/location/store/'.$locations->id )}}"
                      onkeypress="return event.keyCode != 13;" method="post"
                      enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group mb-3">
                        <label> Name<i><span class="astrick">*</span></i></label>
                        <input type="text" name="name" id="name"
                               value="{{old('name') ? old('name') : $locations->name }}" class="form-control">

                        <br/>

                        <div id="map_canvas" style="width:500px; height:0px;"></div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Latitude<i><span class="astrick">*</span></i></label>
                        <input type="text" name="latitude" id="latitude"
                               {{--readonly--}} value="{{old('latitude') ? old('latitude') : $locations->latitude }}"
                               class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label>Longitude<i><span class="astrick">*</span></i></label>
                        <input type="text" name="longitude" id="longitude"
                               {{--readonly--}} value="{{old('longitude') ? old('longitude') : $locations->longitude }}"
                               class="form-control">
                    </div>

                    <input type="submit" name="submit" class="btn btn-success" style="margin-bottom: 50px;">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl8_366jMcXCN8-o0Dwurri1HvynJ9hE4&libraries=places"></script>
    <script src="{{ asset('panel/assets/libs/select2/select2.full.js') }}" type="text/javascript"></script>
  
    <script type="text/javascript">
        $(document).ready(function () {

            @if($locations->latitude && $locations->longitude)
            displayMap(    {{ $locations->latitude }} , {{ $locations->longitude }} );

            @endif

            function displayMap(lat, long) {
                if (lat > 0 && long > 0) {
                    document.getElementById('map_canvas').style.display = "block";
                    initialize(lat, long);
                }
            }

            function initialize(lat = 0, long = 0) {
                // create the map
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(lat, long),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            }


            var autocomplete = new google.maps.places.Autocomplete($("#name")[0], {});

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();

                console.log('You searched for: ' + place.name);

                $('#map_canvas').css("height", 400);
                displayMap(place.geometry.location.lat(), place.geometry.location.lng());

                document.getElementById('latitude').value = place.geometry.location.lat();
                document.getElementById('longitude').value = place.geometry.location.lng();
            });

        });
    </script>

@endsection

    



