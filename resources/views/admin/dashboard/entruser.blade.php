
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
.dataTables_filter {
display: none;
}
</style>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Entreprenure List</h4>
				<p class="text-muted font-13 mb-4"></p>
               
                <form method="get" action="{{url('admin/entreprenure/form/submission') }}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label> Starting Date</label>
                                <input type="date" class="form-control" name="starting_date" placeholder="Starting Date"
                                    value="{{isset( $_GET['starting_date']) ? $_GET['starting_date'] : '' }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label> End Date</label>
                                <input type="date" class="form-control" name="end_date" placeholder="Starting Date"
                                    value="{{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>प्रदेश</label>
                                <select class="form-control pradesh" name="pradesh" >
                                    <option value="">प्रदेश</option>
                                    @foreach($pradesh as $p)
                                    <?php
                                    if (isset($_GET['pradesh']) ? $_GET['pradesh'] == ($p->name) : '')
                                        $selected = 'selected';
                                    else
                                        $selected = '';
                                    ?>
                                <option value="{{$p->name}}"  data-id="{{$p->id}}" {{ $selected }}>{{$p->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>जिल्ला</label>
                                <select class="form-control" name="district" id="district">
                                    <option value=""> जिल्ला</option>
                                   @foreach($district as $d)
                                   <?php
                                   if (isset($_GET['district']) ? $_GET['district'] == ($d->name) : '')
                                       $selected = 'selected';
                                   else
                                       $selected = '';
                                   ?>
                                   <option value="{{$d->name}}" {{ $selected }}>{{$d->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1" style="display: flex;">
                            <div class="form-group" style="margin: auto;">
                                <input type="submit" class="btn red" value="Submit" style="margin-top: 13px;color: currentcolor;">
                            </div>
                        </div>
                    </div>
                </form>
                <a class="btn btn-success btn-sm" style="
    float: right;
    background: blueviolet;
" href="{{url('admin/excel/enterprenure/download?district='.(isset($_GET['district']) ? $_GET['district'] : '' ).'&starting_date='.(isset($_GET['starting_date']) ? $_GET['starting_date'] : '' ).'&end_date='.(isset($_GET['end_date']) ? $_GET['end_date'] : '' ).'&pradesh='.(isset($_GET['pradesh']) ? $_GET['pradesh'] : '' ))}}">Export Entreprenure File</a>
				<table id="basic-datatable" class="table dt-responsive nowrap reload-table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
                            <th>Submitted Date</th>
							<th>Status</th>
							<th>Action</th>
						
						</tr>
					</thead>
					<tbody>
                        @if(count($eregister) > 0)
                        @foreach($eregister as $r)
                        
						<tr>
							<td>{{$r->name}}</td>
						
								<td> {{ strip_tags($r->address) }}</td>
                                <td>{{ $r->created_at->format('Y/m/d') }}</td>
							
								
								<td>	@if($r->entr->accept_status == 0)
								        Pending
								        @elseif($r->entr->accept_status == 1)
								        Accepted
								        @else
								        Rejected
								        @endif
								
								</td>
								<td>
									<a href="{{url('admin/entreprenure/view/'.$r->id)}}" class="btn btn-success">
                                    View </a>
									<a class="btn btn-success" data-toggle="tooltip" data-placement="bottom"
                                    href="{{url('admin/form/reply/'.$r->id)}}"> Reply </a>
                                    <a class="btn btn-success" data-toggle="tooltip" data-placement="bottom"
                                    href="{{url('admin/entreprenure/download/'.$r->id)}}"> Download </a>
                                     
                            <a class="btn btn-primary red unpublished" data-toggle="tooltip" data-placement="bottom"
                                href="{{URL::to('admin/entreprenure/'.$r->entr->id.'/status')}}"><i class="fa fa-times"
                                    title="Do you like to unpublish post?" aria-hidden="true"></i></a>
                            
                            <a class="btn btn-primary green published" data-toggle="tooltip" data-placement="bottom"
                                href="{{URL::to('admin/entreprenure/'.$r->entr->id.'/status')}}"><i class="fa fa-check"
                                    title="Do you like publish post?"></i></a>
                           
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
	
	var base_url = 'http://etechsoln.com/garikhanne/public';
     $('.pradesh').change(function(){
       
      
        var pradesh = $(this).find('option:selected').attr("data-id");

        $.ajax({
            url : base_url+'/pradesh/'+ pradesh,
            type:'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                 "id": pradesh
                },
               success: function(data) {
              
                
                  var html = '';
                        var i;
                      
                        for(i=0; i<data.length; i++){
                          
                            html += '<option value='+data[i]['name']+' data-id='+data[i]['id']+'>'+data[i]['name']+'</option>';
                        }
                       
                         $('#district').html(html);
               
             }
        });
    });
    
    
$(document).ready(function() {
     $(document).on('click', ".unpublished", function(event) {
        status = 'unpublished'
        event.preventDefault();
        alert_pop_message_ajax('You want to Reject the Form!', this.href);
    });
    $(document).on('click', ".published", function(event) {
        status = 'published'
        event.preventDefault();
        alert_pop_message_ajax('You want to Approve the Form!', this.href);
    });

    $(document).on('click', ".delete", function(event) {

        event.preventDefault();

        alert_pop_message('You want to delete the record!', this.href);

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