<?php


//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

//*Search and filter process*//
$output = '';
if(isset($_POST['search'])){
	
	$sIC=$_POST['fIC'];
	$sYear=$_POST['kyear'];
	$sMonth=$_POST['kmonth'];
	

	if (empty($sIC)||empty($sYear)||empty($sMonth)){
		echo '<script>alert(" Please fill in blank to get specify result ")</script>';
	}

	$query = mysqli_query($conn,"SELECT * from attendance WHERE  id_student='$sIC' ");

	

	$count = mysqli_num_rows($query);

	if($count == 0){
		$output = 'There was no search result.Try Again <br><br>';
	}else{

		
	}

	
	$query2 =	mysqli_query($conn,"SELECT * from students WHERE  Student_IC='$sIC' ");
	
	
}
?>