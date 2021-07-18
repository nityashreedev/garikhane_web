@extends('layouts.frontendlayout')
<style>
    .card-body {
    padding: 0 50px;
}
.card-body {
    padding: 30px 50px;
}
.form-group label {
    font-size: 17px;
    color: black !important;
    
}
h4.pt-sm-2.pb-1.mb-0.text-nowrap {
    font-size: 25px;
    color: white;
    text-transform: uppercase;
    font-weight: 700;
    padding: 15px 0 !important;
}
.form-group input {
    height: 50px;
}
button.btn.btn-primary {
    background: #03793e;
    color: white;
    font-size: 16px;
    font-weight: 700;
}
</style>

@section('content')
<div class="banner" style="position: relative;
    height: 481px;
    background-image: url({{ asset('images/setting/bg/'.$setting->bgimage) }}) !important;
    background-size: cover;
    background-position: 0 5%;
    background-repeat: no-repeat;">
        <div class="shadow-main">
            <h1> 
प्रयोगकर्ता </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="{{url('/')}}">गृहपृष्ठ</a></li>
                <li><a>
प्रयोगकर्ता</a></li>
            </ul>
        </div>
    </div>
  <!-- Page Title End -->
@if ($message = Session::get('success'))


<div class="alert alert-success alert-block message">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>{{ $message }}</strong>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script>
$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});
</script>
   
  
  <section class="inner-about-us sec-padding">
<div class="container">
<div class="row flex-lg-nowrap redsss">
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                
                  <div class="text-center ress col-md-12">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{isset($user->fname) ? $user->fname : '' }}</h4>
                    <h4>Please Update the form before proceed </h4>
                </div>
              </div>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" method ="post" action="{{url('user/profile/'.$user->id)}}" novalidate="">
                      {{csrf_field()}}
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" value="{{isset($user->fname) ? $user->fname : '' }}"name="fname" placeholder="First Name">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input class="form-control" type="text" value="{{isset($user->lname) ? $user->lname : '' }}" name="lname" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" value ="{{isset($user->email) ? $user->email : '' }}" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label>Address</label>
                              <input class="form-control"  value ="{{isset($user->address) ? $user->address : '' }}" name="address" type="text" placeholder="Address">
                            </div>
                            <div class="form-group">
                              <label>Phone Number</label>
                              <input class="form-control" type="number" value="{{isset($user->phone) ? $user->phone : '' }}" name="phone" placeholder="Phone Number">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
</div>
  </section>
  
  
  @endsection