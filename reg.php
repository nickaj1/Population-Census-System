<?php
include("config.php");
if (isset($_POST['register'])) {
	//get  post records
	$first_name= mysqli_real_escape_string($con, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
	
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$age= mysqli_real_escape_string($con, $_POST['age']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$hometown = mysqli_real_escape_string($con, $_POST['hometown']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	$ghcard = mysqli_real_escape_string($con, $_POST['ghcard']);
	$employment = mysqli_real_escape_string($con, $_POST['employment']);
	$spouse = mysqli_real_escape_string($con, $_POST['spouse']);
	$children = mysqli_real_escape_string($con, $_POST['children']);
	$region = mysqli_real_escape_string($con, $_POST['region']);
	$district = mysqli_real_escape_string($con, $_POST['district']);
	$street = mysqli_real_escape_string($con, $_POST['street']);
	$gps = mysqli_real_escape_string($con, $_POST['gps']);
	
	$datereg= date('Y-m-d H:i:s');
	
		$sql= mysqli_query($con,"select * from reg where ghcard='$ghcard' "); 
		$result=mysqli_fetch_assoc($sql);
		//print_r($result);
		extract($_REQUEST);
		error_reporting(1);
	
		  $sql= mysqli_query($con,"select * from reg where email='$email' or ghcard='$ghcard' ");
		  if(mysqli_num_rows($sql)) 
		  {
			echo'<script>alert("GHANA Card is linked to an existing data");</script>';

		  }
		  else
		  {
	
	
	
	
	//database insert sql code 
	$sql = "INSERT INTO `reg`(`id`, `first_name`, `last_name`, `date`, `age`, `gender`, `marital`, `hometown`, `email`, `mobile`, `ghcard`, `employment`, `spouse`, `children`, `region`, `district`, `street`, `gps`, `datereg`)
	 VALUES ('null','$first_name','$last_name','$date','$age','$gender','$marital','$hometown','$email','$mobile','$ghcard','$employment','$spouse','$children','$region','$district','$street','$gps','$datereg')";
	
	//insert in database
	if(mysqli_query($con,$sql))
	{
	echo'<script>alert("congratulations data received");</script>';
	echo'<script>location.replace("index.php");</script>';
	}
		  }
		  
		}
		 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="shortcut icon" href="./GSS.png" type="image/x-icon">
</head>
<body class="form-v10">
	<a href="index.php"><img src="GSS.png" alt=""> </a>

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Personal Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<legend>Date of Brith</legend>
							<input type="date" name="date"  required >
						</div>
						<div class="form-row form-row-2">
							<Label>Age</Label>
							<input type="text" name="age" id="last_name" class="input-text" placeholder="" required>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<label>Gender</label>
							<select name="gender">
							    <option value="Male">Male</option>
							    <option value="Female">Female</option>
							    
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>						</div>
						<div class="form-row form-row-2">
							<Label>Marital Status</Label>
							<select name="marital">
							    <option value="single">Single</option>
							    <option value="married">Married</option>
							    <option value="widow">Widow</option>
							    
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="hometown" class="company" id="company" placeholder="HomeTown" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<label>Phone Number</label>
							<input type="text" name="mobile" id="mobile" class="input-text" placeholder="+233 xxx xxxx" required>
						</div>
						<div class="form-row form-row-2">
							<Label>Email</Label>
							<input type="text" name="email" id="last_name" class="input-text" placeholder="xxxx@gmail.com" >
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
						<Label>Employment Status</Label>
							<select name="employment">
							    <option value="Employed">Employed</option>
							    <option value="Unemployed">Unemployed</option>
							    <option value="Self-employed">Self-employed</option>
							    <option value="Student">Student</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row form-row-2">
							<Label>Ghana Card</Label>
							<input type="text" name="ghcard" id="last_name" class="input-text" placeholder="GH-xxxxxxxxx-xx" required>
						</div>
					</div>
		
					<div class="form-group">
						<div class="form-row form-row-1">
							<label>Name of Spouse</label>
							<input type="text" name="spouse" id="first_name" class="input-text" placeholder="" >
						</div>
						<div class="form-row form-row-2">
							<Label>Number of children</Label>
							<input type="text" name="children" id="last_name" class="input-text" placeholder="" >
						</div>
					</div>
					
				</div>
				<div class="form-right">
					<h2>Location</h2>
					<div class="form-row">
					<select name="region">
					
							    <option value="Ashanti Region">Ashanti Region</option>
							    <option value="Western Region">Western Region</option>
							    <option value="Northern Region">Northern Region</option>
							    <option value="Volta Region">Volta Region</option>
							    <option value="Eastern Region">Eastern Region</option>
								<option value="Upper West Region">Upper West Region</option>
							    <option value="Upper East Region">Upper East Region</option>
							    <option value="Central Region">Central Region</option>
								<option value="Bono East Region">Bono East Region</option>
							    <option value="Greater Accra Region">Greater Accra Region</option>
							    <option value="Savannah Region">Savannah Region</option>
								<option value="North-East Region">North-East Region</option>
							    <option value="Oti Region">Oti Region</option>
							    <option value="Western North Region">Western North Region</option>
								<option value="Ahafo Region">Ahafo Region</option>
								<option value="Bono Region">Bono Region</option>
								
								 

							    
							</select>	
					</div>
					<div class="form-row">
						<input type="text" name="district" class="additional" id="additional" placeholder="District" required>
					</div>
					<div class="form-row">
						<input type="text" name="town" class="additional" id="additional" placeholder="Town" required>
					</div>
					<div class="form-row">
						<input type="text" name="street" class="additional" id="additional" placeholder="Street" required>
					</div>
					<div class="form-row">
						<input type="text" name="gps" class="additional" id="additional" placeholder="GP-xxx-xx" required>
					</div>
					
					
					<div class="form-checkbox">
						<label class="container"><p>I do accept  <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>