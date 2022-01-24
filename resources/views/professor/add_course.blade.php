<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <div class="container">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary rounded-pill" id="showForm"><i class="fas fa-user-plus fa-1x"></i> Add New Course</button>
        </div>
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
                        <a href="{{asset('storage/'.$course -> course_file ) }}" target="_blank"> view Pdf </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="/professor/add_course/{{request()->route('id')}}/{{request()->route('subjectName')}}" method="post" id="addCourse" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="">Course Name: </label>
                </div>
                <div class="col">
                    <input type="text" name="course_name" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <label for="">Course File: </label>
                </div>
                <div class="col">
                    <input type="file" name="course_file" class="form-control">

                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Save</button>
        </form>
        <x:notify-messages />
        @notifyJs
    </div>
    <script>
        $(document).ready(function() {
            $('#showForm').on('click', function() {
                $('#addCourse').css('display', 'block').animate();
            });
        })
    </script>
</body>

</html>
