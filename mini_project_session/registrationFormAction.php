<?php
include("connection.php");
//$userid=$_REQUEST['userid'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$password=md5($_REQUEST['password']);
$DOB=$_REQUEST['DOB'];
$gender=$_REQUEST['gender'];
$course=$_REQUEST['course'];
$language=implode(",",$_REQUEST['language']);

$filename=$_FILES["uploadimage"]["name"];
$tempname=$_FILES["uploadimage"]["tmp_name"];

$folder='stud/'.$filename;
	move_uploaded_file($tempname,$folder);
	//echo "<img src='$folder'>";

	//print_r($filename);


//echo $name , $address, $email, $mobile,$password,$DOB,$gender,$course,$language;


 

 $query="SELECT * FROM registration where email='$email'";

 
 $data= mysqli_query($conn,$query);
 $count=mysqli_num_rows($data);

if($count==0){

	$query1="INSERT INTO `registration`(`userid`, `name`, `address`, `email`, `mobile`, `password`, `DOB`, `gender`, `Course`, `Language`, `Image`) VALUES ('','$name','$address','$email','$mobile','$password','$DOB','$gender','$course','$language','$folder')";
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