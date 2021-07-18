<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Garikhane </title>
    <link rel="icon" href="{{asset('front/assets/images/logo-Garikhane_Final.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Karmabhoomi Samaj" name="description"/>
    <meta content="Karmabhoomi Samaj" name="author"/>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    @include('admin.include.styles')

</head>
<body>
<div id="wrapper">
    @include('admin.include.header')
    @include('admin.include.sidebar')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                @include('admin.flashmessage.message')
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.include.footer')
</div>
@include('admin.include.scripts')

<script>
    var baseUrl = "{{url('/')}}";
</script>

@yield('scripts')

</body>

</html>
