@extends('admin.layouts.app')
@section('content')
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Data Table</h4>
                    <p class="text-muted font-13 mb-4">

                    <div class="text-center">
                        <a href="{{url('/admin/invite')}}" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                           data-target="#modalLoginForm">Launch
                            Modal Login Form</a>
                    </div>
                    </p>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <a href="{{url('/admin/users/create')}}" style="float: right;margin-top: 39px;"
                           class="btn btn-blue btn-sm ml-2">
                            Add User
                        </a>
                    @endif
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Since</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>

                        </tr>
                        </thead>


                        <tbody>
                        @if(count($users) > 0)
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->fname }} {{ $user->lname }}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{ $user->created_at->format('Y/m/d') }}</td>
                                    <td class="status-{{$user->id}}">{{$user->status}}</td>
                                    <td>{{$user->role}}</td>
                                    <td><a href="{{URL::to('admin/users/'.$user->id.'/edit')}}" class="btn btn-success">
                                            Edit </a>
                                        <a href="{{URL::to('admin/users/'.$user->id.'/delete')}}"
                                           class="btn btn-success" data-toggle="modal" onclick="deleteData(this)"
                                           data-target="#DeleteModal"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>


                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    <!-- Vendor js -->

    <!-- third party js -->

    <!-- third party js ends -->

    <!-- Datatables init -->

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Invite a User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{--               call the form--}}
                @include('admin.invite.create')

            </div>
        </div>
    </div>

{{--    <div class="text-center">--}}
{{--        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch--}}
{{--            Modal Login Form</a>--}}
{{--    </div>--}}

    <div id="DeleteModal" class="modal fade text-danger" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <form action="" id="deleteForm" method="post">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <p class="text-center">Are You Sure Want To Delete ?</p>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection()

@section('scripts')
    <script>


        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@stop




