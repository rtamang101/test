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
    <h2>Latest Alert!</h2>

    <div class="col-md-12">
        <div class="col-md-2" style="padding-top:2%;">
        </div>
        <br/>
        <div class="col-md-10">


                <div class="form-group">
                    <div class="jumbotron">
                        <h3><b>Organizational announcements!</b></h3>
                        <p>Please read the following changes in our policy and have it signed!</p>
                        <h1 style="color:Orange;">Message:</h1>
                        <h2><?php echo e($user[0]->text); ?></h2>


                    </div>
                </div>


        </div>
    </div>
</div>


<form  class="form-horizontal" method="post" action="send_responce">
    <div class="form-group">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="col-lg-8 col-md-8  ">
            <div class="input-group">


                <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
                <input type="hidden" name="message_id" value="<?php echo e($user[0]->id); ?>">
                <input type="hidden" name="dep_id" value="<?php echo e($d_id); ?>">



            </div>
        </div>
    </div>


    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group fa-align-center ">
                        <button type="submit" class="btn btn-success login-btn   btn-lg hvr-grow-shadow" name="responce" value="accept">Accept</button>
                        <button type="submit" class="btn btn-danger  login-btn   btn-lg hvr-grow-shadow" name="responce" value="decline">Decline</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>

    </div>

</form>


</body>
</html>