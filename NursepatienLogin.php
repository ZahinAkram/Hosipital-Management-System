<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Nurse Patient Login</title>
		
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
				margin-left:520px;
			}
		.success_message{
				margin-left:540px;
				font-weight: bold;
				font-size: 18px
		}
		.password_message{
				margin-left:552px;
				font-weight: bold;
				font-size: 18px
		}
		table {
					border: 3px solid black;
		}
		th,td{
	    			border: 1px solid black;
				}
	</style>
	<body style = "background-color:#EBEDF0">
		<div>
			<form action="NursepatienLogin.php" method="post" class="form_layout">
				<!--Enter Patient ID: <input type="int" name="Patient_ID"><br>-->
				<label style = "margin-left:300px;margin-top: 100px;">Enter Nurse ID:&emsp;&emsp;&emsp;&nbsp;&emsp;<input type="int" name="Nurse_ID"></label><span style="color: red"> *</span><br>
				<label style = "margin-left:300px;">Enter Nurse Password:&emsp;<input type="Password" name="pass"required></label><span style="color: red"> *</span><br>
				<div class="button_position"><input class="btn btn-primary"type="Submit" name="Submit" value="Submit"></div>
			</form>	
		</div>
		
		
		
	</body>
</html>


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
	if(isset($_POST['Submit'])){
	//$Patient_ID=$_POST['Patient_ID'];
	$Nurse_ID=$_POST['Nurse_ID'];
	$pass = $_POST['pass'];
	//echo $pass;
	if($pass=="easy"){
			//echo "<td><a href=\"Form 3.php?id=$Patient_ID\">Press Here to Enter Patient Records</a>";
			echo "<td><a href=\"Nurse.php\">Enter Here to Log in</a>";
	}
	else if($pass=="hard"){
		echo "<td><a href=\"Nurse_Registrator.php\">Enter Here to Log in</a>";
	}
	else{
		echo "<font color='red'>Invalid Password";
	}
	}
?>

