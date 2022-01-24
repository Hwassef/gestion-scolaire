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
                <th scope="col">Course Name</th>
                <th scope="col">Course File</th>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <th>{{$counter += 1}}</th>
                    <td>{{$course -> course_name}}</td>
                    <td>
                        <a href="{{asset('storage/'.$course -> course_file ) }}" target="_blank">
                            Click Here
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
