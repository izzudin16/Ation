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
    
    $fmID=$_POST['moID'];
    $fName=$_POST['Name'];
    $fcourse=$_POST['Course']; 
    $fsem=$_POST['sem'];    
    
    // checking empty fields
    if(empty($fmID) || empty($fName) || empty($fcourse)|| empty($fsem)) {            
        if(empty($fmID)) {
            echo "<font color='red'>ID Module field is empty.</font><br/>";
        }
        
        if(empty($fName)) {
            echo "<font color='red'>Name Module field is empty.</font><br/>";
        }
        
        if(empty($fcourse)) {
            echo "<font color='red'>Course field is empty.</font><br/>";
        }  
         if(empty($fsem)) {
            echo "<font color='red'>Semester field is empty.</font><br/>";
        }         
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE modules SET ModuleID='$fmID',ModuleName='$fName',ModuleCourse='$fcourse',ModuleSem='$fsem' WHERE id=$fid");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: dashboard.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM modules WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $mID = $res['ModuleID'];
    $mName = $res['ModuleName'];
    $mCourse = $res['ModuleCourse'];
    $mSem = $res['ModuleSem'];
    
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
                        	<h1>EDIT DATA MODULE</h1>
							<form name="form1" method="post" action="editmodule.php">
					        <table border="0">
					            <tr> 
					                <td>Student Name</td>
					                <td><input type="text" name="moID" value="<?php echo $mID;?>"></td>
					            </tr>
					            <tr> 
					                <td>Student IC</td>
					                <td><input type="text" name="Name" value="<?php echo  $mName;?>"></td>
					            </tr>
					            <tr> 
					                <td>Course</td>
					                <td><input type="text" name="Course" value="<?php echo $mCourse;?>"></td>
					            </tr>
					            <tr> 
					                <td>Sem Student</td>
					                <td><input type="text" name="sem" value="<?php echo $mSem;?>"></td>
					            </tr>
                                <tr>
                                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                                    <td><input type="submit" name="update" value="Update"></td>

                                </tr>
					        </table>
					    </form>
					    <td><a href="tablemodule.php"><button>BACK</button></a></td>
						</center>
					
				</div>
    </div>
   
    
</body>
</html>