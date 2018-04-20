<?php

$username ="";
$email ="";
$errors = array();

//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

if (isset($_POST['submit'])){

	$fusername = mysqli_real_escape_string($conn,$_POST['fname']);
	$lusername = mysqli_real_escape_string($conn,$_POST['lname']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['Puser']);
	$email = mysqli_real_escape_string($conn,$_POST['EmailUser']);
	

	if (empty($username)){
		array_push($errors, "Username is Required");
	}
	if (empty($email)){
		array_push($errors, "Email is Required");
	}
	if (empty($lusername)){
		array_push($errors, "Last Name is Required");
	}
	if (empty($password)){
		array_push($errors, "Password is Required");
	}
	

	// Process Insert New Acc

		$password = password_hash($password,PASSWORD_DEFAULT);
	
		$sql = "INSERT INTO users (First_Name,Last_Name,Username,Password,Email) VALUES ('$fusername','$lusername','$username','$password','$email') ";

		if(mysqli_query($conn,$sql)){
			echo '<script>alert("REGISTRATION COMPLETE ")</script>';
		}
		
		
    		
  

}
?>