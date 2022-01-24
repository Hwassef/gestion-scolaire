<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Professor Name</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach($classes as $classe)
                <tr>
                    <th>{{$counter += 1}}</th>
                    <td>{{$classe -> class_name}}</td>
                    <td>{{Auth::guard('admins_department')->user()->department}}</td>
                    <td>
                        <a href="/department_admin/upload_time_schedule/classes_list/{{$classe -> id}}">Upload</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
