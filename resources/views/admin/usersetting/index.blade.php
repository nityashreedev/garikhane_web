@extends('admin.layouts.app')
@section('content')
<style>
.note-toolbar {
    position: relative;
    z-index: 50;
}

.card-box {

    margin-bottom: 70px;

}

ul#imgList {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}
</style>



<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
               
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div>
            <h4 class="page-title">Setting</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<form action="{{url('admin/user/setting/'.$user->id)}}"
    method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                <div class="form-group mb-3">
                    <label for="product-name">First Name<span class="text-danger">*</span></label>
                    <input type="text" name="fname" value="{{isset($user->fname) ? $user->fname : '' }}"
                        id="product-name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-name">Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="lname" value="{{isset($user->lname) ? $user->lname : '' }}"
                        id="product-name" class="form-control">
                </div>
        
                <div class="form-group mb-3">
                    <label for="product-name">Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" value="{{isset($user->email) ? $user->email : '' }}"
                        id="product-address" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="product-name">Password<span class="text-danger">*</span><small>if you dont change password old password remain unchange</small></label>
                    <input type="text" name="password" value="{{isset($user->password) ? '***************': '' }}"
                        id="product-address" class="form-control">
                </div>
                
              
               
            </div> <!-- end card-box -->
        </div> <!-- end col -->
        <div class="text-center mb-3">

            <button type="submit"
                class="btn w-sm btn-success waves-effect waves-light sumbit">Update</button>
    
    </div> 
      
    </div>
   
    
    
</form>
</div>
<!-- end col-->
<!-- end row -->


<!-- end row -->
@endsection

@section('scripts')

@stop