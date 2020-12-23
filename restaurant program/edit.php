<?php
include("connection.php");

$uid=$_REQUEST['ep'];
$query="SELECT *FROM restaurant where userid='$uid'";
$data= mysqli_query($conn,$query);

$result =mysqli_fetch_assoc($data);

//print_r($result);
//echo "<br>";
//echo $result['name'];


?>
<form  method="post" action="updateaction.php" enctype="multipart/form-data"  onsubmit="return fun()">

	<input type="text" name="uid" value="<?php echo $uid ?>" hidden  ><br>

		<table border="2" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2"
				style="color:red"><h1><center>HAPPY RESTAURANT</center></h1></td>
			</tr>
			<tr>
				<td>Enter any name:</td>
				<td><input type="text" id="name" name="name" value="<?php echo $result['name'] ?>"></td>
			</tr>
			
			<tr>
				<td>Enter address:</td>
				<td><input type="text" id="address" name="address" value="<?php echo $result['address'] ?>"></td>
			</tr>
			<tr>
				<td>enter Mobile no:</td>
				<td><input type="text" id="mobile" name="mobile" value="<?php echo $result['phone'] ?>"></td>
			</tr>
		
			
			<tr>
				<td>enter email:</td>
				<td><input type="email" id="myemail" name="email" value="<?php echo $result['email'] ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter email" required> 
				</td>
			</tr>
			<tr>
				<td>Room:</td>
				<td><input type="radio" name="room" id="ac" value="AC" <?php 
				if($result['room']=="AC"){
					echo "checked";} ?>> AC
					<input type="radio" name="room" id="nonac" value="NonAC" <?php 
				if($result['room']=="NonAC"){
					echo "checked";} ?>>NONAC
			</tr>
			<tr>
				<td>Food:</td>
				<td><select id="food" name="food">
		             <option>Select</option>
		             <option value="Fried Rice">Fried Rice</option>
		             <option value="Biriyani">Biriyani</option>
		       		 <option value="Chili chicken">Chili Chicken</option>
		       		 <option value="Butter Chicken Masala">Butter Chicken Masala</option>
		       		 <option value="Tandoori">Tandoori</option>
		       		 <option value="Dal Makhani">Dal Makhani</option>
		       		 <option value="Aloo Paratha">Aloo Paratha</option>

		   	     </select></td>
			</tr>
			<tr>
				<td>Extra Drink:</td>
				<td> 
					<?php $drink=$result['extra_drink']; $drinkArray=explode(",",$drink); ?><input type ="checkbox" id="drink" name="drink[]" value="Pepsi"<?php if(in_array("Pepsi",$drinkArray)){echo "checked";}?>>Pepsi
		    		<input type ="checkbox" id="drink" name="drink[]" value="Mirinda" <?php if(in_array("Mirinda",$drinkArray)){echo "checked";}?>>Mirinda          
           			<input type ="checkbox" id="drink" name="drink[]" value="Sprite" <?php if(in_array("Sprite",$drinkArray)){echo "checked";}?>>Sprite</td>
			</tr>
			<tr>
				<td>Table:</td>
				<td><select id="table" name="table">
		             <option>Select</option>
		             <option value="Formal">Formal</option>
		             <option value="Casual">Casual</option>
		       		 <option value="Basic">Basic</option>
		       		 
		   	     </select></td>
			</tr>
			
				
			<tr>
				<td>Payment:</td>
				<td><input type="radio" name="payment" id="pay1" value="online" <?php 
				if($result['payment']=="online"){
					echo "checked";} ?>> Online
					<input type="radio" name="payment" id="pay2" value="offline" <?php 
				if($result['payment']=="offline"){
					echo "checked";} ?>>Offline
			</tr>
			<tr>
				<td>enter email:</td>
				<td><input type="email" id="myemail" name="email" value="<?php echo $result['email'] ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter email" required> 
				</td>
			</tr>
			<tr>
				<td>enter password:</td>
				<td><input type="password" id="pass" name="password"></td>
			</tr>
			<tr>
				<td> <input type="submit" name="update" value="update"></td>
				<td><input type="reset" name="reset" value="reset"></td>
			</tr>


		</table>
		
	</form>

