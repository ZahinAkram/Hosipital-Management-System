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
		

<title>Form 7</title>
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
    		margin-top: 5px;
    		margin-bottom: 5px;
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
<h1 style="text-align:center;text-decoration: underline;">Ward Information Form</h1>
	<form action="Form 7.php" method="post" class="form_layout">
	
		<label>Ward ID:&emsp;</label>
		<label><input type="int" name="Ward_Id" required>
		<span style="color: red"> *</span></label></br>
		<label>Ward Name:&emsp;</label>
		<label><input type="Text" name="Ward_Name"></label></br>
		<label>Register ID:&nbsp;&emsp;</label>
		<label><input type="int" name="Register_Id" required>
		<span style="color: red"> *</span></label>
		<label>&emsp;Name:&emsp;</label>
		<label><input type="Text" name="Register_Name"></label></br>
		<label>Nurse Supervisor ID:&emsp;</label>
		<label><input type="int" name="Nurse_Id"></label>
		<label>&emsp;Name:&emsp;</label>
		<label><input type="Text" name="Nurse_Name"></label></br>
		<label id = "table_title">Bed Record:&emsp;</label>
		
		<div style="margin:10px">
			<table class="table-condensed">
				<tr >
					<th>Serial No.</th>
					<th>Bed No</th>
					<th>Bed Type</th>
					<th>Rent</th>
					<th>Status(Empty/Occupied)</th>
				</tr>
				<tr>
					<th>1</th>
					<th><input type="int" name="Bed_No1"></th>
					<th><input type="Text" name="Bed_Type1"></th>
					<th><input type="int" name="Rent1"></th>
					<th><input type="Text" name="Status1"></th>
				</tr>
				<tr>
					<th>2</th>
					<th><input type="int" name="Bed_No2"></th>
					<th><input type="Text" name="Bed_Type2"></th>
					<th><input type="int" name="Rent2"></th>
					<th><input type="Text" name="Status2"></th>
						
				</tr>
				<tr>
					<th>3</th>
					<th><input type="int" name="Bed_No3"></th>
					<th><input type="Text" name="Bed_Type3"></th>
					<th><input type="int" name="Rent3"></th>
					<th><input type="Text" name="Status3"></th>
					
				</tr>
				<tr>
					<th>4</th>
					<th><input type="int" name="Bed_No4"></th>
					<th><input type="Text" name="Bed_Type4"></th>
					<th><input type="int" name="Rent4"></th>
					<th><input type="Text" name="Status4"></th>
					
				</tr>
				<tr>
					<th>5</th>
					<th><input type="int" name="Bed_No5"></th>
					<th><input type="Text" name="Bed_Type5"></th>
					<th><input type="int" name="Rent5"></th>
					<th><input type="Text" name="Status5"></th>
					
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
			
				die("Connection failed: " .$conn->connect_error);
			} 
			
			if(isset($_POST['Submit'])){	
			$Ward_Id = $_POST['Ward_Id'];
			$Ward_Name = $_POST['Ward_Name'];
			$Register_Id = $_POST['Register_Id'];	
			$Register_Name = $_POST['Register_Name'];
			$Nurse_Supervisor_Id = $_POST['Nurse_Id'];
			$Nurse_Name = $_POST['Nurse_Name'];
			
			$Bed_No1 = $_POST['Bed_No1'];
			$Bed_Type1 = $_POST['Bed_Type1'];
			$Rent1 = $_POST['Rent1'];
			$Status1 = $_POST['Status1'];
			
			$Bed_No2 = $_POST['Bed_No2'];
			$Bed_Type2 = $_POST['Bed_Type2'];
			$Rent2 = $_POST['Rent2'];
			$Status2 = $_POST['Status2'];
			
			$Bed_No3 = $_POST['Bed_No3'];
			$Bed_Type3 = $_POST['Bed_Type3'];
			$Rent3 = $_POST['Rent3'];
			$Status3 = $_POST['Status3'];
			
			$Bed_No4 = $_POST['Bed_No4'];
			$Bed_Type4 = $_POST['Bed_Type4'];
			$Rent4 = $_POST['Rent4'];
			$Status4 = $_POST['Status4'];
			
			$Bed_No5 = $_POST['Bed_No5'];
			$Bed_Type5 = $_POST['Bed_Type5'];
			$Rent5= $_POST['Rent5'];
			$Status5 = $_POST['Status5'];
			
			$result="Insert into Ward (Ward_Id,Ward_Name,Register_Id,Register_Name,Nurse_Supervisor_Id,Nurse_Name,Bed_No,Bed_Type,Rent,W_Status)
			 Values
			('$Ward_Id','$Ward_Name','$Register_Id','$Register_Name','$Nurse_Supervisor_Id','$Nurse_Name','$Bed_No1','$Bed_Type1','$Rent1','$Status1'),
			('$Ward_Id','$Ward_Name','$Register_Id','$Register_Name','$Nurse_Supervisor_Id','$Nurse_Name','$Bed_No2','$Bed_Type2','$Rent2','$Status2'),	
			('$Ward_Id','$Ward_Name','$Register_Id','$Register_Name','$Nurse_Supervisor_Id','$Nurse_Name','$Bed_No3','$Bed_Type3','$Rent3','$Status3'),	
			('$Ward_Id','$Ward_Name','$Register_Id','$Register_Name','$Nurse_Supervisor_Id','$Nurse_Name','$Bed_No4','$Bed_Type4','$Rent4','$Status4'),	
			('$Ward_Id','$Ward_Name','$Register_Id','$Register_Name','$Nurse_Supervisor_Id','$Nurse_Name','$Bed_No5','$Bed_Type5','$Rent5','$Status5')";
			
			$result = mysqli_query($conn, $result);
			
			$result2="delete from Ward where W_Status =''";
			$result2 = mysqli_query($conn, $result2);
			
			echo "<div class=\"success_message\">";
			echo "Bed Record Successfully Added.";
			echo "</div>";
 
			}
			
			

?>

