<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.2 CRUD Application</title>

    <link href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<h3 class="text-center"> Student Details </h3>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-4  col-md-offset-5">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Student ID : </label>
                    {{ $student->student_id }}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Roll : </label>
                    {{ $student->student_roll }}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Name : </label>
                    {{ $student->student_name }}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Department Name : </label>
                    {{ $student->department_name }}
                </div>

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>