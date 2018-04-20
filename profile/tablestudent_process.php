<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: ../index.php");
}

//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");

?>