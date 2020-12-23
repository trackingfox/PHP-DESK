<?php
include("connection.php");
$query="Select * from restaurant";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

//$result=mysqli_fetch_assoc($data);
//print_r($result);

//echo $result['roll']." "$result['name'];

if($total!=0){

	?>
	<table border="1">
		<tr>
			<th>userid</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>mobile</th>
			<th>room</th>
			<th>password</th>
			<th>Drink</th>
			<th>Table</th>
			<th>Food</th>
			<th>Payment</th>
		
			<th>Action</th>

		</tr>	
	
	<?php

	
	while($result=mysqli_fetch_assoc($data)){
		// echo "<tr>
		// 		<td>".$result['roll']."</td>
		// 		<td>".$result['name']."</td>
		// 	  </tr>"
		?>
		<tr>
			<td><?php echo $result['userid'] ?></td>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['address'] ?></td>
			<td><?php echo $result['email'] ?></td>
			<td><?php echo $result['phone'] ?></td>
			<td><?php echo $result['room'] ?></td>
			<td><?php echo $result['password'] ?></td>
			<td><?php echo $result['extra_drink'] ?></td>
			<td><?php echo $result['table'] ?></td>
			<td><?php echo $result['food'] ?></td>
			<td><?php echo $result['payment'] ?></td>
			
			
			<td><a href="edit.php?ep=<?php echo $result['userid']?>">edit</a>
			<a href="delete.php?del=<?php echo $result['userid']?>">delete</a></td>

		<tr>

		<?php	

	}


}
else{
	echo "no data found";
}
?>

</table>