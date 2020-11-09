<?php

	session_start();

	if(!isset($_SESSION['count'])){
	
		$_SESSION['count']=1;
		echo "page views : ".$_SESSION['count'];
		// $_SESSION['uname']="SHARIF ALI";
		// $_SESSION['deg']="BTECH";
	}
	else{
		$_SESSION['count']=$_SESSION['count']+1;
		echo "page views : ".$_SESSION['count'];
		echo "<br>";
		}
		
		
		//session_unset();
		session_destroy();

		//echo $_SESSION['uname'];
	
?>

