<?php include('tablemodule_process.php') ?>
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
				<li style="margin-left: 390px;"><a href="logout.php">LOG OUT</a></li>
			</ul>
		</div>
	</div>
		<div class="dashboard_container">
			<div class="navi_dash">
				<a href="dashboard.php"><h3>HOME</h3></a>
				<a href="student.php"><h3>STUDENT</h3></a>
				<a href="module.php"><h3>MODULE</h3></a>
				<a href="showtab.php"><h3>SHOW</h3></a>
			</div>
			<div class="content_dash">
				<div class="title_dash">
					<h1>MODULE</h1>
				</div>
                
                
                <!---BAHAGIAN TAMBAH REKOD PELAJAR---->
				
                
          
                <!----BAHAGIAN DELETE REKOD---->
                <div class="manage_content">
					
						<center>
                        <h1 style="color:white;">TABLE MODULE</h1>
							
                            <table width='90%' border=0>
       						 <tr bgcolor='#091646'>
           						 <td>MODULE Code</td>
           						 <td>MODULE Name</td>
           						 <td>MODULE Hour</td>
            					 <td>MODULE Week</td>
        					</tr>

        					<?php 
        					
       						 while($res = mysqli_fetch_array($result)) {         
           					 echo "<tr>";
            				echo "<td>".$res['ModuleCode']."</td>";
            				echo "<td>".$res['ModuleName']."</td>";
            				echo "<td>".$res['ModuleHour']."</td>"; 
            				echo "<td>".$res['ModuleWeek']."</td>";  
            				
            				echo "<td><a href=\"editmodule.php?id=$res[id]\">Edit</a> | <a href=\"deletemodules.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        					}
        					?>
    					</table>
						
						</center>
					
				</div>
                
                
                
                
                
                
                
                
			</div>
		</div>
		
	
	
</body>
</html>
