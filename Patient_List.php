<?php
	include("navbar.php");
	include("background.php");
?>
<html>
<head>
	<title>Patient List</title>
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
	#username{
			margin-top: 50px;
			margin-left:300px;
	}	
	table {
				border: 1px solid black;
	}
	th,td{
    			border: 1px solid black;
			}
</style>
<body style = "background-color:#EBEDF0">
	<div id="parent">
		<form action="Patient_List.php" method="post" class="form_layout">
			<label id = "username">Enter Patient ID:&emsp;&emsp;<input type="int" name="Patient_ID" required></label><span style="color: red"> *</span>
			<div class="button_position"><input class="btn btn-primary"type="Submit" name="Submit" value="Submit"></div>
		</form>	
	</div>
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
    if (isset($_POST['Submit'])) 
    { 
		$Patient_ID=$_POST['Patient_ID'];
		$query="Select * From Patient where Patient_ID='$Patient_ID'";
		$query = mysqli_query($conn, $query);
		if (!$query) {
    printf("Error Q1: %s\n", mysqli_error($conn));
    exit();
	}
		$query2="Select * From Patient_Health_Records where PHR_ID='$Patient_ID'";
		$query2 = mysqli_query($conn, $query2);
?>

	<div>
		<table class="form_layout">

	<tr>
		<th>&nbsp;Patient_ID&nbsp;</th>
		<th>&nbsp;First&nbsp;Name&nbsp;</th>
		<th>&nbsp;Middle&nbsp;Name&nbsp;</th>
		<th>&nbsp;Last&nbsp; Name&nbsp;</th>
		<th>&nbsp;Profession&nbsp;</th>
		<th>&nbsp;Symptom 1&nbsp;</th>
		<th>&nbsp;Symptom 2&nbsp;</th>
		<th>&nbsp;Symptom 3&nbsp;</th>
		<th>&nbsp;Symptom 4&nbsp;</th>
		<th>&nbsp;Symptom 5&nbsp;</th>
		<th>&nbsp;Symptom 6&nbsp;</th>
	</tr>
	<?php
		$row=mysqli_fetch_array($query) ;
		$row2=mysqli_fetch_array($query2);
		echo "<tr style=\"width:100px\">&nbsp;";
		echo "<td style=\"width:100px\">&nbsp;".$row['Patient_ID']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row['First_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row['Middle_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row['Last_Name']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row['Profession']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S1']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S2']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S3']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S4']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S5']."</td>";
		echo "<td style=\"width:100px\">&nbsp;".$row2['S6']."</td>";		
	?>
	</tr>
	</table>
	</div>

<?php
    }  
?>
		
</body>
</html>






