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

	$result = "SELECT * FROM Nurse  ";

	$result = mysqli_query($conn,$result);


?>

<html>
<head>
	<title>Nurse List</title>
	
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
		<label id = "table_title">Nurse Currently Working:</label><br>
	<tr>
		<th>&nbsp;First Name&nbsp;</th>
		<th>&nbsp;Middle &nbsp;Name&nbsp;</th>
		<th>&nbsp;Last Name&nbsp;</th>
		<th>&nbsp;ID&nbsp;</th>
		<th>&nbsp;BSC&nbsp;</th>
		<!--<th>MBBS</th>
		<th>MBBS</th>-->

		
		
	</tr>
	<?php

	while($res = mysqli_fetch_array($result)) {
		echo "<tr style=\"width:100px\">&nbsp;";
		echo "<td style=\"width:100px\">&nbsp;".$res['First_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Middle_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['Last_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$res['BSC1_Board']."</td>";
		//echo "<td>".$res['BSC2_Board']."</td>";
		//echo "<td>".$res['BSC3_Board']."</td>";
		//echo "<td><a href=\"edit.php?id=$res[Stu_id]\">Edit</a> | <a href=\"delete.php?id=$res[Stu_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</div>
</body>
</html>
