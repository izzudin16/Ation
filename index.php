<?php
include('loginserv.php');
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
<div class="bgindex">
	<!--Header-->
	<div class="headerindex">
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="check.php">Check Record</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div class="titleindex">
		<div id="logo">
			<a href="index.php"><img src="img/logo.png" width="90px" style="display: inline-block;"></a>
		</div>
		<div id="titlehead">
			<a href="index.php"><h1>ATION </h1> <p>Classroom Attendance System</p></a>
		</div>
	</div>
	<div class="login_sec">
		<div class="login_box">
			<form method="post" action="index.php" >
			<center>
				<?php include ('errors.php'); ?>
				<input type="text" name="username" placeholder="Username" style="height: 30px;">
				<input type="password" name="passuser" placeholder="Password" style="height: 30px;">
				<button type="submit" name="submit" style="padding: 5px; border-radius: 3px;background-color: D8A5E6;color: white;">Login</button>
			</form><br>
			 <p style="font-family:Times New Roman">  New User ?</p>
			 	<a href="signup.php" style="padding: 5px; border-radius: 3px;background-color: #212F3D;">Sign Up</a>
			</center>
		</div>
	</div>
</div>




</body>
</html>