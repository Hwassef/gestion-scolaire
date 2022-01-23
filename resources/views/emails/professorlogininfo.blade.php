@component('mail::message')
# Gestion Scoalire
Welcome {{$professor -> full_name}} ,


Your login information:


    Email: {{$professor -> email}}

    Password: {{$professor -> password}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
