<x-mail::message>
# Hi there,


New Choir membership form

Name: {{ $choirData['name'] }}

Address: {{ $choirData['address'] }}

Gender: {{ $choirData['gender'] }}

Part: {{ $choirData['part'] }}

Can Backup?: {{ $choirData['backup'] }}

Can score song?: {{ $choirData['score_song'] }}

Favourite genre: {{ $choirData['genre'] }}

Email: {{ $choirData['email'] }}

Phone: {{ $choirData['phone'] }}

Reason for admission: {{ $choirData['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
