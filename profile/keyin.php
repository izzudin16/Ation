<?php include('keyin_process.php') ?>
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
					<li style="margin-left: 390px;"><a href="logout.php">LOG OUT</a>
				</ul>
		</div>
	</div>
		<div class="dashboard_container" style="height: 180vh">
			<div class="navi_dash" style="height: 180vh">
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
					<h1>Attendance Form</h1>
				</div>
				<div class="formkeyin1">
					<center><h2>Search Students</h2>
					<form action="keyin.php" method="post">
						<table>
									<tr>
										<td>Course</td>
										<td><select name="fcourse">
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
										<td><select name="fsem">
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
									<tr>
										<td>Code Modul</td>
										<td><input type="text" name="fmodule" placeholder="KPD5013"></td>
									</tr>
							</table>
							<button type="search" name="search" >SEARCH</button>		
					</form>
				</div>
				
				<div class="formkeyin2">
					<center><h2>DATE</h2>
					<form method="POST" action="keyin.php">
					<table>
						<tr>
							<td>YEAR</td>
							<td><input type="text" name="kyear" placeholder="2018"></td>
						
							<td>Month</td>
								<td><select name="kmonth">
											<option value="">SELECT MONTH</option>
	  										<option value="1">JANUARY</option>
	  										<option value="2">FEBRUARY</option>
	  										<option value="3">MARCH</option>
	                                        <option value="4">APRIL</option>
	                                        <option value="5">MAY</option>
	                                        <option value="6">JUNE</option>
	                                        <option value="7">JULY</option>
	                                        <option value="8">AUGUST</option>
	                                        <option value="9">SEPTEMBER</option>
	                                        <option value="10">OCTOBER</option>
	                                        <option value="11">NOVEMBER</option>
	                                        <option value="12">DECEMBER</option>
									</select>
								</td>
						
							<td>Day</td>
							<td><input type="text" name="kday" placeholder="25"></td>
							<td><input type="hidden" name="knamem" value="<?php echo $mname;?>"></td>
							<td><input type="hidden" name="khourm" value="<?php echo $mhour;?>"></td>
							<td><input type="hidden" name="kweekm" value="<?php echo $mweek;?>"></td>
						</tr>
					</table> </center>
					 <table width='90%' border=0>
	       						 <tr bgcolor='#091646'>
	       						 	 <td>Attend</td>
	           						 <td>Student Name</td>
	           						 <td>Student IC</td>
	           						 
	        					</tr>

	        					<?php 
	        					
	       						 while($row = mysqli_fetch_array($query)) 
	       						  {         
	           					?>
	       						 <tr>
	           					 <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['Student_IC']; ?>"/></td>

	           					 <?php
	            				echo "<td>".$row['Student_Name']."</td>";
	            				echo "<td>".$row['Student_IC']."</td>";
	            				}
	            				?>

	            				</tr>
	            				
	    					</table>
	    					<?php echo("$output");?>
	    					<center>
	    						<button type="submit" name="submit">Submit</button>
	    					</center>
	    					
	    			</form>
				</div>
					
	    	</div>		
			
		</div>
		
		
	
	
</body>
</html>
