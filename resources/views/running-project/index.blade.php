@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> चालु परियोजना </h1>
    </div>
</div>

<!--=============================== Contact With Us =================-->
<div class="main-container-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="abt-detail table-responsive">
                    <table class="table table-striped" id="frontTable">
                        <thead>
                            <th>क्र.सं</th>
                            <th>ऋणको प्रकार </th>
                            <th>परियोजनाको किसिम</th>
                            <th>स्थान </th>
                            <th>ऋण लिएको मिति </th>
                        </thead>
                        <tbody>
                            @foreach($runningProjects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->loan_type }}</td>
                                <td>{{ $project->project_type }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->loan_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection