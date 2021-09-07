@extends('layouts.frontendlayout')
@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> प्रोजेक्ट आइडिया बैंक </h1>
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
                            <th>परियोजना</th>
                            <th>श्रोत</th>
                            <th>डाउनलोड/लिंक </th>
                        </thead>
                        <tbody>
                            @foreach($projectideabank as $idea)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $idea->name }}</td>
                                <td>{!! $idea->reference !!}</td>
                                <td>
                                    @if(empty($idea->pdf) && is_null($idea->link))
                                    <span>No file or link Available</span>
                                    @elseif(is_null($idea->link))
                                    <a href="{{ url('project/idea/bank/pdf/'.$idea->id) }}"
                                        class=" btn btn-outline-secondary red-btn btn-sm">डाउनलोड</a>
                                    @else
                                    <a href="{{ $idea->link }}" target="_blank"
                                        class="btn btn-outline-secondary red-btn btn-sm">Go to link</a>
                                    @endif
                                </td>
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