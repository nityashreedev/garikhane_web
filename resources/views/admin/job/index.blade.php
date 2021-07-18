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
				<h4 class="header-title">Job Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/job/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Job
                </a>
                

                
				<table id="basic-datatable" class="table dt-responsive">
					<thead>
						<tr>
							<th>Title</th>
							<th>Image</th>
                            <th>Date</th>
							<th>Description</th>
							<th>status</th>
                            <th>publish</th>
                            <th>Notify Users</th>
							<th>Actions</th>
						
						
						</tr>
					</thead>
					<tbody>
                        @if(count($jobs) > 0)
                        @foreach($jobs as $job)
                        
						<tr>
							<td>{{$job->title}}</td>
							<td style="width:268.8px">
							    @if(isset($job->image))
								<div class="card shadow">
									   
										<a href="{{asset('/images/job/'.$job->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/job/'.$job->image)}}" class="img-fluid"
                                                alt="work-thumbnail" style="width:100% ; box-shadow: 4px 1px #888888;">
											</a>
										
									</div>
								@endif
								</td>
                                <td>
                                    {{ $job->date }}
                                </td>
								<td> {!! substr($job->description,0,200) !!}..</td>
								<td>
								    @if($job->status == 1)
								    Active
                                    <a class="btn btn-primary red unpublished" data-toggle="tooltip" data-placement="bottom"
                                        href="{{URL::to('admin/job/'.$job->id.'/status')}}"><i class="fa fa-times"
                                            title="Do you like to reject job?" aria-hidden="true"></i></a>
                                    @else
                                    Pending
                                    <a class="btn btn-primary green published" data-toggle="tooltip" data-placement="bottom"
                                        href="{{URL::to('admin/job/'.$job->id.'/status')}}"><i class="fa fa-check"
                                            title="Do you like approve job?"></i></a>
                                    @endif
								</td>
                                <td>
								    @if($job->publish == 1)
								    Published
                                    <a class="btn btn-primary red unpublishedJob" data-toggle="tooltip" data-placement="bottom"
                                        href="{{URL::to('admin/job/'.$job->id.'/publish')}}"><i class="fa fa-times"
                                            title="Do you like to publish job?" aria-hidden="true"></i></a>
                                    @else
                                    Unpublished
                                    <a class="btn btn-primary green publishedJob" data-toggle="tooltip" data-placement="bottom"
                                        href="{{URL::to('admin/job/'.$job->id.'/publish')}}"><i class="fa fa-check"
                                            title="Do you like unpublish job?"></i></a>
                                    @endif
								</td>
                                <td><a class="btn btn-success " href="{{ url('admin/job/'.$job->id.'/notify') }}">Notify</a> </td>
								<td>
								    
									<a href="{{URL::to('admin/job/'.$job->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/job/'.$job->id.'/delete')}}"> Delete </a>
                                   
                                    <a class="btn btn-success " data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/job/intersted/'.$job->id)}}"> Intersted User </a>
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
        alert_pop_message_ajax('You want to reject the Job!', this.href);
    });
    $(document).on('click', ".published", function(event) {
        status = 'published'
        event.preventDefault();
        alert_pop_message_ajax('You want to approve the Job!', this.href);
    });
    $(document).on('click', ".publishedJob", function(event) {
        status = 'published'
        event.preventDefault();
        alert_pop_message_ajax('You want to publish the Job!', this.href);
    });
    $(document).on('click', ".unpublishedJob", function(event) {
        status = 'published'
        event.preventDefault();
        alert_pop_message_ajax('You want to unpublish the Job!', this.href);
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