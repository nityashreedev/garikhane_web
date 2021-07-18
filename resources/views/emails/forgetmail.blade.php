@component('mail::message')

<h2>Hello!</h2>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p>Here is your temorary password</p>
<h3>Temporary Password</h3><h4>{{$randomPassword}}</h4>
<h3>Email</h3><h4>{{$email}}</h4>


Thanks,<br>
{{ config('app.name') }}
@endcomponent