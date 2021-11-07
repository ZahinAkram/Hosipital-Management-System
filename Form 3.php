<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>
<html>
<head>
		
<title>Form 3</title>
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
		label{
    		margin-top: 10px;
    		margin-bottom: 10px;
		}
		.button_position{
			margin-top: 20px;
			margin-left:500px;
		}
		.success_message{
			margin-left:400px;
			font-weight: bold;
			font-size: 18px
		}

</style>
<body>

<h1 style="text-align:center;text-decoration: underline;">Patient Admission Form</h1>
	<form class = "form_layout" action = "Form 3.php" method = "post">
		<span style="font-size: 20px;font-weight: bold;">Patient personal information:</span><br><br>
		<label>Patient ID:&emsp;<input type="Text" name="Patient_ID" required><span style="color: red"> *</span></label><br>
		<label>Height:&emsp;&emsp;&nbsp;<input type="Text" name="Height">&emsp; Weight:&emsp;<input type="Text" name="Weight"></label><br>
		<label>Symptoms of the disease: 1.<input type="Text" name="S1" >&emsp;2.<input type="Text" name="S2">&emsp;3.<input type="Text" name="S3"></label><br>
		<div style="margin-left:180px">
		<label>&nbsp;4.<input type="Text" name="S4">&emsp;5.<input type="Text" name="S5">&emsp;6.<input type="Text" name="S6"></label>
		</div><label>
		Blood Pressure:&emsp; Lower <input type="Text" name="BPL">&emsp;&emsp;Upper <input type="Text" name="BPH"></label><br>
		<label>General Food Habit:</label><br>
		
		<label>
		Breakfast:&emsp;<input type="Text" name="GFH_BF1"> <input type="Text" name="GFH_BF2"> <input type="Text" name="GFH_BF3" ></label>
		<label>
		Lunch:&emsp;&emsp;&nbsp;&nbsp;<input type="Text" name="GFH_LU1"> <input type="Text" name="GFH_LU2"> <input type="Text" name="GFH_LU3">
		</label>
		<label>
		Dinner:&emsp;&emsp;<input type="Text" name="GFH_DN1"> <input type="Text" name="GFH_DN2"> <input type="Text" name="GFH_DN3">
		</label><br>
		<b>Hobby:</b><br>
		
		<label>&emsp;Game:</label><br><label>
		&emsp;&emsp;<input type="Radio" name="Hobby_Game" value="Football" checked>Football<input type="Radio" name="Hobby_Game" value="Hockey">Hockey
		<input type="Radio" name="Hobby_Game" value="Volley Ball">Volley Ball<input type="Radio" name="Hobby_Game" value="Cricket">Cricket
		<input type="Radio" name="Hobby_Game" value="Chess">Chess<input type="Radio" name="Hobby_Game" value="All">All
		<input type="Radio" name="Hobby_Game" value="Other">Other</label><br><label>
		&emsp;Others:</label><br><label>
		&emsp;&emsp;<input type="Radio" name="Hobby_Others" value="Tourism"checked>Tourism<input type="Radio" name="Hobby_Others" value="Writing">Writing</label><br>
		<label>Disease Name:
		<input type="Text" name="SD"></label><br>
		<label>Signature with Date:
		<input type="Text" name="Sigature"></label><br>
		<label>Doctor ID: <input type="int" name="Doctor_ID" required><span style="color: red"> *</span>&emsp;Doctor Name: <input type="Text" name="Doctor_Name" ></label><br>
		<label>Designation: <input type="Text" name="Designation"></label><br>
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
				$id = $_POST['Patient_ID'];
				$Height = $_POST['Height'];
				$Weight = $_POST['Weight'];
				$S1 = $_POST['S1'];
				$S2 = $_POST['S2'];
				$S3 = $_POST['S3'];
				$S4 = $_POST['S4'];
				$S5 = $_POST['S5'];
				$S6 = $_POST['S6'];
				$BPL = $_POST['BPL'];
				$BPH = $_POST['BPH'];
				$GFH_BF1 = $_POST['GFH_BF1'];
				$GFH_BF2 = $_POST['GFH_BF2'];
				$GFH_BF3 = $_POST['GFH_BF3'];
				$GFH_LU1 = $_POST['GFH_LU1'];
				$GFH_LU2 = $_POST['GFH_LU2'];
				$GFH_LU3 = $_POST['GFH_LU3'];
				$GFH_DN1 = $_POST['GFH_DN1'];
				$GFH_DN2 = $_POST['GFH_DN2'];
				$GFH_DN3 = $_POST['GFH_DN3'];
				$Hobby_Game = $_POST['Hobby_Game'];
				$Hobby_Others = $_POST['Hobby_Others'];
   				$SD = $_POST['SD'];
   				$Doctor_ID = $_POST['Doctor_ID'];
   				$Doctor_Name = $_POST['Doctor_Name'];
   				$Designation= $_POST['Designation'];

   				$result = 

				"INSERT INTO Patient_Health_Records(
				PHR_ID,Height,Weight,S1,S2,S3,S4,S5,S6,
				BPL,BPH,
				GFH_BF1,GFH_BF2,GFH_BF3,
				GFH_LU1,GFH_LU2,GFH_LU3,
				GFH_DN1,GFH_DN2,GFH_DN3,
				Hobby_Game,Hobby_Others,SD,
				Doctor_ID,Doctor_Name,Designation) 
				
				VALUES(
				'$id','$Height','$Weight',
				'$S1','$S2','$S3','$S4','$S5','$S6','$BPL','$BPH',
				'$GFH_BF1','$GFH_BF2','$GFH_BF3',
				'$GFH_LU1','$GFH_LU2','$GFH_LU3',
				'$GFH_DN1','$GFH_DN2','$GFH_DN3',
				'$Hobby_Game','$Hobby_Others',
				'$SD','$Doctor_ID','$Doctor_Name','$Designation')";
				
				
				$result = mysqli_query($conn, $result);
				
				echo "<div class=\"success_message\">";
				echo "Patient Record Sucessfully Added.";
				echo "</div>";	
			}		
				
?>



