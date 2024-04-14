<x-mail::message>
# Hi there,

New Salvation Form

Name: {{ $salvationData['name'] }}

Phone: {{ $salvationData['phone'] }}

Address: {{ $salvationData['address'] }}

Prayer Request: {{ $salvationData['prayer'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
