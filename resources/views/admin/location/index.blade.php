@extends('admin.layouts.app')
@section('content')


<style>
.img-fluid {
    max-width: 45%;
    height: auto;
}

.full-image {
    max-width: 100%;
    height: auto;
}
</style>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Locations Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/location/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Location
                </a>
               

                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>Name</th>
							<th style="width:20%">Action</th>
						</tr>
					</thead>
					<tbody>
                        @if(count($locations) > 0)
                        @foreach($locations as $l)
                        
						<tr>
							<td>{{$l->name}}</td>
								<td>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/location/'.$l->id.'/delete')}}"> Delete </a>
								</td>
							</tr>
                        @endforeach
                        @endif
                    
						</tbody>
					</table>
				</div>
				<!-- end card body-->
			</div>
			<!-- end card -->
		</div>
		<!-- end col-->
	</div>

@endsection()

@section('scripts')


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
$(document).ready(function() {

    $(document).on('click', ".delete", function(event) {

        event.preventDefault();

        alert_pop_message('You want to delete the record!', this.href);

    });

    function alert_pop_message(message, redirectURL) {

        swal({

            title: "Are you sure?",
            text: message,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(confirmed) {
            if (confirmed == true) {
                window.location = `${redirectURL}`;
            }

        });

    }
});
</script>
@stop