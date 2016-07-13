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
<h3 class="text-center"> All Students </h3>

<div class="container-fluid">
    <div class="row">

        @if(Session::has('deleted_message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('deleted_message') }}
            </div>
        @endif


        <div class="col-md-8 col-md-offset-2">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>
                            Student ID
                        </td>
                        <td>
                            Student Roll
                        </td>
                        <td>
                            Student Name
                        </td>
                        <td>
                            Department Name
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                @if(isset($students))
                    @foreach($students as $student)
                        <tr>
                            <td>
                                {{ $student->student_id }}
                            </td>
                            <td>
                                {{ $student->student_roll }}
                            </td>
                            <td>
                                {{ $student->student_name }}
                            </td>
                            <td>
                                {{ $student->department_name }}
                            </td>
                            <td>
                                <a href="{{ URL::to('/student/show/'.$student->id) }}"> Details </a> &nbsp; <a href="{{ URL::to('/student/edit/'.$student->id) }}"> Edit </a> &nbsp; <a href="{{ URL::to('/student/delete/'.$student->id) }}" onclick="return checkDelete();"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">

    function checkDelete(){
        var $chk = confirm('Are You Sure You Want To Delete This?');
        if ($chk) {
            return true;
        } else{
            return false;
        }
    }
</script>
</body>
</html>