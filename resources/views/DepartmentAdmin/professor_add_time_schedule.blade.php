<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    @notifyCss

</head>

<body>
    <div class="container mt-5">
        <h1>Add Time Schedule</h1>
        <form action="/department_admin/upload_time_schedule/professors_list/{{ request()->route('id') }}" method="post" enctype="multipart/form-data" class="mt-5">
            @csrf
            <input type="file" name="time_schedule" class="form-control">
            <button type="submit" class="btn btn-primary mt-5">Upload</button>
        </form>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
    <x:notify-messages />
    @notifyJs
</body>

</html>
