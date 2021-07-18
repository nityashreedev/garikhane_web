@component('mail::message')

New Job is Added  

Job Title : {{$jobs['title']}} <br>
Location :{{$jobs['location']}} 



Thanks,<br>
{{ config('app.name') }}
@endcomponent
