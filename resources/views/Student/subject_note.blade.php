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
                <th scope="col">Note</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$note -> note}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
