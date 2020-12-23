<!DOCTYPE html>
<html>
<head>
	<title>abc</title>
</head>
<body>


	<form  method="post" action="signinFormAction.php" enctype="multipart/form-data" onsubmit="return fun()">

		<table border="2" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2"
				style="color:red"><h1><center>Table Booking Form</center></h1></td>
			</tr>
			<tr>
				<td>Enter name:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			
			<tr>
				<td>Enter address:</td>
				<td><input type="text" id="address" name="address"></td>
			</tr>
			
			
			
			<tr>
				<td>enter Mobile no:</td>
				<td><input type="text" id="mobile" name="mobile"></td>
			</tr>
		
			
			
			<tr>
				<td>Room:</td>
				<td><input type="radio" name="room" id="ac" value="AC"> AC
					<input type="radio" name="room" id="nonac" value="NonAC">NONAC
			</tr>
			<span id="s6"></span>
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
				<td> <input type ="checkbox" id="drink" name="language[]" value="Pepsi">Pepsi
		    		<input type ="checkbox" id="drink" name="language[]" value="Mirinda">Mirinda          
           			<input type ="checkbox" id="drink" name="language[]" value="Sprite">Sprite</td>
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
				<td><input type="radio" name="payment" id="pay1" value="online"> Online
					<input type="radio" name="payment" id="pay2" value="offline">Offline
			</tr>
			<tr>
				<td>enter email:</td>
				<td><input type="email" id="myemail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter email" required> 
				</td>
			</tr>
			<tr>
				<td>enter password:</td>
				<td><input type="password" id="pass" name="password"></td>
			</tr>

			
			<tr>
				<td> <input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="reset" value="reset"></td>
			</tr>


		</table>
		
	</form>



<script type="text/javascript">
	

	function fun()
	{


		var c=document.getElementById("name").value;
		if(c=="")
		{
			document.getElementById("s3").innerHTML="**please enter your name";
			document.getElementById("s3").style.color="red";
			return false;

		}

		var d=document.getElementById("address").value;
		if(d=="")
		{
			document.getElementById("s4").innerHTML="**please enter your address";
			document.getElementById("s4").style.color="red";
			return false;

		}



		var i=document.getElementById("myemail").pattern;
		if(i=="")
		{
			document.getElementById("s9").innerHTML="**please enter your email";
			document.getElementById("s9").style.color="red";
			return false;

		}

		var a=document.getElementById("mobile").value;
		if(a=="")
		{
			document.getElementById("s1").innerHTML="**please enter your mobile number";
			document.getElementById("s1").style.color="red";
			return false;

		}

		if(a.length<10)
		{
			document.getElementById("s1").innerHTML="**please enter 10 digit mobile number";
			document.getElementById("s1").style.color="red";
			return false;

		}
		if(a.length>10)
		{
			document.getElementById("s1").innerHTML="**please enter 10 digit mobile number";
			document.getElementById("s1").style.color="red";
			return false;

		}

		if(isNaN(a))
		{
			document.getElementById("s1").innerHTML="**please enter only number";
			document.getElementById("s1").style.color="red";
			return false;

		}

		if(a.charAt(0)!=9 && a.charAt(0)!=8 && a.charAt(0)!=7)
		{
			document.getElementById("s1").innerHTML="**please enter only required number";
			document.getElementById("s1").style.color="red";
			return false;

		}

		/*else
		{
			document.getElementById("s1").innerHTML="**successful";
			document.getElementById("s1").style.color="green";
			return true;
		}*/




		var b=document.getElementById("pass").value;
		if(b=="")
		{
			document.getElementById("s2").innerHTML="**please enter password";
			document.getElementById("s2").style.color="red";
			return false;

		}

		if(b.length<8)
		{
			document.getElementById("s2").innerHTML="**please use 8 digit password";
			document.getElementById("s2").style.color="red";
			return false;
		}
		
		if(b.search(/[0-9]/)==-1)
		{
			document.getElementById("s2").innerHTML="**atleast enter one numerical";
			document.getElementById("s2").style.color="red";
			return false;
		}		
		if(b.search(/[A-Z]/)==-1)
		{
			document.getElementById("s2").innerHTML="**atleast enter one uppercase alphabet";
			document.getElementById("s2").style.color="red";
			return false;
		}

		if((b.search(/#/)==-1 && a.search(/%/)==-1 ))
		{
			document.getElementById("s2").innerHTML="**atleast enter one Special character[#,%]";
			document.getElementById("s2").style.color="red";
			return false;
		}
       

		var e=document.getElementById("dob").value;
		if(e=="")
		{
			document.getElementById("s5").innerHTML="**please enter your DOB";
			document.getElementById("s5").style.color="red";
			return false;

		}

		var f=document.getElementById("male").value;
		if(f=="")
		{
			document.getElementById("s6").innerHTML="**please enter your gender";
			document.getElementById("s6").style.color="red";
			return false;

		}

		var f=document.getElementById("female").value;
		if(f=="")
		{
			document.getElementById("s6").innerHTML="**please enter your gender";
			document.getElementById("s6").style.color="red";
			return false;

		}
		var g=document.getElementById("course").value;
		if(f=="")
		{
			document.getElementById("s7").innerHTML="**please select your course";
			document.getElementById("s7").style.color="red";
			return false;

		}

		var h=document.getElementById("image").value;
		if(f=="")
		{
			document.getElementById("s8").innerHTML="**please select your image";
			document.getElementById("s8").style.color="red";
			return false;

		}
		 else
		{
			document.getElementById("s9").innerHTML="**successful";
			document.getElementById("s9").style.color="green";
			return true;
		}



	}
	</script>

</body>
</html>