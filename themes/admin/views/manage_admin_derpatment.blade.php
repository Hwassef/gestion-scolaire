<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Department Admin</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/crud_modal.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/10376d63f8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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

        <form action="{{route('admin.addDeoartmentAdmin')}}" method="POST" id="addDepartmentAdmin" style="display: none; transition-timing-function: ease-in;" class="hide">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="full_name">Full Name</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="department">Department</label>
                </div>
                <div class="col">
                    <select class="selectpicker" name="department">
                        <option value="informatique">Informatique</option>
                        <option value="gestion">Gestion</option>
                        <option value="mecanique">Mecanique</option>
                        <option value="electrique">Electrique</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="exampleInputEmail1">Email address</label>
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="exampleInputPassword1">Password</label>
                </div>
                <div class="col">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3 mb-5">
                <button type="submit" class="btn btn-success" style="width: 110px;"><i class="fas fa-plus-circle"></i> Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#showForm').on('click', function() {
                $('#addDepartmentAdmin').css('display', 'block').animate();
            });
        })
    </script>
</body>

</html>
