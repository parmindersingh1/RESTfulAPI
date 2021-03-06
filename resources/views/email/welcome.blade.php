@component('mail::message')
Hello {{ $user->name }}

Thank you for creating a new account. 
Please verify you email using this button:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Verify account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
