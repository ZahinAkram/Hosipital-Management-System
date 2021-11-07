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
		

<title>Form 8</title>
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
<h1 style="text-align:center;text-decoration: underline;">Medicine Entry Form</h1>
	<form action = "Form 8.php" method = "post" class="form_layout">
	
	<label>Supplier ID:&nbsp;&nbsp;&emsp;&emsp;</label>
	<label><input type="int" name="Supplier_ID" required>
	<span style="color: red"> *</span></label></br>
	<label>Supplier Name:&emsp;</label>
	<label><input type="Text" name="Supplier_Name"></label></br>
	<label>Date of Supply:&nbsp;&emsp;<input type="Text" name="Date_of_Supply">(DD/MM/YYYY)</label><br>
	
	<div style="margin:10px">
		<table class="table-condensed">
			<tr >
				<th style="width:150px">Medicine ID</th>
				<th style="width:150px">Name</th>
				<th style="width:150px">Type</th>
				<th style="width:150px">Unit Price</th>
				<th style="width:150px">Quantity</th>
				<th style="width:150px">Date of Manufacture</th>
				<th style="width:150px">Expiry Date</th>
			</tr>
			<tr>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine1_ID"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine1_Name"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine1_Type"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine1_Unit_Price"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine1_Quantity"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine1_Date_of_Manufacture"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine1_Expiry_date"></th>
			
			</tr>
			<tr>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine2_ID"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine2_Name"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine2_Type"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine2_Unit_Price"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine2_Quantity"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine2_Date_of_Manufacture"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine2_Expiry_date"></th>
				
			</tr>
			<tr>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine3_ID"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine3_Name"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine3_Type"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine3_Unit_Price"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine3_Quantity"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine3_Date_of_Manufacture"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine3_Expiry_date"></th>
				
			</tr>
			<tr>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine4_ID"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine4_Name"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine4_Type"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine4_Unit_Price"></th>
				<td style="width:150px"><input style = "width: 150px" type="int" name="Medicine4_Quantity"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine4_Date_of_Manufacture"></th>
				<td style="width:150px"><input style = "width: 150px" type="Text" name="Medicine4_Expiry_date"></th>
				
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
				$Supplier_ID = $_POST['Supplier_ID'];
				$Supplier_Name = $_POST['Supplier_Name'];
				$Date_of_Supply = $_POST['Date_of_Supply'];

				$Medicine1_ID = $_POST['Medicine1_ID'];
				$Medicine1_Name = $_POST['Medicine1_Name'];
				$Medicine1_Type = $_POST['Medicine1_Type'];
				$Medicine1_Unit_Price = $_POST['Medicine1_Unit_Price'];
				$Medicine1_Quantity = $_POST['Medicine1_Quantity'];
				$Medicine1_Date_of_Manufacture = $_POST['Medicine1_Date_of_Manufacture'];
				$Medicine1_Expiry_date = $_POST['Medicine1_Expiry_date'];

				$Medicine2_ID = $_POST['Medicine2_ID'];
				$Medicine2_Name = $_POST['Medicine2_Name'];
				$Medicine2_Type = $_POST['Medicine2_Type'];
				$Medicine2_Unit_Price = $_POST['Medicine2_Unit_Price'];
				$Medicine2_Quantity = $_POST['Medicine2_Quantity'];
				$Medicine2_Date_of_Manufacture = $_POST['Medicine2_Date_of_Manufacture'];
				$Medicine2_Expiry_date = $_POST['Medicine2_Expiry_date'];

				$Medicine3_ID = $_POST['Medicine3_ID'];
				$Medicine3_Name = $_POST['Medicine3_Name'];
				$Medicine3_Type = $_POST['Medicine3_Type'];
				$Medicine3_Unit_Price = $_POST['Medicine3_Unit_Price'];
				$Medicine3_Quantity = $_POST['Medicine3_Quantity'];
				$Medicine3_Date_of_Manufacture = $_POST['Medicine3_Date_of_Manufacture'];
				$Medicine3_Expiry_date = $_POST['Medicine3_Expiry_date'];

				$Medicine4_ID = $_POST['Medicine4_ID'];
				$Medicine4_Name = $_POST['Medicine4_Name'];
				$Medicine4_Type = $_POST['Medicine4_Type'];
				$Medicine4_Unit_Price = $_POST['Medicine4_Unit_Price'];
				$Medicine4_Quantity = $_POST['Medicine4_Quantity'];
				$Medicine4_Date_of_Manufacture = $_POST['Medicine4_Date_of_Manufacture'];
				$Medicine4_Expiry_date = $_POST['Medicine4_Expiry_date'];

				$result = "INSERT INTO medicine(Supplier_ID,Supplier_Name,Date_of_Supply,
				Medicine_ID,Medicine_Name,Medicine_Type,Medicine_Unit_Price,
				Medicine_Quantity,Medicine_Date_of_Manufacture,Medicine_Expiry_date)
				VALUES
				('$Supplier_ID','$Supplier_Name','$Date_of_Supply','$Medicine1_ID','$Medicine1_Name','$Medicine1_Type','$Medicine1_Unit_Price','$Medicine1_Quantity','$Medicine1_Date_of_Manufacture','$Medicine1_Expiry_date'),
				('$Supplier_ID','$Supplier_Name','$Date_of_Supply','$Medicine2_ID','$Medicine2_Name','$Medicine2_Type','$Medicine2_Unit_Price','$Medicine2_Quantity','$Medicine2_Date_of_Manufacture','$Medicine2_Expiry_date'),
				('$Supplier_ID','$Supplier_Name','$Date_of_Supply','$Medicine3_ID','$Medicine3_Name','$Medicine3_Type','$Medicine3_Unit_Price','$Medicine3_Quantity','$Medicine3_Date_of_Manufacture','$Medicine3_Expiry_date'),
				('$Supplier_ID','$Supplier_Name','$Date_of_Supply','$Medicine4_ID','$Medicine4_Name','$Medicine4_Type','$Medicine4_Unit_Price','$Medicine4_Quantity','$Medicine4_Date_of_Manufacture','$Medicine4_Expiry_date')";
				
				$result2="delete from medicine where Medicine_ID=0";

				$result = mysqli_query($conn, $result); 
				$result2 = mysqli_query($conn, $result2);
				/*if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}*/
				echo "<div class=\"success_message\">";
				echo "Medicine Successfully Added.";
				echo "</div>";
			}
			

?>
