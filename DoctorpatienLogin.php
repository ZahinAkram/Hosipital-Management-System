<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Doctor Patient Login</title>
		
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
				margin-left:540px;
				font-weight: bold;
				font-size: 18px
		}
		.password_message{
				margin-left:552px;
				font-weight: bold;
				font-size: 18px
		}
		#username{
				margin-top: 100px;
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
		<div>
			<form action="DoctorpatienLogin.php" method="post"  class="form_layout">
				<!--Enter Patient ID: <input type="int" name="Patient_ID"><br>-->
				<label id = "username">Enter Doctor ID:&emsp;&emsp;&emsp;&nbsp;&emsp;<input type="int" name="Doctor_ID"><span style="color: red"> *</span><br><br>
				Enter Doctor Password:&emsp;<input type="Password" name="pass"><span style="color: red"> *</span></label><br>
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
	$Doctor_ID=$_POST['Doctor_ID'];
	$pass = $_POST['pass'];
	//echo $pass;
	if($pass=="easy"){
			//echo "<td><a href=\"Form 3.php?id=$Patient_ID\">Press Here to Enter Patient Records</a>";
			echo "<div class=\"success_message\">";
			echo "<td><a href=\"Doctors.php\">Enter Here to Log in</a>";
			echo "</div>";
	}
	else if($pass=="hard"){
		echo "<div class=\"success_message\">";
		echo "<a href=\"Doctor_Registrator.php\">Enter Here to Log in</a>";
		echo "</div>";
	}
	else{
		echo "<div class=\"password_message\">";
		echo "<font color='red'>Invalid Password</font>";
		echo "</div>";
	}
	}
	
?>

