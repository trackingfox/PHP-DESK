
<html>
<head>
	<title>Create new account</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/signup.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p> Fill out this form and start chatting</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Example:Sharif" autocomplete="off" required>
			</div>	
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="email address" autocomplete="off" required>
			</div>

			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
					<option disabled="">Select a Country</option>
					<option>Pakistan</option>
					<option>USA</option>
					<option>India</option>
					<option>UK</option>
					<option>bangladesh</option>
					<option>France</option>
				</select>	
			</div>


			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>				
				</select>	
			</div>

			<div class ="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the
					<a href="#">Terms of Use</a>&amp; <a href="#">Privacy Policy</a></label>
			</div>


			<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<!--<?php //include("signup_user.php"); ?>-->			
		</form>
		<div class="text-center small" style="color: #674288;">Already have an account<a href="signin.php">Signin here</a></div>	
	</div>	

</body>
</html>