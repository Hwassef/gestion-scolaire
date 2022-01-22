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
        <div class="d-flex flex-row border-0">
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageClassesList')}}" id="">Manage Classes List</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageProfessorsList')}}" id="">Manage Professors List</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageSubjectsList')}}" id="">Manage Subjects List</a></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
