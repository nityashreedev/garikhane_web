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
				<h4 class="header-title">Bank Lists</h4>
				<p class="text-muted font-13 mb-4"></p>
                
				<a href="{{url('/admin/banking/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Bank Information
                </a>
              

                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>Title</th>
                            <th>Image</th>
							<th>Created Date</th>
                            <th>Description</th>
							<th>Action</th>
							<th style="display:none;">Action</th>
						</tr>
					</thead>
					<tbody>
                        @if(count($bankings) > 0)
                        @foreach($bankings as $b)
                        
						<tr>
							<td>{{$b->title}}</td>
							<td style="width:268.8px">
								<div class="card shadow">
									<div class="card-body">
										<a href="{{asset('/images/banking/'.$b->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/banking/'.$b->image)}}" class="img-fluid"
                                                alt="work-thumbnail" style="width:100%">
											</a>
										</div>
									</div>
								</td>
                               <td>{{ $b->created_at->format('Y/m/d') }}</td>
								<td> {{ $b->location }}</td>
								<td>
									<a href="{{URL::to('admin/banking/'.$b->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/banking/'.$b->id.'/delete')}}"> Delete </a>
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