<?php include('showtabprocess.php') ?>
<html>
<head>
	<title>WELCOME TO ATION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
  	<meta name="description" content="Manage Classroom Attendance with ATION">
  	<meta name="keywords" content="ATION,KVSP1 Website,Classroom Attendance">
 	 <meta name="author" content="IZZUDIN">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/favicon.png">
</head>
<body>

<!--Header-->
	<div class="header">
		<div id="logo">
			<a href="index.php"><img src="img/logo.png" width="90px" style="display: inline-block;"></a>
		</div>
		<div id="titlehead">
			<a href="index.php"><h1>ATION </h1> <p>Classroom Attendance System</p></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="check.php">Check Record</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
	</div>

<!--BAHAGIAN CHECK KEHADIRAN-->
<div class="title_dash">
					<h1> RECORD</h1>
				</div>
				<div class="displaytable">
				<center>
					<form action="check.php" method="post">
					<table>
								
								<tr>
									<td>NO IC</td>
									<td><input type="text" name="fIC"></td>
								</tr>
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
							</tr>
						</table>
						<button type="search" name="search">SEARCH</button>		
				</center>
						<table width='90%' border=0>
       						 <tr bgcolor='#091646'>
       						 	
           						 <th>Student Name</th>
           						 <th>Student IC</th> 
        					</tr>
        					<?php 
        					
       						 while($res2 = mysqli_fetch_array($query2)) 
       						  {         
           					?>
       						 <tr>
           					 <?php
            				echo "<td>".$res2['Student_Name']."</td>";
            				echo "<td>".$res2['Student_IC']."</td>";
            				}
            				?>
            				</tr>
            				
    					</table>

    					<table width='90%' border=0>
       						 <tr bgcolor='#091646'>
       						 	
           						
           						 <th>Total Attend</th>
           						 
           						 
        					</tr>

        					
       						 <tr>
           					 <?php
            				
            				echo "<td>".$count."</td>";
            				
            				
            				?>
            				</tr>
            				
    					</table>
    					<?php echo("$output");?>
				</form>
				</div>






</body>
</html>