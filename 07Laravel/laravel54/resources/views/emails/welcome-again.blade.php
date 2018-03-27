@component('mail::message')
# Introduction

Thanks very much for registration.

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel')
Some inspirational quate to go here :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
