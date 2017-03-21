<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Archives</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container">

        @foreach($messages as $message)

            <div class="row col-md-12">
            <h3>Message</h3>
            <div class="col-md-2">



                <p>Message id:{{$loop->iteration}} </p>
            </div>
            <div class="col-md-10">
                <p>{{$message->text}}</p>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Department</th>
                <th>Response</th>
            </tr>
            </thead>
            <tbody>
            @foreach($message->responce as $mess)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mess->user_name}}</td>
                <td>{{$mess->dep_name}}</td>
                <td>{{$mess->responce}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            @endforeach
    </div>

</div>
</body>
</html>