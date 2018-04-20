<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: ../index.php");
}
//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM modules WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:dashboard.php");
?>