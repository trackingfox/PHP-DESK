
<!DOCTYPE html>
<html>
<head>
	<title>PHP1</title>
</head>
<body>
	<h1>Cookies</h1>
	<form action="" name="myform" method="POST">
		<input type="submit" name="PHP1" value="PHP"> VS
		<input type="submit" name="ASP" value="ASP.NET">
	</form>
	<hr>

<?php

	
	
	$cookie_name ='user';

	if(isset($_POST['PHP1'])){
		$cookie_value = 'Thanks for voting';
		$cookie_expire = time()+10;
		
		setcookie($cookie_name, $cookie_value, time()+10);

		if(isset($_COOKIE[$cookie_name]))
			echo $_COOKIE['user']."<br>";
		
	}
	 if(isset($_COOKIE['user'])){
		if(isset($_POST['ASP']))
			 echo "Already voted in PHP";
		
	}	
	
	

	 
	
   
?>			

</body>
</html>	
