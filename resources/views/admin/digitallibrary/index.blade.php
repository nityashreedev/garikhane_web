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
				<h4 class="header-title">Digital Library Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/digital-library/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Digital Library
                </a>
               

                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>Title</th>
							<th>Image</th>
							<th>Text</th>
							<th>Status</th>
							<th>Action</th>
							<th style="display:none;">Action</th>
						</tr>
					</thead>
					<tbody>
                        @if(count($digital) > 0)
                        @foreach($digital as $d)
                        
						<tr>
							<td>{{$d->title}}</td>
							<td style="width:268.8px">
								<div class="card shadow">
									
										<a href="{{asset('/images/digitallibrary/'.$d->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/digitallibrary/'.$d->image)}}" class="img-fluid"
                                                style="width:100% ; box-shadow: 4px 1px #888888;">
											</a>
										
									</div>
								</td>
								<td> {{ strip_tags($d->text) }}</td>
								<td>
									@if($d->status == 1)
									<a class="btn btn-primary red unpublished" data-toggle="tooltip" data-placement="bottom"
                               		 href="{{URL::to('admin/digital-library/'.$d->id.'/status')}}"><i class="fa fa-times"
                                    title="Do you like to publish/unpublish this Digital library?" aria-hidden="true"></i></a>
									@endif
								</td>
								<td>
									<a href="{{URL::to('admin/digital-library/'.$d->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/digital-library/'.$d->id.'/delete')}}"> Delete </a>
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