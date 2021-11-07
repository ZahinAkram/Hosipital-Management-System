<?php
	include("navbar.php");
	include("Background.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Form 2</title>
</head>
<style>
	
	.form_layout{
			width: 1200px;
            margin: auto;
            padding: 10px;
            align-content: center;
            border: 1px solid black;
            /*border-top: 10px solid purple;*/
		}
	.link_position{
			margin-top: 20px;
			margin-left:500px;
		}
	label{
			margin-top: 5px;
    		margin-bottom: 5px;

	}
</style>
<body>
<h1 style="text-align:center;text-decoration: underline;">Patient Admission Receipt</h1>

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
	$id = $_GET['id'];
	/*if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}*/
	$result = "SELECT * FROM patient WHERE Patient_ID=$id";
	$result = mysqli_query($conn, $result);
	$row = mysqli_fetch_array($result);
	
	
?>
<form class = "form_layout">
	<label>Patient ID:<?php echo " ".$id ;?></label><br>
	<label>Date of Admission:<?php echo " ".$row[1]." ";?>(DD/MM/YYYY)</label><br>
	<label>Name: <?php echo " ".$row[2]." ";?><?php echo " ".$row[3]." ";?><?php echo " ".$row[4]." ";?></label><br>
	<label>Date of Birth:<?php echo " ".$row[5]." ";?>(DD/MM/YYYY)</label><br>
	<label>Mobile(1): <?php echo " ".$row[6]." ";?>Mobile(2)<?php echo " ".$row[7]." ";?></label><br>
	<label>Present Address:<br>
	&emsp;&emsp;<label>Street No/Village:<?php echo " ".$row[8]." ";?>&emsp;Street Name:<?php echo " ".$row[9]." ";?></label><br>
	&emsp;&emsp;<label>Area:<?php echo " ".$row[10]." ";?>&emsp;Thana:<?php echo " ".$row[11]." ";?>&emsp;District:<?php echo " ".$row[12]." ";?></label><br>
	<label>Permanent Address:</label><br>
	&emsp;&emsp;<label>Street No/Village:<?php echo " ".$row[13]." ";?>&emsp;Street Name:<?php echo " ".$row[14]." ";?></label><br>
	&emsp;&emsp;<label>Area:<?php echo " ".$row[15]." ";?>&emsp;Thana:<?php echo " ".$row[16]." ";?>&emsp;District:<?php echo " ".$row[17]." ";?></label><br>
	<label>Profession:<?php echo " ".$row[18]." ";?></label><br>
	<label>Amount Deposited:<?php echo " ".$row[19]." ";?></label><br>
	<label>Choice:<?php echo " ".$row[20]." ";?></label><br>
	<label>Signature:
	<?php echo " ".$row[21]." ";?></label><br>
	<label>Name of the employee: <?php echo " ".$row[22]." ";?></label><br>
	<label>Designation:<?php echo " ".$row[23]." ";?></label><br>
	
</form>
</body>
</html>

