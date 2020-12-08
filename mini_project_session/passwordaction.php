<?php
session_start();
include("connection.php");
//$userid=$_REQUEST['userid'];
//$uid=$_REQUEST['uid'];
$id=$_SESSION['id'];

$oldpass=md5($_REQUEST['old']);
$newpass=md5($_REQUEST['new']);
$conpass=md5($_REQUEST['confirm']);

if($oldpass!=$newpass)
{
	if($newpass==$conpass)
	{
		$query="UPDATE `registration` SET `password`='$newpass' where userid='$id'";

		 //echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language,$folder;

			$data= mysqli_query($conn,$query);

		if($data){
			//echo "update password successful";
			header('location:login.php');
			}
		else{
   			echo "not updated";
		}

	}

	else{
		echo "new and confirm password are not same";
	}
}

else{
	echo "password already exist";
}

?>