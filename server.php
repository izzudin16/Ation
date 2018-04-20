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
	$pass = mysqli_real_escape_string($conn,$_POST['Puser']);
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
	if (empty($pass)){
		array_push($errors, "Password is Required");
	}

	// Process Insert New Acc

		$password = md5($pass);

		$sql = "INSERT INTO users (First_Name,Last_Name,Username,Password,Email) VALUES ('$fusername','$lusername','$username','$password','$email') ";

		mysqli_query($conn,$sql);
		
		$done =1;

			if ($done = 1){
				header('Location: index.php');
			}
    		
  

}
?>