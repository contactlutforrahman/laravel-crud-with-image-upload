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

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ URL::to('/student/save') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

                <div class="form-group">
                    <label for="exampleInputEmail1"> Student Photo </label>
                    <input type="file" class="form-control" name="student_photo" id="student_photo" onchange="loadFile(event)">
                </div>

                <div class="form-group">
                    <img id="student_pic" height="100" width="100"/>
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

<script>
    function loadFile(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('student_pic');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
</html>