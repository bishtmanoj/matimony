@component('mail::message')
# Dear {{$user->firstname}},

Thank you for your interest in our portal. Please verify your email to proceed further.

@component('mail::button', ['url' => route('sessions.verify.email',[$reset->user_id, $reset->id,$reset->token])])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
