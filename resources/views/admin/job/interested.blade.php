@extends('admin.layouts.app')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
            <h4 class="header-title">{{$job->title}} Interested List</h4>
				<p class="text-muted font-13 mb-4"></p>
                
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
                            <th >Name</th>
                            <th>Email</th>
                            <th>CV</th>
                            <th style="width:20%">Cover Letter</th>
						</tr>
					</thead>
					<tbody>
                        @if(count($alluser) > 0)
                        @foreach($alluser as $e)
                        
						<tr>
                            <td>{{$e['name']}}</td>
                            <td>{{$e['email']}}</td>
                            <td> <a style="color: darkgoldenrod;" href="{{$e['file']}}" target="_blank"> <i class="fas fa-file-pdf"></i>CV</a></td>
                            <td> <a style="color: darkgoldenrod;" href="{{url('applied/coverletter/'.$e['id'].'/'.$e['user_id'])}}" target="_blank"> <i class="fas fa-file-pdf"></i>Coverletter</a></td>
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
