@component('mail::message')
# Dobili ste novi E-mail

Poslao/la: {{ $data['name'] }} <br>
E-mail pošiljatelja: {{ $data['email'] }}.<br><br>
Poruka: <br> {{ $data['message'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
