<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>

</head>

<body style="background: white;">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/10376d63f8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('images/4457.jpg')}}" width="600" height="700">
            </div>
            <div class="col-1">
                <hr style=" border:none;border-left:1px solid hsla(200, 10%, 50%,100);height:100vh;width:1px;">
            </div>
            <div class="col-5">
                <h5>Login As :</h5>
                <div class="d-flex flex-row border-0">
                    <div class="card">
                        <div class="card-header p-2"> <a href="#studentLoginForm" id="studentLoginPage">Student</a></div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2"> <a href="#professorLoginForm" id="professorLoginPage">Professor</a></div>
                    </div>
                    <div class="card">
                        <div class="card-header p-2"> <a href="#departmentAdminLoginForm" id="departmentAdminLoginPage">Department Admin</a></div>
                    </div>
                </div>
                <!-- Student Login Form -->
                <form action="" method="post" class="mt-5" id="studentLoginForm">
                    <h4>Student Login Form</h4>
                    <div class="row mt-5">
                        <div class="col">
                            <label for="">E-mail: </label>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Password: </label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"></div>
                        <div class="col">
                            <button class="btn btn-outline-primary" type="submit" style="width: 260px;">Login</button>
                        </div>
                    </div>
                </form>

                <!-- Professor Login Form -->
                <form action="" method="post" class="mt-5" id="professorLoginForm" style="display: none;">
                    <h4>Professor Login Form</h4>
                    <div class="row mt-5">
                        <div class="col">
                            <label for="">E-mail: </label>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Password: </label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"></div>
                        <div class="col">
                            <button class="btn btn-outline-primary" type="submit" style="width: 260px;">Login</button>
                        </div>
                    </div>
                </form>
                <!-- Department Admin Login Form -->
                <form action="{{route('departmentadmin.login')}}" method="post" class="mt-5" id="departmentAdminLoginForm" style="display: none;">
                    @csrf
                    <h4>Department Admin Login Form</h4>
                    <div class="row mt-5">
                        <div class="col">
                            <label for="">E-mail: </label>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Password: </label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col"></div>
                        <div class="col">
                            <button class="btn btn-outline-primary" type="submit" style="width: 260px;">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $("#studentLoginPage").click(function() {
            $("#studentLoginForm").show(600);
            $("#professorLoginForm").hide();
            $("#departmentAdminLoginForm").hide();
        });
        $("#professorLoginPage").click(function() {
            $("#professorLoginForm").show(600);
            $("#studentLoginForm").hide();
            $("#departmentAdminLoginForm").hide();
        });
        $("#departmentAdminLoginPage").click(function() {
            $("#departmentAdminLoginForm").show(600);
            $("#studentLoginForm").hide();
            $("#professorLoginForm").hide();
        });
    </script>
</body>

</html>
