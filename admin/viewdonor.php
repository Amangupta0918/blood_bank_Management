<?php


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Donor Details</title>
</head>
<body>


	<section class="listings">
		<div class="wrapper">
		
			<ul class="properties_list">
			
				
					<center>
					<?php
						include '../config.php';
						$sel = "SELECT SUM(unit) FROM bloodgroup";
						$rs = $con->query($sel);
						$rws = $rs->fetch_assoc();
			?>
						
					
					
						<?php
						  echo "<table border='1'bgcolor=aqua width=60%>
						  <h1><font color=red> Donar Details</h1><br>
						  

						  <tr align=center>
						  
						  <th>Sr.No.</th>
						  
						  <th>Donor Name</th>
						  
						  <th>Age</th>
						  
						  <th>Blood Group</th>
						  <th>City</th>
						  <th>Phone No.</th>
						  <th>Gender</th>
						  
						  </tr>";
						  
						  $ret=mysqli_query($con,"select * from donate");
						
						  while($row=mysqli_fetch_array($ret))
						  {
							echo "<tr align=center height=70px>";
							echo "<td>" . $row['id']. "</td>";
							echo "<td>" . $row['fullname']. "</td>";
							echo "<td>" . $row['age']. "</td>";
							echo "<td>" . $row['bloodgroup']. "</td>";
							echo "<td>" . $row['city']. "</td>";
							echo "<td>" . $row['phno']. "</td>";
							echo "<td>" . $row['gender']. "</td>";
							echo "</tr>";
						  }
						  echo "</table>";
						?>
						<br>
						<h2><a href="adminhome.php">Go Back</a></h2>
					</center>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

</body>
</html>