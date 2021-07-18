@component('mail::message')
# Introduction

The body of your message.
Password : {{$password}}
 User: {{$user['email']}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
