@component('mail::message')
    Welcome {{ucfirst($user->salutation)}} {{ucfirst($user->username)}}, you have been added as an admin in {{ config('app.name') }}. You can now log in by clicking the button below with the following credentials:

- **email:** {{$user->email}}
- **password:** {{$password}}

@component('mail::button', ['url' => 'http://localhost/church/public/admin_church'])
Log In
@endcomponent

@endcomponent
