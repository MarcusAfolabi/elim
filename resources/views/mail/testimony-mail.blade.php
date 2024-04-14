<x-mail::message>
# Hi there,

New Testimony Received

Name: {{ $testimonyData['name'] }}

Phone: {{ $testimonyData['phone'] }}

Message: {{ $testimonyData['message'] }}

Blessings,<br>
{{ config('app.name') }}
</x-mail::message>
