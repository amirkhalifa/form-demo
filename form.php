
<!DOCTYPE html>
<html>
<head>
	<title>form with Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<fieldset>
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" placeholder="enter your first name"><br></td>
					</tr>

					<tr>
						<td>Lirst Name:</td>
						<td><input type="text" name="lname" placeholder="enter your last name"><br></td>
					</tr>

					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" placeholder="enter your valaid email"><br></td>
					</tr>

					<tr>
						<td>Date of barth:</td>
						<td><input type="date" name="dob" min="1970-12-31"><br></td>
					</tr>
					<tr>
						
						<br><td><p>Select Your Gender</p></td> 
						<td></td><br>
					</tr>
					<tr>
						<td><input type="radio" name="gender" value="Male">Male</td><br>
					</tr>
					<tr>
						<td><input type="radio" name="gender" value="Female">Female</td><br>
					</tr>
					<tr>
		               <td>Select:</td>
		               <td>
		                  <select name = "subject[]" size = "4" multiple>
		                     <option value = "Android">Android</option>
		                     <option value = "Java">Java</option>
		                     <option value = "C#">C#</option>
		                     <option value = "Data Base">Data Base</option>
		                     <option value = "Hadoop">Hadoop</option>
		                     <option value = "VB script">VB script</option>
		                  </select>
		               </td>
	            	</tr>
	            	<tr>
						<td></td>
						<td><input type="submit" name="sub" value="Submit"> </td>
					</tr>

			</table>
		</form>

	</fieldset>
<?php

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$fname= valadate($_POST["fname"]);
		$lname= valadate($_POST["lname"]);
		$email= valadate($_POST["email"]);
		$bday= valadate($_POST["dob"]);
		$gender= valadate($_POST["gender"]);
		
		echo $fname."<br>";
		echo $lname."<br>";
		echo $email."<br>";
		echo $bday."<br>";
		echo $gender."<br>";
	
	}

	function valadate($data)

		{
			$data=trim($data);
			$data=htmlspecialchars($data);
			$data=stripslashes($data);
			return $data;
		}
	
?>
</body>
</html>