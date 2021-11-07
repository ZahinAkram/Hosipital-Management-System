<?php
	include("background.php");
	include("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
<!--<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
<title>Form 2</title>
</head>
<body>
<!--<div>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="btn btn-light" href="HomePage.php">Home</a>
				</li>
</div>-->
<h1 style="text-align:center;">Patient Receipt</h1>

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
	
	$result2="Select * From bill_patient where Patient_ID=$id";
	$result2 = mysqli_query($conn, $result2);
	$row2 = mysqli_fetch_array($result2);
	
?>
<form>
	Patient ID:<?php echo " ".$id ;?><br>
	Date of Admission:<?php echo " ".$row[1];?>(DD/MM/YYYY)<br>
	Name: <?php echo " ".$row[2];?>(First Name)<?php echo " ".$row[3];?>(Middle Name)<?php echo " ".$row[4];?>(Last Name)<br>
	Mobile(1): <?php echo " ".$row[6];?>Mobile(2)<?php echo " ".$row[7];?><br>
	Choice:<?php echo " ".$row[20];?><br>
	Signature with Date
	<?php echo " ".$row[21];?><br>
	Final Bill:<?php echo " ".$row2[1];?>
	
	
	   <!-- added by Arman for Form 3 -->
	
	
</form>
</body>
</html>

