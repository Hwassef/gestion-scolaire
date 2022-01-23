<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
    @notifyCss
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/10376d63f8.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary rounded-pill" id="showForm"><i class="fas fa-user-plus fa-1x"></i> Add New Student</button>
        </div>
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Department</th>
                <th scope="col">Classe</th>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$counter += 1}}</th>
                    <td>{{$student -> full_name}}</td>
                    <td>{{$student -> email}}</td>
                    <td>{{$student -> department}}</td>
                    <td>{{$student -> classe}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{route('departmentadmin.addStudent')}}" method="POST" id="addStudent" style="display: none; transition-timing-function: ease-in;" class="hide">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="class_name">Full Name</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="full_name" placeholder="Enter Student Full Name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="class_name">E-mail</label>
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" placeholder="Enter Student E-mail">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="department">Department</label>
                </div>
                <div class="col">
                    <select class="selectpicker show-tick" name="department">
                        <option value={{Auth::guard('admins_department')->user()->department}}>{{Auth::guard('admins_department')->user()->department}}</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="classe">Classe : </label>
                </div>
                <div class="col">
                    <select class="selectpicker show-tick" name="classe">
                        @foreach($classes as $classe)
                        @if($classe -> department = 'Informatique')
                        <option value={{$classe -> class_name}}>{{$classe -> class_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3 mb-5">
                <button type="submit" class="btn btn-success" style="width: 110px;"><i class="fas fa-plus-circle"></i> Save</button>
            </div>
        </form>
        <x:notify-messages />
        @notifyJs
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#showForm').on('click', function() {
                $('#addStudent').css('display', 'block').animate();
            });
        })
    </script>

</body>

</html>
