<!DOCTYPE html>
<html lang="en">
<head> 
<title>Login Form</title>       

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/font-awesome.css" rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css'>
<script src="js/func.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- FORGOT PASSWORD FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">forgot password</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="glyphicon glyphicon-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="login.blade.php">login here</a></p>
				<p>new user? <a href="register.blade.php">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>
</html>

