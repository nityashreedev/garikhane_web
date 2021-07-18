@extends('admin.layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Data Table</h4>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>

                            <th>Email</th>
                            <th>Role</th>
                            <th>Invited By</th>
                            <th>Action</th>

                        </tr>
                        </thead>


                        <tbody>
                        @if(count($invited_list) > 0)
                            @foreach($invited_list as $invited)

                                <tr>
                                    <td>{{$invited->email}}</td>
                                    <td>{{$invited->role}}</td>
                                    <td>{{$invited->user->name}}</td>
                                    <td>
                                        <a href="{{URL::to('admin/invite/'.$invited->id.'/delete')}}"
                                           class="btn btn-success" data-toggle="modal"
                                           onclick="deleteData(this)"
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


    @include('admin.deletemodel.deletemodel')
@endsection()

@section('scripts')
    <script>


    function formSubmit() {
        $("#deleteForm").submit();
    }
</script>
@stop




