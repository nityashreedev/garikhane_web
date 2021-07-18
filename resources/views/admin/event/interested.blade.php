@extends('admin.layouts.app')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
            <h4 class="header-title">{{$event->title}} Interested List</h4>
				<p class="text-muted font-13 mb-4"></p>
                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
                            <th>Name</th>
                            <th>Email</th>
						</tr>
					</thead>
					<tbody>
                        @if(count($alluser) > 0)
                        @foreach($alluser as $e)
                        
						<tr>
                            <td>{{$e['name']}}</td>
                            <td>{{$e['email']}}</td>	
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

@endsection
