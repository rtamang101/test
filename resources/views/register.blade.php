<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>

	<meta charset="utf-8">
	<link href="css/font-awesome.css" rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'><meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link href="css/style.css" rel='stylesheet' type='text/css'> -->
	<script src="../public/js/func.js"></script>
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

		<div class="col-md-6">

			<form class="form-horizontal" action="register" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<fieldset>
					<div id="legend">
						<legend class="">Register Page</legend>
					</div>
					<div class="control-group">
						<label class="control-label" for="username">Name</label>
						<div class="controls">
							<input type="text" id="username" name="name" placeholder="" class="form-control input-lg">
							<!-- <p class="help-block">First or Last name without spaces</p> -->
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">E-mail</label>
						<div class="controls">
							<input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
							<p class="help-block">Please provide your E-mail</p>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
							<p class="help-block">Password should be at least 6 characters</p>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="password_confirm">Password (Confirm)</label>
						<div class="controls">
							<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="form-control input-lg">
							<p class="help-block">Please confirm password</p>
						</div>
					</div>
					<div>
						<h6>Select department</h6>
						<select name="department_id">
							@foreach($dep as $depp)
								<option value="{{$depp->id}}">{{$depp->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="control-group">
						<!-- Button -->
						<div class="controls">
							<button class="btn btn-success" type="submit">Register</button>
						</div>
					</div>
				</fieldset>
			</form>

		</div>
	</div>
</div>



</body>
</html>







