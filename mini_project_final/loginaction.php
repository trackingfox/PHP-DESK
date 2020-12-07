<?php
include("connection.php");

$email=$_REQUEST['email'];
$pass=md5($_REQUEST['password']);



$query="SELECT * FROM registration where email='$email' AND password='$pass'";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total){	
	//echo "login successful";
	  header('location:display.php');	
}

else{
	echo "Login failure";
}

?>