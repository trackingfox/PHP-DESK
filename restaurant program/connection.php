<?php
$servername="localhost";
$username="root";
$password="";
$db="weekend";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
{
	//echo "connection successful";
}
else
{
	//echo "not connected";
	die("connection is lost because ".mysqli_connect_error());
}
?>