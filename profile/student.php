<?php include('student_manage.php') ?>
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
	<!--Header-->
	<div class="header" style="padding-top:0px; height: 80px">
		
		<div id="titlehead">
			<a href="../index.php"><h1 style="font-size: 35px;">ATION </h1> <p>Classroom Attendance System</p></a>
		</div>
		<div class="menu">
			<ul>
				<li style="margin-left: 390px;"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>LOG OUT</a></li>
			</ul>
		</div>
	</div>
		<div class="dashboard_container">
			<div class="navi_dash">
			<ul>
				<li><a href="dashboard.php"><h3>HOME</h3></a></li>
				<li><a href="student.php"><h3>STUDENT</h3></a></li>
				<li><a href="module.php"><h3>MODULE</h3></a></li>
				<li><a href="showtab.php"><h3>SHOW</h3></a></li>
				<li><a href="keyin.php"><h3>KEY IN</h3></a> </li>
			</ul>			
			</div>
			<div class="content_dash">
				<div class="title_dash">
					<h1>STUDENT</h1>
				</div>
                
                
                <!---BAHAGIAN TAMBAH REKOD PELAJAR---->
				<div class="manage_content">
					<form method="post" action="student.php">
						<center>
                        <h1 style="color:white;">ADD STUDENT</h1>
							<?php include ('errors.php'); ?>
							<table cellpadding="5px">
								<tr>
									<td>Student Name</td>
									<td><input type="text" name="student_name"></td>
								</tr>
								<tr>
									<td>NO IC</td>
									<td><input type="text" name="student_IC"></td>
								</tr>
								
								<tr>
									<td>Course</td>
									<td><select name="courseStudent">
										<option value="">SELECT COURSE</option>
  										<option value="MTK">TEKNOLOGI KIMPAL</option>
  										<option value="MPI">PEMESINAN INDUSTRI</option>
                                        <option value="IPD">PENGURUSAN PANGKALAN DATA DAN WEB</option>
                                        <option value="ISK">SISTEM KOMPUTER DAN RANGKAIAN</option>
										</select>
									</td>
								</tr>
                                <tr>
									<td>Sem</td>
									<td><select name="semStudent">
										<option value="">SELECT SEM</option>
  										<option value="SVMSem1">SVM SEM 1</option>
  										<option value="SVMSem2">SVM SEM 2</option>
  										<option value="SVMsem3">SVM SEM 3</option>
                                        <option value="SVMSem4">SVM SEM 4</option>
                                        <option value="DvmSem1">DVM SEM 1</option>
                                        <option value="DvmSem2">DVM SEM 2</option>
                                        <option value="DvmSem3">DVM SEM 3</option>
                                        <option value="DvmSem4">DVM SEM 4</option>
										</select>
									</td>
								</tr>
							</table>
							<button name="add" type="add" style="font-size:20px; margin-top: 20px;border-radius: 3px;color: white;background-color:#404A5E ;">ADD STUDENT</button>
							<button type="reset" style="font-size:20px; margin-top: 20px;margin-left: 30px;border-radius: 3px;">RESET</button>
						</center>
					</form>
					
					
				</div>	
                
                
          
                <!----BAHAGIAN DELETE REKOD---->
                <div class="manage_content">
					
						<center>
                        <a href="tablestudent.php"><h1 >TABLE STUDENT</h1></a>
							
                            
						
						</center>
					
				</div>
                
                
                
                
                
                
                
                
			</div>
		</div>
		
	
	
</body>
</html>
