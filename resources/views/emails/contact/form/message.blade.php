@component('mail::message')
    # Hey Hugo

    From :{{ $msg->name }}
    Email :{{ $msg->email }}

    Message :
        {{ $msg->message }}

    Thanks,
    {{ config('app.name') }}
@endcomponent
