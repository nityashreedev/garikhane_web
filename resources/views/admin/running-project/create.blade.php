@extends('admin.layouts.app')

<style>
    .thumb {
        margin: 10px 5px 0 0;
        width: 100px;
    }
</style>
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">
                    {{ isset($runningProject)? 'Update Running Project': 'Create Running Project' }}</h4>
                <p class="sub-header"></p>
                <div class="row">
                    <div class="col-lg-6">

                        <form
                            action="{{isset($runningProject) ? route('update.runningProject', $runningProject->id) :  route('store.runningProject') }}"
                            method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group mb-3">
                                <label for="simpleinput">Project Name<span style="color:red;">* </span></label>
                                <input type="text" required name="project_name"
                                    value="{{isset($runningProject->project_name) ? $runningProject->project_name : old('project_name')}}"
                                    class="form-control">
                                @error('project_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Loan Type<span style="color:red;">* </span></label>
                                <select name="loan_type" class="form-control">
                                    <option disabled selected>Select Loan type</option>
                                    <option value="महिला" @if(isset($runningProject) && $runningProject->loan_type ==
                                        'महिला')
                                        selected @endif>महिला</option>
                                    <option value="कृषि" @if(isset($runningProject) && $runningProject->loan_type ==
                                        'कृषि')
                                        selected @endif>कृषि </option>
                                    <option value="दलित" @if(isset($runningProject) && $runningProject->loan_type ==
                                        'दलित')
                                        selected @endif>दलित</option>
                                    <option value="साक्षर युवा" @if(isset($runningProject) && $runningProject->loan_type
                                        ==
                                        'साक्षर युवा')
                                        selected @endif>साक्षर युवा</option>
                                    <option value="विदेशबाट फर्केका" @if(isset($runningProject) && $runningProject->
                                        loan_type
                                        == 'विदेशबाट फर्केका')
                                        selected @endif>विदेशबाट फर्केका</option>

                                </select>
                                @error('loan_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Project Type<span style="color:red;">* </span></label>
                                <input type="text" required name="project_type"
                                    value="{{isset($runningProject->project_type) ? $runningProject->project_type : old('project_type')}}"
                                    class="form-control">
                                @error('project_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Project Amount<span style="color:red;">* </span></label>
                                <input type="text" required name="project_amount"
                                    value="{{isset($runningProject->project_amount) ? $runningProject->project_amount : old('project_amount')}}"
                                    class="form-control">
                                @error('project_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Loan Amount<span style="color:red;">* </span></label>
                                <input type="text" required name="loan_amount"
                                    value="{{isset($runningProject->loan_amount) ? $runningProject->loan_amount : old('loan_amount')}}"
                                    class="form-control">
                                @error('loan_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Loan Taken By<span style="color:red;">* </span></label>
                                <input type="text" required name="loan_taken_by"
                                    value="{{isset($runningProject->loan_taken_by) ? $runningProject->loan_taken_by : old('loan_taken_by')}}"
                                    class="form-control">
                                @error('loan_taken_by')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Location<span style="color:red;">* </span></label>
                                <select name="location" class="form-control">
                                    <option selected disabled>Please select Location</option>
                                    @foreach ($districts as $district)
                                    <option value="{{ $district->name }}"
                                        {{isset($runningProject->location) && ($runningProject->location == $district->name) ? 'selected' : ''}}>
                                        {{ $district->name }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" required name="location"
                                    value="{{isset($runningProject->location) ? $runningProject->location : old('location')}}"
                                class="form-control"> --}}
                                @error('location')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Loan Date<span style="color:red;">* </span></label>
                                <input type="text" required name="loan_date"
                                    value="{{isset($runningProject->loan_date) ? $runningProject->loan_date : old('loan_date')}}"
                                    class="form-control date-picker">
                                @error('loan_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <button type="submit"
                                class="btn btn-primary">{{isset($runningProject) ? 'Update' : 'Save'}}</button>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->



@stop
@section('scripts')
{{-- nepali calendar  --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous">
</script>
<script>
    $('.date-picker').nepaliDatePicker({
	            dateFormat: '%y/ %m/ %d',
	            closeOnDateSelect: true
            });
</script>

@stop