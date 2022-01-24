<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notes</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    @notifyCss
</head>

<body>

    <div class="container">
        <h4>Subjects List</h4>
        <form action="/department_admin/classes_list/{{request()->route('id')}}/{{request()->route('subjectName')}}" method="post">
            @csrf
            <table class="table table-hover">
                <thead>
                    <th scope="col">Code</th>
                    <th scope="col">Note</th>
                </thead>
                <tbody>
                    @foreach($studentCodes as $studentCode)
                    <tr>
                        <td style="display: none;"><input type="text" name="studentId[]" id="" value="{{$studentCode -> student_id}}"></td>
                        <td class="studentId" style="display: none;"></td>
                        <td>{{$studentCode -> code}}</td>
                        <td>
                            <input type="number" name="note[]" class="form-control" placeholder="Add Note">
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <button class="btn btn-primary" type="submit">Add Notes</button>
        </form>
        <form action="/department_admin/classes_list/{{request()->route('id')}}/{{request()->route('subjectName')}}/generate" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Generate Codes</button>

        </form>
        <x:notify-messages />
        @notifyJs
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
