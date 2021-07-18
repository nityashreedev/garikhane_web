@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Contact Enquiry Details</h4>
        </div>
    </div>
    <div class=" col-md-10 ">
        <div class="card">
            <table class="table table-striped">
                <tr>
                    <th>Contact Enquiry By</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $contact->phone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $contact->address }}</td>
                </tr>
                <tr>
                    <th> Enquiry</th>
                    <td>{{ $contact->enquiry }}</td>
                </tr>
                <tr>
                    <th>Enquiry At</th>
                    <td>{{ $contact->created_at->format('F, m, Y') }}</td>
                </tr>
            </table>
        </div>

    </div>
</div>
@endsection