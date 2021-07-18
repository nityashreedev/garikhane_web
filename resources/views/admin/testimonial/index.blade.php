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
				<h4 class="header-title">testimonial Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/testimonial/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add testimonial
                </a>
               

                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th style="width:20%">Name</th>
							<th style="width:30%">Image</th>
							<th style="width:30%">Created Date</th>
							<th style="width:30%">Text</th>
							<th style="width:20%">Action</th>
						
						</tr>
					</thead>
					<tbody>
                        @if(count($testimonials) > 0)
                        @foreach($testimonials as $testimonial)
                        
						<tr>
							<td>{{$testimonial->name}}</td>
							<td>
								<div class="card shadow">
									
										<a href="{{asset('/images/testimonial/'.$testimonial->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/testimonial/'.$testimonial->image)}}" class="img-fluid"
                                                alt="work-thumbnail" style="width:100% ; box-shadow: 4px 1px #888888;">
											</a>
										
									</div>
								</td>
								<td>{{ $testimonial->created_at->format('Y/m/d') }}</td>
								<td> {{ strip_tags($testimonial->description) }}</td>
								<td>
									<a href="{{URL::to('admin/testimonial/'.$testimonial->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/testimonial/'.$testimonial->id.'/delete')}}"> Delete </a>
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