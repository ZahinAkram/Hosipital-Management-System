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
		
<title>Form 4</title>
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
	.button_position{
			margin-top: 20px;
			margin-left:500px;
		}
	#table_title{
			font-size: 18px;
		}
	label{
    		margin-top: 5px;
    		margin-bottom: 5px;
		}		
	table {
				border: 3px solid black;
	}
	th,td{
    			border: 1px solid black;
			}
	.success_message{
			margin-left:400px;
			font-weight: bold;
			font-size: 18px
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
	

	$id = 1;

	
	$result = "SELECT * FROM patient WHERE Patient_ID=$id";
	$result = mysqli_query($conn, $result);
	$row = mysqli_fetch_array($result);
	
	
?>
<h1 style="text-align:center;text-decoration: underline;">Patient Admission Form</h1>
	<!--<form>
		Patient-ID:
		<?php //echo " ".$id ;?><br>
		Date of Admission:
		<?php //echo " ".$row[1];?>(DD/MM/YYYY)<br>
		Name:  <?php //echo " ".$row[2];?>(First Name)<?php //echo " ".$row[3];?>(Middle Name)<?php //echo " ".$row[4];?>(Last Name)<br>
		Date of Birth:<?php //echo " ".$row[5];?>(DD/MM/YYYY)<br>
	</form>-->
	<form action = "Form 4.php" method = "post" class="form_layout">
	<!--______________________________________________________________________________<br>-->
	
	<label>Patient ID:&emsp;<input type="Text" name="Patient_ID" required><span style="color: red"> *</span></label><br>
	<label>Date of Advice:&emsp;<input type="Text" name="Date_of_Advice">&emsp;Time:&emsp;<input type="Text" name="Time1"></label><br>
	<label id="table_title">Medicine Advice:</label><br>
	<div style="margin:30px">
		<table class="table-condensed">
			<tr>
				<th style="width:100px">Medicine ID.</th>
				<th style="width:100px">Name of Medicine</th>
				<th style="width:100px">Quantity</th>
				<th style="width:100px">Times in a day</th>
				<th style="width:100px">Morning Before Meal</th>
				<th style="width:100px">Morning After Meal</th>
				<th style="width:100px">Noon Before Meal</th>
				<th style="width:100px">Noon After Meal</th>
				<th style="width:100px">Evening Before Meal</th>
				<th style="width:100px">Evening After Meal</th>
			</tr>
			<tr>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Medicine1_Advise_ID"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="Medicine1_Advise_Name"></th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Quantity1"</th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Times_in_a_day1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MBM1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MAM1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EBM1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EAM1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NBM1"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NAM1"></th>
			</tr>
			<tr>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Medicine2_Advise_ID"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="Medicine2_Advise_Name"></th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Quantity2"></th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Times_in_a_day2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MBM2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MAM2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EBM2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EAM2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NBM2"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NAM2"></th>
			</tr>
			<tr>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Medicine3_Advise_ID"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="Medicine3_Advise_Name"></th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Quantity3"></th>
				<td style="width:100px"><input style = "width: 100px" type="int" name="Times_in_a_day3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MBM3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="MAM3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EBM3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="EAM3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NBM3"></th>
				<td style="width:100px"><input style = "width: 100px" type="Text" name="NAM3"></th>
			</tr>	
		</table>
	</div>
	
	<label id="table_title">Test Advice:</label><br>
	<div style="margin:30px">
		<table class="table-condensed">
			<tr>
				<th style="width:150px">Test ID</th>
				<th style="width:150px">Name of Test</th>
			</tr>
			<tr>
				<td style="width:150px"><input style="width:150px" type="Text" name="Test1_ID"></th>
				<td style="width:150px"><input style="width:150px" name="Name_of_the_Test1"></th>
			</tr>
			<tr>
				<td style="width:150px"><input style="width:150px" name="Test2_ID"></th>
				<td style="width:150px"><input style="width:150px" name="Name_of_the_Test2"></th>
			</tr>
			<tr>
				<td style="width:150px"><input style="width:150px" name="Test3_ID"></th>
				<td style="width:150px"><input style="width:150px" name="Name_of_the_Test3"></th>
			</tr>
				
		</table>
	</div>
	<label>Signature with Date:&emsp;</label>
	<input type="Text" name="Signature"><br>
	<label>Doctor ID:&emsp;<input type="int" name="Doctor_ID" required><span style="color: red"> *</span></label><br>
	<label>Designation:&emsp;</label><input type="Text" name="Designation"><br>
	
	<div class="button_position"><input class="btn btn-primary"type="Submit" name="Submit" value="Submit"></div>
	</form>
	
</body>
</html>

<?php
			
				if(isset($_POST['Submit'])){
				//$Patient_ID = $_POST['$id'];
				
				$Patient_ID = $_POST['Patient_ID'];
				$Date_of_Advice = $_POST['Date_of_Advice'];
				$Time1 = $_POST['Time1'];
				
				
				$Medicine1_Advise_ID = $_POST['Medicine1_Advise_ID'];
				$Medicine1_Advise_Name = $_POST['Medicine1_Advise_Name'];
				$Quantity1 = $_POST['Quantity1'];
				$Times_in_a_day1 = $_POST['Times_in_a_day1'];

				$MBM1 = $_POST['MBM1'];
				$MAM1 = $_POST['MAM1'];
				$EBM1 = $_POST['EBM1'];
				$EAM1 = $_POST['EAM1'];
				$NBM1 = $_POST['NBM1'];
				$NAM1 = $_POST['NAM1'];
				
				
				$Medicine2_Advise_ID = $_POST['Medicine2_Advise_ID'];
				$Medicine2_Advise_Name = $_POST['Medicine2_Advise_Name'];
				$Quantity2 = $_POST['Quantity2'];
				$Times_in_a_day2 = $_POST['Times_in_a_day2'];

				$MBM2 = $_POST['MBM2'];
				$MAM2 = $_POST['MAM2'];
				$EBM2 = $_POST['EBM2'];
				$EAM2 = $_POST['EAM2'];
				$NBM2 = $_POST['NBM2'];
				$NAM2 = $_POST['NAM2'];
				
				
				$Medicine3_Advise_ID = $_POST['Medicine3_Advise_ID'];
				$Medicine3_Advise_Name = $_POST['Medicine3_Advise_Name'];
				$Quantity3 = $_POST['Quantity3'];
				$Times_in_a_day3 = $_POST['Times_in_a_day3'];

				$MBM3 = $_POST['MBM3'];
				$MAM3 = $_POST['MAM3'];
				$EBM3 = $_POST['EBM3'];
				$EAM3 = $_POST['EAM3'];
				$NBM3 = $_POST['NBM3'];
				$NAM3 = $_POST['NAM3'];

				
				$Test1_ID = $_POST['Test1_ID'];
				$Test2_ID = $_POST['Test2_ID'];
				$Test3_ID = $_POST['Test3_ID'];

				$Name_of_the_Test1 = $_POST['Name_of_the_Test1'];
				$Name_of_the_Test2 = $_POST['Name_of_the_Test2'];	
				$Name_of_the_Test3 = $_POST['Name_of_the_Test3'];


				$Signature = $_POST['Signature'];
				$Doctor_ID = $_POST['Doctor_ID'];
				$Designation = $_POST['Designation'];

   				$result = 

				"INSERT INTO Prescription(
				Patient_ID,Date_of_Advice,Time1,Signature,Doctor_ID ,Designation,
				Medicine_ID,Medicine_Name,Quantity,Times_in_a_day,
				MBM,MAM,EBM,EAM,NBM,NAM)
				VALUES
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation',
				'$Medicine1_Advise_ID','$Medicine1_Advise_Name','$Quantity1','$Times_in_a_day1',
				'$MBM1','$MAM1','$EBM1','$EAM1','$NBM1','$NAM1'),
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation',
				'$Medicine2_Advise_ID','$Medicine2_Advise_Name','$Quantity2','$Times_in_a_day2',
				'$MBM2','$MAM2','$EBM2','$EAM2','$NBM2','$NAM2'),
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation',
				'$Medicine3_Advise_ID','$Medicine3_Advise_Name','$Quantity3','$Times_in_a_day3',
				'$MBM3','$MAM3','$EBM3','$EAM3','$NBM3','$NAM3')";	

				$result = mysqli_query($conn, $result);

				$result2 = 

				"INSERT INTO Test_Advice(
				Patient_ID,Date_of_Advice,Time1,Signature,Doctor_ID,Designation,Test_ID,Name_of_the_test)

				VALUES
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation','$Test1_ID','$Name_of_the_Test1'),
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation','$Test2_ID','$Name_of_the_Test2'),
				('$Patient_ID','$Date_of_Advice','$Time1','$Signature','$Doctor_ID','$Designation','$Test3_ID','$Name_of_the_Test3')";

	
				$result2 = mysqli_query($conn, $result2);
				
				/*if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}*/
				$result3="DELETE FROM `prescription` WHERE Medicine_ID=0 or Doctor_ID=0";
				$result3 = mysqli_query($conn, $result3);
				
				
				$result5="Delete from Test_Advice where Test_ID=0 or Doctor_ID=0";
				$result5 = mysqli_query($conn, $result5);
				
				$result4="  Update Bill_Patient
							set bill=bill+(Select SUM(prescription.Quantity*medicine.Medicine_Unit_Price)
							From prescription,medicine 
							where medicine.Medicine_ID=prescription.Medicine_ID and prescription.Patient_ID=$Patient_ID)
							where bill_patient.Patient_Id=$Patient_ID";
				$result4 = mysqli_query($conn, $result4);
				
				$result6="  Update Bill_Patient
							set bill=bill+(Select SUM(Cost) From Test_Advice,test_info 
							where Test_Advice.Test_ID=test_info.test_id and Test_Advice.Patient_ID=$Patient_ID)
							where bill_patient.Patient_Id=$Patient_ID";
			
				$result6 = mysqli_query($conn, $result6);		
				
				echo "<div class=\"success_message\">";
				echo "Patient Health Record is Succesfully Added.Thank You.";
				echo "</div>";			
			}			
?>