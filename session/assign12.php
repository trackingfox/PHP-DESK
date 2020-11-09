<!DOCTYPE html>
<html>
<head>
<title>PHP1</title>
</head>
<body>
	<h1>Cookies</h1>
	<form action="" name="myform" method="POST">
		<input type="submit" name="rate" value="PHP"> VS
		<input type="submit" name="rate" value="ASP.NET">
	</form>
	

<?php

	if(isset($_POST['rate'])){
		$rate=$_POST['rate'];
		//echo $rate;
		if(isset($_COOKIE['name'])){
			echo "already voted in ".$_COOKIE['name'];
		}
		else{
			setcookie('name',$rate,time()+10);
			echo "thanks for votting";
		}
	}
	
	
		
   
?>			

</body>
</html>	
