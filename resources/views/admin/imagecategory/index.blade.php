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
				<h4 class="header-title">Image Category Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/imagecategory/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Images Category
                </a>
               

                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>Image Caption</th>
							<th>Image</th>
							<th>Created Date</th>
							<th>Action</th>
						
						</tr>
					</thead>
					<tbody>
                        @if(count($gallerys) > 0)
                        @foreach($gallerys as $g)
                        
						<tr>
							<td>{{$g->title}}</td>
							<td style="width:268.8px">
								<div class="card shadow">
									
										<a href="{{asset('/images/gallerycategory/'.$g->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/gallerycategory/'.$g->image)}}" class="img-fluid"
                                                style="width:100% ; box-shadow: 4px 1px #888888;">
											</a>
										
									</div>
								</td>
								<td>{{ $g->created_at->format('Y/m/d') }}</td>
							
								<td>
									<a href="{{URL::to('admin/imagecategory/'.$g->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/imagecategory/'.$g->id.'/delete')}}"> Delete </a>
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