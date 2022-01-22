<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Department Admin</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/crud_modal.css') }}>

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary rounded-pill" id="showForm"><i class="fas fa-user-plus fa-1x"></i> Add External Admin</button>
        </div>
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Department</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
