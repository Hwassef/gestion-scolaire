@component('mail::message')
# Gestion Scoalire
Welcome {{$departmentAdmin -> full_name}} ,


Your login information:


    Email: {{$departmentAdmin -> email}}

    Password: {{$departmentAdmin -> bla}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
