<?php
$error='';
$errors = array();

$conn=mysqli_connect("localhost","root","");

$db=mysqli_select_db($conn,"registration");
session_start();

if(isset($_SESSION["username"]))
{
	header("Location: profile/dashboard.php");
}



if(isset($_POST['submit'])){

	if (empty($_POST['username']) ||empty($_POST['passuser'])){
		array_push($errors, "Username and Password is Invalid");
	}
	

	
	else{
		$fUsername=mysqli_real_escape_string($conn,$_POST['username']) ;
		$fPassword=mysqli_real_escape_string($conn,$_POST['passuser']) ;

		$query=mysqli_query($conn,"SELECT * FROM users WHERE Username='$fUsername'");

		
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_array($query))
			{
				if(password_verify($fPassword,$row["Password"]))
				{
					$_SESSION['username'] = $fUsername;
					header("Location: profile/dashboard.php");
				}
				else
				{
					header("Location: index.php");
				}
			}
		}else{
			echo'<script>alert("Username and Password Invalid DB")</script>';
		}
				
					
	}
}
?>