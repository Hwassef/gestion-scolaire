@component('mail::message')
# Gestion Scoalire
Welcome {{$student -> full_name}} ,


Your login information:


    Email: {{$student -> email}}

    Password: {{$student -> password}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
