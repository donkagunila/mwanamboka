@component('mail::message')
Hi {{ $user->username }}.

You have successfully register at Usajili.

Fortu will have to Create a welcome Email template here, 
Please be patient itakuja tu.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
