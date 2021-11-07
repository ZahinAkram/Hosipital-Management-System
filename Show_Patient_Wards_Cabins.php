<?php
	include("navbar.php");
	include("background.php");
?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DatabaseName="hospital_management_demo";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$DatabaseName);
 
	// Check connection
	if ($conn->connect_error) {
	
		die("Connection failed: " . $conn->connect_error);
	}

	$result = "SELECT * FROM Patient_Ward Natural Join Patient";
	$result = mysqli_query($conn,$result);
	
	$result2 = "SELECT * FROM Patient_Cabin Natural Join Patient";
	$result2 = mysqli_query($conn,$result2);
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Cabins and Wards</title>
	</head>
	<style>
		.form_layout{
					width: 1200px;
		            margin: auto;
		            padding: 10px;
		            align-content: center;
		            /*border: 1px solid black;*/
		            /*border-top: 10px solid purple;*/
				}
		#table_title{
				font-size: 18px;
			}
		.button_position{
				margin-top: 20px;
				margin-left:500px;
			}
		.success_message{
				margin-left:500px;
				font-weight: bold;
				font-size: 18px
		}	
		label{
	    		margin-top: 10px;
	    		margin-bottom: 10px;
			}
		table {
					border: 1px solid black;
		}
		th,td{
	    			border: 1px solid black;
				}
	</style>
<body style = "background-color:#EBEDF0">
<div class = "form_layout" style = "margin-left: 200px;margin-top: 80px;">
	
	<table>
		<label id = "table_title">Just For Wards:</label><br>
	<tr>
		<th style="width:100px">&nbsp;Ward_ID&nbsp;</th>
		<th style="width:100px">&nbsp;Bed_No&nbsp;</th>
		<th style="width:100px">&nbsp;Patient_ID&nbsp;</th>
		<th style="width:100px">&nbsp;Patient&nbsp;First&nbsp;Name&nbsp;</th>
		<th style="width:100px">&nbsp;Patient&nbsp;Last&nbsp;Name&nbsp;</th>			
	</tr>
	<?php

	while($res = mysqli_fetch_array($result)) {
		echo "<tr style=\"width:100px\">&nbsp;";
		echo "<td style=\"width:100px\">&nbsp;".$res['Ward_ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Bed_No']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Patient_ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['First_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Last_Name']."</td>";
		
		/*echo "<td>".$res[4]."</td>";
		echo "<td>".$res[5]."</td>";
		echo "<td>".$res[6]."</td>";
		echo "<td>".$res[7]."</td>";*/
		//echo "<td><a href=\"edit.php?id=$res[Stu_id]\">Edit</a> | <a href=\"delete.php?id=$res[Stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</div>

<div class = "form_layout" style = "margin-left: 200px;margin-top: 80px;">
	<label id = "table_title">Just For Cabins:</label><br>
	<table>

	<tr>
		<th style="width:100px">&nbsp;Cabin_ID&nbsp;</th>
		<th style="width:100px">&nbsp;Patient_ID&nbsp;</th>
		<th style="width:100px">&nbsp;Patient&nbsp;First&nbsp;Name&nbsp;</th>
		<th style="width:100px">&nbsp;Patient&nbsp;Last&nbsp;Name&nbsp;</th>
	</tr>
	<?php

	while($res2 = mysqli_fetch_array($result2)) {
		echo "<tr style=\"width:100px\">";
		echo "<td style=\"width:100px\">&nbsp;".$res2['Cabin_ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Patient_ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['First_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Last_Name']."</td>";
		//echo "<td><a href=\"edit.php?id=$res[Stu_id]\">Edit</a> | <a href=\"delete.php?id=$res[Stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</div>

		
	</body>
</html> 


