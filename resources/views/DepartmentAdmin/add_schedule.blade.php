<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Time Schedule</title>
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
        <form action="/department_admin/add_time_schedule/{{request()->route('id')}}" method="post">
            @csrf
            <table class="table table-hover">
                <thead>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                        <td style="display: none;">
                            <input type="hidden" name="professorsId[]" id="" value="{{$subject -> professor_id}}">
                        </td>
                        <td style="display: none;">
                            <input type="hidden" name="subjectsId[]" id="" value="{{$subject -> id}}">
                        </td>
                        <td>{{$subject -> subject_name}}</td>
                        <td>
                            <select class="selectpicker show-tick" name="day[]">
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                            </select>
                        </td>
                        <td>
                            <select class="selectpicker show-tick" name="session[]">
                                <option value="s1">S1: 08:15 -> 09:45 AM</option>
                                <option value="s2">S2: 10:00 -> 11:30 AM</option>
                                <option value="s3">S3: 11:45 -> 13:15 PM</option>
                                <option value="s4">S4: 13:15 -> 14:45 PM</option>
                                <option value="s5">S5: 15:00 -> 16:30 PM</option>
                                <option value="s6">S6: 16:30 -> 18:00 PM</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-outline-primary">Save</button>
        </form>
        <x:notify-messages />
        @notifyJs
    </div>
</body>

</html>
