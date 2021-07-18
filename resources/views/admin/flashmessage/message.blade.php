@if ($message = Session::get('success'))


<div class="alert alert-success alert-block flash-message">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<h3 style="text-align:center;">{{ $message }}</h3>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block message flash-message">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script>
// $("document").ready(function(){
//     setTimeout(function(){
//        $("div.alert").remove();
//     }, 30000 ); // 5 secs

// });
</script>