<?php


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Blood Available</title>
	<style>
		td,tr {
  text-align: center;
}
	</style>
</head>
<body>


	<section class="listings">
		<div class="wrapper">
		
			<ul class="properties_list">
			<?php
						include '../config.php';
						$sel = "SELECT SUM(unit) FROM bloodgroup";
						$rs = $con->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				
					<center>
						<h2><span style="font-size:25px; color: blue;">Total Blood on bank:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['SUM(unit)'];?></span></h2>
						<a href="bloodupdate.php">Go Back</a>
						<br><br>
					
					
						<?php
						  echo "<table border='1' width=70% bgcolor=skyblue>

						  <tr height=70px>
						  
						  <th>Sr.No.</th>
						  
						  <th>Blood Type</th>
						  
						  <th>Availability</th>
						  
						  <th>Units</th>
						  <th>Hospital</th>
						  
						  </tr>";
						  $ret=mysqli_query($con,"select * from bloodgroup");
						
						  while($row=mysqli_fetch_array($ret))
						  {
							echo "<tr height=120px>";
							echo "<td>" . $row['bloodid']. "</td>";
							echo "<td>" . $row['Bloodname']. "</td>";
							echo "<td>" . $row['Availibility']. "</td>";
							echo "<td>" . $row['unit']. "</td>";
							echo "<td>" . $row['hospital']. "</td>";
							echo "</tr>";
						  }
						  echo "</table>";
						?>
					</center>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

</body>
</html>