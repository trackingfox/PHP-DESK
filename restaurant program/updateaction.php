<?php
include("connection.php");
//$userid=$_REQUEST['userid'];
$uid=$_REQUEST['uid'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$password=md5($_REQUEST['password']);
$room=$_REQUEST['room'];
$food=$_REQUEST['food'];
$drink=implode(",",$_REQUEST['drink']);
$payment=$_REQUEST['payment'];
$table=$_REQUEST['table'];

// $language=implode(",",$_REQUEST['language']);

// $filename=$_FILES["uploadimage"]["name"];
// $tempname=$_FILES["uploadimage"]["tmp_name"];

// $folder='stud/'.$filename;
// 	move_uploaded_file($tempname,$folder);
// 	echo "<img src='$folder'>";

// 	print_r($filename);


//echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language;


 $query="UPDATE `restaurant` SET `name`='$name',`address`='$address',`phone`='$mobile',`room`='$room',`food`='$food',`extra_drink`='$drink',`table`='$table',`payment`='$payment',`email`='$email',`password`='$password' where userid='$uid';";

 //echo $name,$address, $email, $mobile, $password,$room,$food,$drink ,$table, $payment;



$data= mysqli_query($conn,$query);

if($data){
	//echo "update data successful";

	header('location:display.php');
}
else{
   echo "not updated";
}

?>