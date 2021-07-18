@component('mail::message')
# Hello, {{ $karmabhomi->name }}
<p>We Received Your form  with some details as,</p>

 व्यवसायको नाम: <p>{{ $karmabhomi->ob3 }}</p>
 व्यवसायको किसिम: <p>{{ $karmabhomi->ob2 }}</p> 


Thanks,<br>
{{ config('app.name') }}
@endcomponent
