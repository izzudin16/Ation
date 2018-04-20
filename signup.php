<?php 
include('regisserver.php');
?>
<html>
<head>
	<title>WELCOME TO ATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
  	<meta name="description" content="Manage Classroom Attendance with ATION">
  	<meta name="keywords" content="ATION,KVSP1 Website,Classroom Attendance">
 	 <meta name="author" content="IZZUDIN">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/favicon.png">
</head>
<body>

<!--Header-->
	<div class="header">
		<div id="logo">
			<a href="index.php"><img src="img/logo.png" width="90px" style="display: inline-block;"></a>
		</div>
		<div id="titlehead">
			<a href="index.php"><h1>ATION </h1> <p>Classroom Attendance System</p></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="check.php">Check Record</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
	</div>

<div  class="aboutus">

	<h2>SIGN UP</h2>
	<center>
		<div class="signupborder" style="border:5px solid #1F93F4; margin: 10px;width: 45%;margin-left: 30px;display: inline-block;margin-bottom: 150px;border-radius: 5px;">
		
		<form method="post" action="signup.php">
			<?php include ('errors.php'); ?>
		<table>
			<tr>
				<th><h3>Personal Information</h3></th>
			</tr>
			<tr>
				<td><h4>First Name</h4></td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td><h4>Last Name*</h4></td>
				<td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<td><h4>Username*</h4></td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><h4>Password*</h4></td>
				<td><input type="Password" name="Puser"></td>
			</tr>
			<tr>
				<td><h4>Email*</h4></td>
				<td><input type="text" name="EmailUser"></td>
			</tr>
		</table>

		<button type="submit" name="submit" style="background-color:#1F93F4;color: white;border-radius: 10px; ">SUBMIT</button>
		</form>
		
		
	</div>
	</center>
	

	
</div>




</body>
</html>