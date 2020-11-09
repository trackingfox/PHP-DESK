<?php


	if(!isset($_COOKIE['user'])){
	
		setcookie('user','today is saturday',time()+15) or die("could not set cookie variable");
		echo $_COOKIE['user']."<br>";
		
	}

	else{
		//$_SESSION['count']=$_SESSION['count']+1;
		setcookie('user1','Hello Sharif',time()+5);
		echo $_COOKIE['user1']."<br>";				
	}

	//session_destroy();

?>