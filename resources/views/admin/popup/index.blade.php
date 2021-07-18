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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Popup Table</h4>
				<p class="text-muted font-13 mb-4"></p>
               

                
				<a href="{{url('/admin/popup/create')}}" style="float: right;margin-top: 39px;"
                    class="btn btn-blue btn-sm ml-2">
                    Add Popup
                </a>
               

                
				<table class="table dt-responsive nowrap" id="basic-datatable">
					<thead>
						<tr>
							<th>Title</th>
							<th>Image</th>
                            <th>Created Date</th>
							<th>Text</th>
							<th>Status</th>
							<th>Action</th>
						
						</tr>
					</thead>
					<tbody>
                        @if(count($popups))
                        @foreach($popups as $p)
                        
						<tr>
							<td>{{$p->title}}</td>
							<td style="width:268.8px">
								<div class="card shadow">

										<a href="{{asset('/images/popup/'.$p->image)}}"
                                            class="image-popup full-image" title="Screenshot-1">
											<img src="{{asset('/images/popup/'.$p->image)}}" class="img-fluid"
                                                style="width:100% ; box-shadow: 4px 1px #888888;">
											</a>
										
									</div>
								</td>
                                <td>{{ $p->created_at->format('Y/m/d')}}</td>
								<td> {{ strip_tags($p->description) }}</td>
								<td>
                                <input type="checkbox" data-id="{{ $p->id }}" name="status" class="js-switch" {{ $p->status == 1 ? 'checked' : '' }}>
                                </td>
								<td>
									<a href="{{URL::to('admin/popup/'.$p->id.'/edit')}}" class="btn btn-success">
                                    Edit </a>
									<a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/popup/'.$p->id.'/delete')}}"> Delete </a>
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
    	let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    
        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });
    </script>
	<script>
	
$(document).ready(function() {

    $(document).on('click', ".delete", function(event) {

        event.preventDefault();

        alert_pop_message('You want to delete the record!', this.href);

    });
    
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let popup = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('popup.update.status') }}',
            data: {'status': status, 'popup': popup},
            success: function (data) {
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(data.message);
                location.reload()
            }
        });
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