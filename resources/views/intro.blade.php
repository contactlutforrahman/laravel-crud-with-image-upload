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
<h3 class="text-center"> Create Student </h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ URL::to('') }}">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Student ID </label>
                    <input type="text" class="form-control" name="student_id" id="exampleInputEmail1" placeholder="Student ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Roll </label>
                    <input type="text" class="form-control" name="student_roll" id="exampleInputEmail1" placeholder="Student Roll">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Name </label>
                    <input type="text" class="form-control" name="student_name" id="exampleInputEmail1" placeholder="Student Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"> Department Name </label>
                    <input type="text" class="form-control" name="department_name" id="exampleInputEmail1" placeholder="Department Name">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>