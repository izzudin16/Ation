<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ../index.php");
}

//Database Connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"registration");


if(isset($_POST['update']))
{    
    $fid = $_POST['id'];
    
    $fname=$_POST['name'];
    $fIC=$_POST['IC'];
    $fcourse=$_POST['Course']; 
    $fsem=$_POST['sem']; 
    $fmatrik=$_POST['Matrik'];    
    
    // checking empty fields
    if(empty($fname) || empty($fIC) || empty($fcourse)|| empty($fsem)|| empty($fmatrik)) {            
        if(empty($fname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($fIC)) {
            echo "<font color='red'>IC field is empty.</font><br/>";
        }
        
        if(empty($fcourse)) {
            echo "<font color='red'>Course field is empty.</font><br/>";
        }  
         if(empty($fsem)) {
            echo "<font color='red'>Semester field is empty.</font><br/>";
        }  
         if(empty($fmatrik)) {
            echo "<font color='red'>Matrik field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE students SET Student_Name='$fname',Student_IC='$fIC',Course='$fcourse',Sem_Student='$fsem',NO_Matrik='$fmatrik' WHERE id=$fid");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: dashboard.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $sname = $res['Student_Name'];
    $sIC = $res['Student_IC'];
    $sCourse = $res['Course'];
    $sStudent = $res['Sem_Student'];
    $sMatrik = $res['NO_Matrik'];
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
    <div class="dash_content">
    	 <div class="edit_content">
					
						<center>
                        	<h1>EDIT DATA STUDENT</h1>
							<form name="form1" method="post" action="edit.php">
					        <table border="0">
					            <tr> 
					                <td>Student Name</td>
					                <td><input type="text" name="name" value="<?php echo $sname;?>"></td>
					            </tr>
					            <tr> 
					                <td>Student IC</td>
					                <td><input type="text" name="IC" value="<?php echo $sIC;?>"></td>
					            </tr>
					            <tr> 
					                <td>Course</td>
					                <td><input type="text" name="Course" value="<?php echo $sCourse;?>"></td>
					            </tr>
					            <tr> 
					                <td>Sem Student</td>
					                <td><input type="text" name="sem" value="<?php echo $sStudent;?>"></td>
					            </tr>
					            <tr> 
					                <td>NO Matrik</td>
					                <td><input type="text" name="Matrik" value="<?php echo $sMatrik;?>"></td>
					            </tr>
					            <tr>
					                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					                <td><input type="submit" name="update" value="Update"></td>

					            </tr>
					        </table>
					    </form>
					    <td><a href="tablestudent.php"><button>BACK</button></a></td>
						</center>
					
				</div>
    </div>
   
    
</body>
</html>