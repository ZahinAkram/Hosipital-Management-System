<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>
<html>
<head>
<!--<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
		
<title>Form 6</title>
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
			margin-left:520px;
			font-weight: bold;
			font-size: 18px
	}
	label{
    		margin-top: 10px;
    		margin-bottom: 10px;
		}
	table {
				border: 3px solid black;
	}
	th,td{
    			border: 1px solid black;
			}
	
</style>
<body>
<!--<div>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="btn btn-light" href="HomePage.php">Home</a>
				</li>
</div>-->
<h1 style="text-align:center;text-decoration: underline;">Nurses Information Form</h1>

<form action="Form 6.php" method="post" class="form_layout">
	<!--Nurse ID:<input type="Text" name="Nid"><br>-->
	<label>Name:&emsp;<input type="Text" name="First_Name" required>
	<span style="color: red"> *</span>(First Name)&emsp;<input type="Text" name="Middle_Name">(Middle Name)&emsp;<input type="Text" name="Last_Name" required><span style="color: red"> *</span>(Last Name)&emsp;</label><br>
	<label>Date of Birth:&emsp;<input type="Text" name="Date_of_Birth">(DD/MM/YYYY)&emsp;
	Date of appointment:&emsp;<input type="Text" name="Date_of_Appointment">(DD/MM/YYYY)&emsp;</label><br>	
	<label id="table_title">Education Qualification:</label>
	<div style="margin:10px">
		<table class="table-condensed">
			<tr >
				<th>Serial No.</th>
				<th>Degree</th>
				<th>Board/Institute</th>
				<th>Year</th>
				<th>Division/CGPA</th>
				<th>Position</th>
			</tr>
			<tr>
				<th>1</th>
				<th>SSC</th>
				<th><input type="Text" name="SSC_Board"></th>
				<th><input type="Text" name="SSC_Year"></th>
				<th><input type="Text" name="SSC_CGPA"></th>
				<th><input type="Text" name="SSC_Position"></th>
			</tr>
			<tr>
				<th>2</th>
				<th>HSC</th>
				<th><input type="Text" name="HSC_Board"></th>
				<th><input type="Text" name="HSC_Year"></th>
				<th><input type="Text" name="HSC_CGPA"></th>
				<th><input type="Text" name="HSC_Position"></th>
			</tr>
			<tr>
				<th>3</th>
				<th>BSC(Nursing)</th>
				<th><input type="Text" name="BSC1_Board"></th>
				<th><input type="Text" name="BSC1_Year"></th>
				<th><input type="Text" name="BSC1_CGPA"></th>
				<th><input type="Text" name="BSC1_Position"></th>
			</tr>
			<!--<tr>
				<th>4</th>
				<th>''</th>
			</tr>
			<tr>
				<th>5</th>
				<th>''</th>
			</tr>-->
		</table>
	</div>
	<label id="table_title">Experience:</label>
	<div style="margin:10px">
		<table class="table-condensed">
			<tr >
				<th>Serial No.</th>
				<th>Job</th>
				<th>From</th>
				<th>To</th>
				<th>Organization</th>
				
			</tr>
			<tr>
				<th>1</th>
				<th><input type="Text" name="Exp1_Job"></th>
				<th><input type="Text" name="Exp1_From"></th>
				<th><input type="Text" name="Exp1_To"></th>
				<th><input type="Text" name="Exp1_Organization"></th>
				
			</tr>
			<tr>
				<th>2</th>
				<th><input type="Text" name="Exp2_Job"></th>
				<th><input type="Text" name="Exp2_From"></th>
				<th><input type="Text" name="Exp2_To"></th>
				<th><input type="Text" name="Exp2_Organization"></th>
				
			</tr>
			<tr>
				<th>3</th>
				<th><input type="Text" name="Exp3_Job"></th>
				<th><input type="Text" name="Exp3_From"></th>
				<th><input type="Text" name="Exp3_To"></th>
				<th><input type="Text" name="Exp3_Organization"></th>
			</tr>	
		</table>
	</div>

	<div class="button_position"><input class="btn btn-primary"type="Submit" name="Submit" value="Submit"></div>

</form>


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
		$First_Name=$_POST['First_Name'];
		$Middle_Name=$_POST['Middle_Name'];
		$Last_Name=$_POST['Last_Name'];
		$Date_of_Birth=$_POST['Date_of_Birth'];
		$Date_of_Appointment=$_POST['Date_of_Appointment'];
		
		$SSC_Board=$_POST['SSC_Board'];
		$SSC_Year=$_POST['SSC_Year'];
		$SSC_CGPA=$_POST['SSC_CGPA'];
		$SSC_Position=$_POST['SSC_Position'];
		
		$HSC_Board=$_POST['HSC_Board'];
		$HSC_Year=$_POST['HSC_Year'];
		$HSC_CGPA=$_POST['HSC_CGPA'];
		$HSC_Position=$_POST['HSC_Position'];
		
		$BSC1_Board=$_POST['BSC1_Board'];
		$BSC1_Year=$_POST['BSC1_Year'];
		$BSC1_CGPA=$_POST['BSC1_CGPA'];
		$BSC1_Position=$_POST['BSC1_Position'];
		
		$Exp1_Job=$_POST['Exp1_Job'];
		$Exp1_From=$_POST['Exp1_From'];
		$Exp1_To=$_POST['Exp1_To'];
		$Exp1_Organization=$_POST['Exp1_Organization'];
		
		$Exp2_Job=$_POST['Exp2_Job'];
		$Exp2_From=$_POST['Exp2_From'];
		$Exp2_To=$_POST['Exp2_To'];
		$Exp2_Organization=$_POST['Exp2_Organization'];
		
		$Exp3_Job=$_POST['Exp3_Job'];
		$Exp3_From=$_POST['Exp3_From'];
		$Exp3_To=$_POST['Exp3_To'];
		$Exp3_Organization=$_POST['Exp3_Organization'];
		
		$result="Insert into nurse(First_Name,Middle_Name,Last_Name,Date_of_Birth,Date_of_Appointment,
			SSC_Board,SSC_Year,SSC_CGPA,SSC_Position,	
			HSC_Board,HSC_Year,HSC_CGPA,HSC_Position,	
			BSC1_Board,BSC1_Year,BSC1_CGPA,	BSC1_Position,
			Exp1_Job,Exp1_From,	Exp1_To,Exp1_Organization,
			Exp2_Job,Exp2_From,	Exp2_To,Exp2_Organization,
			Exp3_Job,Exp3_From,	Exp3_To,Exp3_Organization
			) 
			VALUES
			('$First_Name','$Middle_Name','$Last_Name','$Date_of_Birth','$Date_of_Appointment',
			'$SSC_Board','$SSC_Year','$SSC_CGPA','$SSC_Position',
			'$HSC_Board','$HSC_Year','$HSC_CGPA','$HSC_Position',
			'$BSC1_Board','$BSC1_Year','$BSC1_CGPA','$BSC1_Position',
			'$Exp1_Job','$Exp1_From','$Exp1_To','$Exp1_Organization',
			'$Exp2_Job','$Exp2_From','$Exp2_To','$Exp2_Organization',
			'$Exp3_Job','$Exp3_From','$Exp3_To','$Exp3_Organization'
			)";
			$result = mysqli_query($conn, $result);
			echo "<div class=\"success_message\">";
			echo "Thank You for Registering.";
			echo "</div>";
		
		
	}


?>