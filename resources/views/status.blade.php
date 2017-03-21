<!DOCTYPE html>
<html lang="en">
<head>
    <title>Status</title>

    <meta charset="utf-8">
    <link href="css/font-awesome.css" rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel='stylesheet' type='text/css'>
    <script src="js/func.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
@endif
</div>
    </div>
</body>
</html>