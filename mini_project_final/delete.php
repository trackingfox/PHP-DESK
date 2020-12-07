<?php
include("connection.php");
$id=$_REQUEST['del'];

$query= "DELETE FROM registration where userid='$id'";
$data =mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Delete successful')</script>";
	echo "<script>window.location.href='display.php'</script>";
}
else{
	echo "delete not successful";
}

?>