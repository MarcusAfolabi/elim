<x-mail::message>
# Hello there,

New Men Fellowship Form

Name: {{ $appointmentData['name'] }}

Phone: {{ $appointmentData['phone'] }}

Email: {{ $appointmentData['email'] }}

Message: {{ $appointmentData['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
