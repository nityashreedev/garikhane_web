@component('mail::message')

Response from {{$title}} 

Description : <p>{{$reply}}</P>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
