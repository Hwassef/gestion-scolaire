<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects List</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>

    <div class="container">
        <h4>Subjects List</h4>
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Class Name</th>
                <th scope="col">Level</th>
                <th scope="col">Department</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                    <th>{{$counter += 1}}</th>
                    <td>{{$subject -> subject_name}}</td>
                    <td>{{$subject -> professor_name}}</td>
                    <td>{{$subject -> class_name}}</td>
                    <td>{{Auth::guard('admins_department')->user()->department}}</td>
                    <td>
                        <a href="/department_admin/classes_list/{{$subject -> class_id}}/{{$subject -> subject_name}}">Start Adding Notes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
