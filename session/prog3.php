<?php

	session_start();
	if(!isset($_SESSION['count'])){
		$_SESSION['count']=1;
		setcookie('user','today is saturday',time()+15);
		echo $_COOKIE['user']."<br>";
		
	}

	else{
		//$_SESSION['count']=$_SESSION['count']+1;
		setcookie('user','Hello Sharif',time()+5);
		echo $_COOKIE['user']."<br>";				
	}

	//session_destroy();

?>