<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show MySQL DB Data</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container">

        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="row col-md-12">
            <h3>Message</h3>
            <div class="col-md-2">



                <p>Message id:<?php echo e($loop->iteration); ?> </p>
            </div>
            <div class="col-md-10">
                <p><?php echo e($message->text); ?></p>
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
            <?php $__currentLoopData = $message->responce; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($mess->user_name); ?></td>
                <td><?php echo e($mess->dep_name); ?></td>
                <td><?php echo e($mess->responce); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
</body>
</html>