<?php
session_start();
include("connection.php");
$id=$_SESSION['id'];
$query="SELECT * FROM registration where userid='$id'";
$data =mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
//print_r ($result);
?>
<h1>Profile:</h1>
name: <?php echo $result['name'] ?><br>
email: <?php echo $result['email']?><br>
address: <?php echo $result['address'] ?><br>
mobile: <?php echo $result['mobile']?><br>
password: <?php echo $result['password'] ?><br>
DOB: <?php echo $result['DOB']?><br>
Gender: <?php echo $result['gender'] ?><br>
Course: <?php echo $result['Course']?><br>
Language: <?php echo $result['Language'] ?><br>
Image: <img src="<?php echo $result['Image'] ?>" height="100" width="100"><br>

<a href="edit.php">edit</a>
<a href="password.php">password</a>
<a href="logout.php">logout</a>