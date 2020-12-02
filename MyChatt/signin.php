
<html>
<head>
	<title>Login to your account</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/signin.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Login To My Chat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="abc@site.com" autocomplete="off" required>
			</div>	
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="pass" placeholder="password" autocomplete="off" required>
			</div>

			<div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
			<!--<?php //include("signin_user.php"); ?>-->			
		</form>
		<div class="text-center small" style="color: #674288;">Don't have an account?<a href="signup.php">Create one</a></div>	
	</div>	

</body>
</html>