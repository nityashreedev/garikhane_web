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
				<h4 class="header-title">Contact Enquiry</h4>
				<p class="text-muted font-13 mb-4"></p>
                <button><a href="{{url('admin/contact/csv')}}">Export CSV</a></button>
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th >Name</th>
							<th>Email</th>
							<th>Submit Date</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Action</th>
						
						</tr>
					</thead>
					<tbody>
                        @if(count($contact) > 0)
                        @foreach($contact as $c)
                        
						<tr>
							<td>{{$c->name}}</td>
							<td>{{$c->email}}</td>
							<td>{{$c->created_at->format('Y/m/d')}}</td>
							<td>{{ $c->address }}</td>
							<td>{{$c->phone}}</td>
							<td>
								<a href="{{ route('view.contact', $c->id) }}" class="btn btn-primary">View Details</a>
								<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/contact/enquire/'.$c->id)}}"> Delete </a>
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