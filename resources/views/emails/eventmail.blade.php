@component('mail::message')

New Event is Added  
Event Title : <p>{{$events['title']}}</P>
Event Location : <p>{{$events['location']}}</P>
Event Date : <p>{{$events['date']}}</P>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
