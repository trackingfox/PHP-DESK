<!DOCTYPE html>
<html>
<head>
	<title>abc</title>
</head>
<body>


	<form  method="post" action="registrationFormAction.php" enctype="multipart/form-data" onsubmit="return fun()">

		<table border="2" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2"
				style="color:red"><h1><center>Registration Form</center></h1></td>
			</tr>
			<tr>
				<td>Enter any name:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			
			<tr>
				<td>Enter address:</td>
				<td><input type="text" id="address" name="address"></td>
			</tr>
			
			<tr>
				<td>enter email:</td>
				<td><input type="email" id="myemail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter email" required> 
				</td>
			</tr>
			
			<tr>
				<td>enter Mobile no:</td>
				<td><input type="text" id="mobile" name="mobile"></td>
			</tr>
		
			<tr>
				<td>enter password:</td>
				<td><input type="password" id="pass" name="password"></td>
			</tr>
			
			<tr>
				<td>enter Date of Birth:</td>
				<td><input type="date" id="dob" name="DOB" ></td>
			</tr>
			
			<tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" id="male" value="Male"> Male 
					<input type="radio" name="gender" id="female" value="Female">Female
			</tr>
			<span id="s6"></span>
			<tr>
				<td>Course:</td>
				<td><select id="course" name="course">
		             <option>Select</option>
		             <option value="mtech">Mtech</option>
		             <option value="btech">Btech</option>
		       		 <option value="bsc">Bsc</option>
		       		 <option value="BCA">BCA</option>
		   	     </select></td>
			</tr>
			

			<tr>
				<td>Language:</td>
				<td> <input type ="checkbox" name="language[]" value="Hindi">Hindi 
		             <input type ="checkbox" name="language[]" value="Bengali">Bengali          
           		     <input type ="checkbox" name="language[]" value="English">English</td>
			</tr>
			<tr>
				<td> enter Image:</td>
				<td><input type="file" name="uploadimage"></tr>
				
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