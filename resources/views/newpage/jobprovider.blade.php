@extends('layouts.frontendlayout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <style>
      .job-edit {
    background: #074c6c;
    color: white;
    padding: 5px 10px;
    border-radius: 3px;
    letter-spacing: 0.4px;
}
.job-admin {
    padding: 50px 0;
}
.job-admin-title {
    color: black;
    font-weight: 600;
    font-size: 15px;
}
.thead-dark tr th {
    font-size: 16px;
    background: #074c6c;
    color: white;
    letter-spacing: 0.4px;
    padding: 16px !important;
    margin-bottom: 15px !important;
    border-right: 2px solid;
}
div#basic-datatable_length {
    margin: 25px 0 8px 0;
}
table {
    width: 100%;
}
td.actions a {
    width: 100%;
    display: block;
    margin: 5px;
    text-align: center;
}
a.job-admin-title:hover {
    color: #1980c5;
}
  </style>
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
    <div class="shadow-main">
        <h1> रोजगार प्रदायक </h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="{{url('/')}}">गृहपृष्ठ </a></li>
            <li><a>रोजगार </a></li>
        </ul>
    </div>
</div>
<section class="job-admin">
    <div class="container">
        @include('admin.flashmessage.message')
        <div class="row">
            <a href="{{url('job/provider/create-job')}}" class="job-edit">Create Job</a>
            <table id="basic-datatable" >
                <thead class="thead-dark">
                    <tr>
                      <th scope="col" width="5%">#</th>
                      <th scope="col" width="10%">Images</th>
                      <th scope="col" width="20%">Title</th>
                      <th scope="col" width="40%">Description</th>
                      <th scope="col" width="10%">Status</th>
                      <th scope="col" width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sn =0; ?>
                    @if(count($jobscreated) > 0)
                    @foreach($jobscreated as $j)
                    <tr>
                      <td scope="row">{{$sn++}}</td>
                      <td><img src="{{asset('images/job/'.$j->image)}}" height="40px" weight="40px"></td>
                      <td><a href="#" class="job-admin-title">{{$j->title}}</a></td>
                      <td><p>
                      {!! strip_tags(\Illuminate\Support\Str::words($j->description, 35,'....'))  !!}
                      </p></td>
                      <td>
                          @if($j->status == 0)
                          Pending
                          @else
                          Active
                          @endif
                      </td>
                      <td class="actions">
                          @if($j->status == 0)
                          <a href="{{url('job/provider/create-job/edit/'.$j->id)}}" class="job-edit">Edit</a>
                          <a href="{{url('job/provider/create-job/delete/'.$j->id)}}" class="job-edit delete">Delete</a>
                          @endif
                          <a href="{{url('job/provider/jobapplicant/list/'.$j->id)}}" class="job-edit">Applicant</a>
                        </td>
                      
                    </tr>
                     @endforeach
                  @endif
                 
                </tbody>
            </table>
        </div>
    </div>
</section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

@endsection
