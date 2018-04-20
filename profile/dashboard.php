<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: ../index.php");
}
?>

<html>
<head>
	<title>ATION </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
  	<meta name="description" content="Manage Classroom Attendance with ATION">
  	<meta name="keywords" content="ATION,KVSP1 Website,Classroom Attendance">
 	 <meta name="author" content="IZZUDIN">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="icon" href="../img/favicon.png">
</head>
<body>
	<!--Header-->
	<div class="header" style="padding-top:0px; height: 80px">
		
		<div id="titlehead">
			<a href="../index.php"><h1 style="font-size: 35px;">ATION </h1> <p>Classroom Attendance System</p></a>
		</div>
		<div class="menu">
			<ul>
				<li style="margin-left: 390px;"><a href="logout.php">LOG OUT</a></li>
			</ul>
		</div>
	</div>
		<div class="dashboard_container">
			<div class="navi_dash">
			<ul>
				<li><a href="dashboard.php"><h3>HOME</h3></a></li>
				<li><a href="student.php"><h3>STUDENT</h3></a></li>
				<li><a href="module.php"><h3>MODULE</h3></a></li>
				<li><a href="showtab.php"><h3>SHOW</h3></a></li>
				<li><a href="keyin.php"><h3>KEY IN</h3></a> </li>
			</ul>			
			</div>
		<div class="content_dash">
			<div class="title_dash">
				<h1>WELCOME</h1> <div class="owner_name"><?php echo $_SESSION['username'] ?></div>
			</div>
			<div class="statistic">
				<h2>Report</h2>
				<ul>
					<li><i class="fas fa-bullhorn"></i> <h4>Attend</h4></li>
					<h3>3500</h3>
				</ul>
				<ul>
					<li><i class="fas fa-arrow-down"></i> <h4>Not Enough Presence</h4></li>
					<h3>4400</h3>
				</ul>
			</div>
		</div>
		</div>
		
	
	
</body>
</html>
