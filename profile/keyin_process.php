<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("Location: ../index.php");
}

//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");

//*Search and filter process*//
$output = '';
if(isset($_POST['search'])){
	$cour=$_POST['fcourse'];
	$sem=$_POST['fsem'];

	$smodule=$_POST['fmodule'];

	if (empty($cour)||empty($sem)){
		echo '<script>alert(" Please Choose course and sem ")</script>';
	}

	if (empty($smodule)){
		echo '<script>alert(" Please insert module code ")</script>';
	}


	//*QUERY for search student in Course*//
	$query = mysqli_query($conn,"SELECT * from students WHERE Course='$cour' and Sem_Student='$sem' OR Course='$cour' OR Sem_Student='$sem' ");
	$count = mysqli_num_rows($query);

	if($count == 0){
		$output = 'There was no search result.Try Again <br><br>';
	}else{
		
	}

	//*QUERY for select module student*//
	$query2 = mysqli_query($conn,"SELECT * from modules WHERE ModuleCode='$smodule' ");
	while($res2 = mysqli_fetch_array($query2))
		{
		    $mname = $res2['ModuleName'];
		    $mhour = $res2['ModuleHour'];
		    $mweek = $res2['ModuleWeek'];
		}
}





//*Key in data Process*//
if(isset($_POST['submit'])){
	$fyear = $_POST['kyear'];
	$fmonth = $_POST['kmonth'];
	$fday = $_POST['kday'];
	$fnamem = $_POST['knamem'];
	$fhourm = $_POST['khourm'];
	$fweekm = $_POST['kweekm'];
	$fid = $_POST['checked_id'];
	



	if (empty($fyear)||empty($fmonth)||empty($fday)){
		echo '<script>alert("Please complete form ")</script>';
	}
 foreach($fid as $fid){
    		$sql = "INSERT INTO attendance (id_student,Day,Month,Year,Name_Module,Hour_Module,Week_Module) VALUES ('$fid','$fday','$fmonth','$fyear','$fnamem','$fhourm','$fweekm')";

			if(mysqli_query($conn,$sql)){
				echo '<script>alert("KEY IN COMPLETE ")</script>';
			}
        }
	
}
?>