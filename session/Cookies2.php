
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>Cookies</h1>
	<form action="" name="myform" method="POST">
		Email:<input type="email" name="email"><br><br>
		<input type="submit" value="Submit" name="set">
	</form>
	<hr>

<?php
	//setting the cookie

	$cookie_name ='user_email';
	if(isset($_POST['set'])){
		$cookie_value = $_POST['email'];
		$cookie_expire = time()+5;
		setcookie($cookie_name, $cookie_value, $cookie_expire);
	}

//reading the cookie
	if(isset($_COOKIE[$cookie_name])){
		echo "Cookie Name is ".$cookie_name." and value is ".$_COOKIE[$cookie_name]."<br>";
	}

	else{
		echo "Cookie not set";
	}


?>			

</body>
</html>	
