<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <h2>Welcome, user!</h2>

    <div class="col-md-12">
        <div class="col-md-2" style="padding-top:2%;">
            <div class="btn-group-vertical">

                <!--
                <a href="get_message/{{$dep_id}}/{{$id}}">button</a>
                -->
                <a type="button" class="btn btn-default">Home</a>
                <a type="submit" class="btn btn-info" href="get_message/{{$dep_id}}/{{$id}}">Messages</a>
                <!--
                <button type="button" class="btn btn-info">Archives</button>
                <button type="button" class="btn btn-default">Consents</button>
                -->
            </div>
        </div>
        <br/>
        <div class="col-md-10">

            <form>
                <div class="form-group">
                    <div class="jumbotron">
                        <h2><b>Organizational announcements!</b></h2>
                        <h3 style="color: orange;">Click Message Button to See Latest Alert!</h3>

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>