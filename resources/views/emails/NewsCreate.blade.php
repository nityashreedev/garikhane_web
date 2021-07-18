@component('mail::message')
New News Has been Added.
        News Title : <p> {{ $news->title }}</p>
        Publish Date: <p>{{ $news->publish_date }}</p>

@component('mail::button', ['url' => 'karmabhomisamaj.com/news'])
    View on Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
