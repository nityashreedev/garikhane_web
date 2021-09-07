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
                <h4 class="header-title">Running Projects List</h4>
                <p class="text-muted font-13 mb-4"></p>
                <div>
                    <form method="get" action="{{ route('filter.running.projects') }}" class="form-inline">
                        <select name="type" class="form-control">
                            <option selected disabled>Select type</option>
                            <option value="महिला" {{isset($_GET['type'])&& ($_GET['type']== "महिला")? 'selected':'' }}>
                                महिला</option>
                            <option value="कृषि" {{isset($_GET['type'])&& ($_GET['type']== "कृषि")? 'selected':'' }}>
                                कृषि </option>
                            <option value="दलित" {{isset($_GET['type'])&& ($_GET['type']== "दलित")? 'selected':'' }}>
                                दलित</option>
                            <option value="साक्षर युवा"
                                {{isset($_GET['type'])&& ($_GET['type']== "साक्षर युवा")? 'selected':'' }}>साक्षर युवा
                            </option>
                            <option value="विदेशबाट फर्केका"
                                {{isset($_GET['type'])&& ($_GET['type']== "विदेशबाट फर्केका")? 'selected':'' }}>विदेशबाट
                                फर्केका</option>
                        </select>
                        <button type="submit" class="btn btn-blue btn-sm ml-2">Filter</button>
                        <a href="{{ url('admin/running/project/download?type='.(isset($_GET['type']) ? $_GET['type'] : '' )) }}"
                            class="btn btn-blue btn-sm ml-2">Export
                            To CSV</a>
                    </form>
                </div>
                <div class="row float-right">
                    <a href="{{url('/admin/running/project/create')}}" style="float: right;margin-top: 39px;"
                        class="btn btn-blue btn-sm ml-2">
                        Add Running Project
                    </a>
                </div>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Loan Types</th>
                            <th>Loan Date</th>
                            <th>Project Type</th>
                            <th>Amount</th>
                            <th>Loan amount</th>
                            <th>location</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($projects) > 0)
                        @foreach($projects as $project)

                        <tr>
                            <td>{{$project->project_name}}</td>
                            <td>{{ $project->loan_type}}</td>
                            <td>{{ $project->loan_date }}</td>
                            <td>{{ $project->project_type }}</td>
                            <td>{{ $project->project_amount }}</td>
                            <td>{{ $project->loan_amount }}</td>

                            <td>{{ $project->location }}</td>
                            <td>
                                <a href="{{ route('edit.runningProject', $project->id)}}" class="btn btn-success">
                                    Edit </a>
                                <a class="btn btn-success delete" data-toggle="tooltip" data-placement="bottom"
                                    href="{{URL::to('admin/running/project/'.$project->id.'/delete')}}"> Delete </a>
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