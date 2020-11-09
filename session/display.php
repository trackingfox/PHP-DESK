<?php

	session_start();
	if(isset($_POST['username']) || isset($_POST['degree']))
	{
		$uname=$_POST['username'];
		$deg=$_POST['degree'];
		$deg=$_POST['password'];
		$deg=$_POST['email'];
		$deg=$_POST['phone'];


		$_SESSION['uname']=$uname;
		$_SESSION['deg']=$deg;
		$_SESSION['pass']=$deg;
		$_SESSION['email']=$deg;
		$_SESSION['phone']=$deg;

		echo $_SESSION['uname'];
		echo "<br>";
		echo $_SESSION['deg'];
		echo "<br>";
		echo $_SESSION['pass'];
		echo "<br>";
		echo $_SESSION['email'];
		echo "<br>";
		echo $_SESSION['phone'];
		echo "<br>";
		
		session_destroy();
		echo $_SESSION['uname'];
	}

?>

