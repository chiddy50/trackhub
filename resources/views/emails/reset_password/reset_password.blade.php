
 @component('mail::message')
# Reset Password

<p>Hi, {{ $data['user']->firstname }}, {{ $data['user']->lastname }}</p>
<p>Please click the link below to reset your password</p>

@component('mail::button', ['url' => '{{ $data['url'] }}'])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
