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
        <div class="d-flex flex-row border-0 justify-content-center">
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageClassesList')}}" id="">Manage Classes List</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageProfessorsList')}}" id="">Manage Professors List</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.manageSubjectsList')}}" id="">Manage Subjects List</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.addStudents')}}" id="">Add Students</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.displayClassesList')}}" id="">Manage Notes For Each Class</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.displayAddTimeSchedule')}}" id="">Add Time Schedule</a></div>
            </div>
            <div class="card">
                <div class="card-header p-2"> <a href="{{route('departmentadmin.chooseType')}}" id="">Upload Time Schedule</a></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
