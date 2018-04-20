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

	$s_name = mysqli_real_escape_string($conn,$_POST['student_name']);
	$s_IC = mysqli_real_escape_string($conn,$_POST['student_IC']);
	$s_course = mysqli_real_escape_string($conn,$_POST['courseStudent']);
	$s_sem = mysqli_real_escape_string($conn,$_POST['semStudent']);

	if (empty($s_name)){
		array_push($errors, "Name is Required");
	}
	if (empty($s_IC)){
		array_push($errors, "IC is Required");
	}
	if (empty($s_course)){
		array_push($errors, "Course is Required");
	}
	if (empty($s_sem)){
		array_push($errors, "Sem is Required");
	}
	

	// Process Insert New Student

		
	
		$sql = "INSERT INTO students (Student_Name,Student_IC,Course,Sem_Student) VALUES ('$s_name','$s_IC','$s_course','$s_sem')";

		if(mysqli_query($conn,$sql)){
			echo '<script>alert("ADDING STUDENT COMPLETE ")</script>';
		}
}

?>