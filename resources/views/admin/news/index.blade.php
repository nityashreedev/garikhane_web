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
				<h4 class="header-title">News And Press Release Table</h4>
				<p class="text-muted font-13 mb-4"></p>



				<a href="{{url('/admin/news/create')}}" style="float: right;margin-top: 39px;"
					class="btn btn-blue btn-sm ml-2">
					Add News or Press Release
				</a>



				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>Title</th>
							<th>Type</th>
							<th>Publish Date</th>
							<th>Image</th>
							<th>Text</th>
							<th>Status</th>
							<th>Notify User</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@if(count($news) > 0)
						@foreach($news as $n)

						<tr>
							<td>{{$n->title}}</td>
							<td>{{$n->type}}</td>
							<td>{{ $n->publish_date }}</td>
							<td style="width:268.8px">
								<div class="card shadow">

									<a href="{{asset('/images/news/'.$n->image)}}" class="image-popup full-image"
										title="Screenshot-1">
										<img src="{{asset('/images/news/'.$n->image)}}" class="img-fluid"
											style="width:100% ; box-shadow: 4px 1px #888888;">
									</a>

								</div>
							</td>
							<td> {{ strip_tags($n->text) }}</td>
							<td>
								@if($n->status ==1)
								<span class="badge badge-success">Published</span>
								<a class="btn btn-primary red unpublished" data-toggle="tooltip" data-placement="bottom"
									href="{{URL::to('admin/news/'.$n->id.'/status')}}"><i class="fa fa-times"
										title="Do you like to unpublish News/Press Release?" aria-hidden="true"></i></a>
								@else
								<span class="badge badge-danger">Unpublished</span>
								<a class="btn btn-primary green published" data-toggle="tooltip" data-placement="bottom"
									href="{{URL::to('admin/news/'.$n->id.'/status')}}"><i class="fa fa-check"
										title="Do you want to  publish News/Press Release?"></i></a>
								@endif
							</td>
							<td><a class="btn btn-success " href="{{ url('admin/news/'.$n->id.'/notify') }}">Notify</a> </td>
							<td>
								<a href="{{URL::to('admin/news/'.$n->id.'/edit')}}" class="btn btn-success">
									Edit </a>
								<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
									href="{{URL::to('admin/news/'.$n->id.'/delete')}}"> Delete </a>
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