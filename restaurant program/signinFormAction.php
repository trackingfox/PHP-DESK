<?php
include("connection.php");
//$userid=$_REQUEST['userid'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$password=md5($_REQUEST['password']);
$payment=$_REQUEST['payment'];
$room=$_REQUEST['room'];
$food=$_REQUEST['food'];
$table=$_REQUEST['table'];
$Xdrink=implode(",",$_REQUEST['language']);

// $filename=$_FILES["uploadimage"]["name"];
// $tempname=$_FILES["uploadimage"]["tmp_name"];

// $folder='stud/'.$filename;
// 	move_uploaded_file($tempname,$folder);
	//echo "<img src='$folder'>";

	//print_r($filename);


//echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language;


 

 $query="SELECT * FROM restaurant where email='$email'";

 
 $data= mysqli_query($conn,$query);
 $count=mysqli_num_rows($data);

if($count==0){

	$query1="INSERT INTO `restaurant`(`userid`, `name`, `address`, `phone`, `room`, `food`, `extra_drink`, `table`, `payment`, `email`, `password`) VALUES ('','$name','$address','$mobile','$room','$food','$Xdrink','$payment','$table','$email','$password')";
	$data1= mysqli_query($conn,$query1);
	if($data1){
		header('location:login.php');
		//echo "insert data successful";
	}
	else{
		echo "Not inserted";
	}
		
}
else{
   echo "already exist";
}

?>