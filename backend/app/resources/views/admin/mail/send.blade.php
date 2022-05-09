@component('mail::message')
# Dear {{$name}}

{{$message}}

Thanks, for using our platform<br>
send to {{$email}} from admin
@endcomponent
