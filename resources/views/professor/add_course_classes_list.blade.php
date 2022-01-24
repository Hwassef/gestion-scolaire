<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes List</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Class Name</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach($classesFromSubjects as $classesFromSubject)
                <tr>
                    <th>{{$counter += 1}}</th>
                    <td>{{$classesFromSubject -> class_name}}</td>

                    <td>
                        <a href="/professor/add_course/{{$classesFromSubject -> class_id}}">Start Adding Notes</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
