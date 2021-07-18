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
				<h4 class="header-title">Notifications Table</h4>
				<p class="text-muted font-13 mb-4"></p> 
                             
				<table id="example" class="table dt-responsive">
					<thead>
						<tr>
							<th>Send To</th>
							<th>Type</th>
                            <th>Date</th>
							<th>Title</th>
							<th>Body</th>
							<th>Actions</th>						
						</tr>
					</thead>
					<tbody>
                        @if(count($notifications) > 0)
                        @foreach($notifications as $notification)
                        
						<tr>
							<td>{{$notification->send_to}}</td>
                            <td>{{ $notification->type }}</td>
							<td>
                                {{ $notification->created_at->format('Y/m/d') }}
                            </td>
								<td>{{ $notification->title }}</td>
                                <td>{{ $notification->body }}</td>
								<td> 
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/notification/'.$notification->id.'/delete')}}"> Delete </a>
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
$('#example').dataTable({
        "order": []
    });
    $(document).on('click', ".delete", function(event) {

        event.preventDefault();

        alert_pop_message('You want to delete the record!', this.href);

    });
    $(document).on('click', ".unpublished", function(event) {
        status = 'unpublished'
        event.preventDefault();
        alert_pop_message_ajax('You want to unpublished the post!', this.href);
    });
    $(document).on('click', ".published", function(event) {
        status = 'published'
        event.preventDefault();
        alert_pop_message_ajax('You want to published the post!', this.href);
    });
 function alert_pop_message_ajax(message, redirectURL) {

        swal({
            title: "Are you sure?",
            text: message,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then(function(confirmed) {
            if (confirmed == true) {
                $.ajax({
                    dataType: "json",
                    type: 'post',
                    url: `${redirectURL}`,
                    data: {

                        'status': status,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(data) {
                        location.reload()
                        $(".reload-table").load(window.location.href + ".reload-table");
                    },

                    error: function() {

                    }

                });

            }

        });

    }

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