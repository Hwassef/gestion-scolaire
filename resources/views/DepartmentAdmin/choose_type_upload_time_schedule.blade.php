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
    <div class="container mt-5">
        <h3 class="text-center">Upload For: </h3>
        <div class="d-flex flex-row border-0 justify-content-center mt-5">
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.classesList')}}" id="">Classes</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.professorsList')}}" id="">Professors</a></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
