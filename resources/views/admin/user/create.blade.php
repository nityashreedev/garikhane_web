@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $purpose }} Users</h4>
                    <p class="sub-header">
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{ url('admin/users/store') }}"  method="POST">
                                {{csrf_field()}}
                                <div class="form-group mb-3">
                                    <label for="simpleinput">First Name</label>
                                    <input type="text"  name = "fname"  value="{{old('fname') ? old('fname') : $users->fname }}"class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="simpleinput">Last Name</label>
                                    <input type="text"  name = "lname"  value="{{old('lname') ? old('lname') : $users->lname }}"class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-email">Email</label>
                                    <input type="email"  name="email"  value="{{old('email') ? old('email') : $users->email }}" class="form-control" placeholder="Email">
                                    @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password <i class="fa fa-info-circle" title ="Need at least 6 character with one capital letter and one special character"></i></label>
                                    <input type="password"  name="password" class="form-control" value=""  @if($users->password != NULL) placeholder="password remain unchanged if left blank" @endif>
                                    @error('password')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Address</label>
                                    <input type="text"  name = "address"  value="{{old('address') ? old('address') : $users->address }}"class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Phone Number</label>
                                    <input type="number"  name = "phone"  value="{{old('phone') ? old('phone') : $users->phone }}"class="form-control">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-select">Input Select</label>
                                    <select class="form-control" id="example-select" name="role" >
                                        <option value="">None</option>
                                        <option value="admin"  @if ($users->role == "admin")selected="selected" @endif>admin</option>
                                        <option value = "editor"  @if ($users->role == "editor")selected="selected" @endif>Editor</option>
                                    </select>
                                    @error('role')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
@stop
