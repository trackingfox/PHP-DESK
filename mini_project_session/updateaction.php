<?php
session_start();
include("connection.php");
//$userid=$_REQUEST['userid'];
//$uid=$_REQUEST['uid'];
$id=$_SESSION['id'];

$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
//$password=md5($_REQUEST['password']);
$DOB=$_REQUEST['DOB'];
$gender=$_REQUEST['gender'];
$course=$_REQUEST['course'];
$language=implode(",",$_REQUEST['language']);

$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];

$folder='stud/'.$filename;
	move_uploaded_file($tempname,$folder);
	echo "<img src='$folder'>";

	print_r($filename);


//echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language;


 $query="UPDATE `registration` SET `name`='$name', `address`='$address', `email`='$email', `mobile`='$mobile', `DOB`='$DOB', `gender`='$gender', `Course`='$course', `Language`='$language', `Image`='$folder' where userid='$id'";

 //echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language,$folder;



$data= mysqli_query($conn,$query);

if($data){
	//echo "update data successful";

	header('location:display.php');
}
else{
   echo "not updated";
}

?>