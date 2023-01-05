<x-mail::message>
# Introduction
Message for you from
<b>{{$name}}</b>
<br>
Message:
<br>
{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
