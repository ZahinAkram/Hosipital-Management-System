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
		

<title>Form 9</title>
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
	.success_message{
			margin-left:500px;
			font-weight: bold;
			font-size: 18px
	}	
	label{
    		margin-top: 5px;
    		margin-bottom: 5px;
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
<h1 style="text-align:center;text-decoration: underline;">Cabin Information Form</h1>

<form action="Form 9.php" method="post" class="form_layout">
	<label>	Cabin ID:&emsp;</label>
	<label><input type="int" name="Cabin_ID" required></label><span style="color: red"> *</span></br>
	<label>Rent:&emsp;&emsp;&nbsp;&nbsp;&nbsp;</label>
	<label><input type="int" name="Rent" required></label><span style="color: red"> *</span></br>
	<label>Status:&emsp;&emsp;</label>
	<label><input type="text" name="C_Status" required></label><span style="color: red"> *</span><br>
	
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
			$Cabin_Id = $_POST['Cabin_ID'];
			$Rent = $_POST['Rent'];
			$C_Status = $_POST['C_Status'];	
			
			
			$result="Insert into Cabin(Cabin_Id,Rent,C_Status)
			 Values
			('$Cabin_Id','$Rent','$C_Status')";
			
			$result = mysqli_query($conn, $result);
			
			$result2="delete from Cabin where C_Status =''";
			$result2 = mysqli_query($conn, $result2);
			
			echo "<div class=\"success_message\">";
			echo "Cabin Successfully Added.";
			echo "</div>";
 
			}
			
			

?>

