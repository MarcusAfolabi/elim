<x-mail::message>
# Hi there,

New Men Fellowship Form

Name: {{ $formData['name'] }}

Email: {{ $formData['email'] }}

Address: {{ $formData['address'] }}

City: {{ $formData['city'] }}

State: {{ $formData['state'] }}

Phone: {{ $formData['phone'] }}

Age Bracket: {{ $formData['ageBracket'] }}

Hobbies: {{ $formData['hobbies'] }}

Occupation: {{ $formData['occupation'] }}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
