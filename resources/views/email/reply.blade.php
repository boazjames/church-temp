@component('mail::message')

    {{$message}}

@component('mail::button', ['url' => 'http://localhost/church/public'])
    Visit our website
@endcomponent

@endcomponent
