<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: ../index.php");
}

$errors = array();

//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

if (isset($_POST['add'])){

	$mcode = mysqli_real_escape_string($conn,$_POST['modulecode']);
	$mName = mysqli_real_escape_string($conn,$_POST['modulename']);
	$mHour = mysqli_real_escape_string($conn,$_POST['modulehour']);
	$mWeek = mysqli_real_escape_string($conn,$_POST['moduleweek']);
	

	if (empty($mcode)){
		array_push($errors, "Module code is Required");
	}
	if (empty($mName)){
		array_push($errors, "Module Name is Required");
	}
	if (empty($mHour)){
		array_push($errors, "Module Hour is Required");
	}
	if (empty($mWeek)){
		array_push($errors, "Module Week is Required");
	}
	

	// Process Insert New Student

		
	
		$sql = "INSERT INTO modules (ModuleCode,ModuleName,ModuleHour,ModuleWeek) VALUES ('$mcode','$mName','$mHour','$mWeek')";

		if(mysqli_query($conn,$sql)){
			echo '<script>alert("ADDING MODULE COMPLETE ")</script>';
		}
}

?>