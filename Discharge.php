<?php
	include("navbar.php");
	include("background.php");
?>
<html>
<head>		
<title>Discharge Patient</title>
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
	#table_title{
			font-size: 18px;
		}
	.button_position{
			margin-top: 20px;
			margin-left:520px;
		}
	.success_message{
			margin-left:500px;
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
<body style = "background-color:#EBEDF0">
	<form action="Discharge.php" method="post" class="form_layout" style = "border: none;">
		<label id = "username">Patient ID to Discharge:&emsp;<input type="int" name="Patient_ID"></label></br>
		<div class="button_position"><input class="btn btn-primary"type="Submit" name="Submit" value="Submit"></div>
	</form>
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
		$Patient_ID=$_POST['Patient_ID'];
		
		
		$result4="Select Cabin_ID from Patient_Cabin
					where Patient_ID='$Patient_ID'";
		$result4 = mysqli_query($conn, $result4);
		
		$row=mysqli_fetch_array($result4);
		
		$result5="Update Cabin 
					Set C_Status='Empty'
					where Cabin_ID='$row[0]'";
		$result5 = mysqli_query($conn, $result5);
		
		$result3="Delete From Patient_Cabin where Patient_ID='$Patient_ID'";
		$result3 = mysqli_query($conn, $result3);
		
		$result6="Select Ward_ID,Bed_No From Patient_Ward where Patient_ID='$Patient_ID'";
		$result6 = mysqli_query($conn, $result6);
		$row2=mysqli_fetch_array($result6);
		
		$result7="Update Ward 
					Set W_Status='Empty'
					where Ward_ID='$row2[0]' and Bed_No='$row2[1]'";
		$result7 = mysqli_query($conn, $result7);
		
		$result2="Delete From Patient_Ward where Patient_ID='$Patient_ID'";
		$result2 = mysqli_query($conn, $result2);
		
		echo "<div class=\"password_message\">";
		echo "<font color='red'>Succesfully Deleted.</font>";
		echo "</div>";
		//echo "<td><a href=\"Final_Bill.php?id=$Patient_ID\">For The Receipt Press here</a>";
		/*$result2="Create Trigger Prescription_Delete After Delete of Patient
					referencing oew row as orow	
					for each row
					begin atomic
						delete from bill_patient
						where bill_patient.Patient_Id =orow.Patient_Id int
					end";
		$result2 = mysqli_query($conn, $result2);*/
		
		$query = "SELECT * FROM patient WHERE Patient_ID='$Patient_ID'";
		$query = mysqli_query($conn, $query);
		$output = mysqli_fetch_array($query);
		
		$query2="Select * From bill_patient where Patient_ID='$Patient_ID'";
		$query2 = mysqli_query($conn, $query2);
		$output2 = mysqli_fetch_array($query2);
		?>
		<div>
		<form class="form_layout">
				<label>This is the receipt to be given to the patient:</label><br>
				<label>Patient ID:<?php echo " ".$Patient_ID ;?></label><br>
				<label>Date of Admission:<?php echo " ".$output[1];?>(DD/MM/YYYY)</label><br>
				<label>Name: <?php echo " ".$output[2];?><?php echo " ".$output[3];?><?php echo " ".$output[4];?></label><br>
				<label>Mobile(1): <?php echo " ".$output[6];?>Mobile(2)<?php echo " ".$output[7];?></label><br>
				<label>Choice:<?php echo " ".$output[20];?></label><br>
				<label>Signature <?php echo " ".$output[21];?></label><br>
				<label>Final Bill:<?php echo " ".$output2[1];?></label>
		</form>
		</div>
<?php		
		$result="Delete From Patient where Patient_ID='$Patient_ID'";
		$result = mysqli_query($conn, $result);

		$Del="Delete From bill_patient where Patient_ID='$Patient_ID'";
		$Del = mysqli_query($conn, $Del);

		$Del2="Delete From Patient_Health_Records where Patient_ID='$Patient_ID'";
		$Del2 = mysqli_query($conn, $Del2);

		$Del3="Delete From Prescription where Patient_ID='$Patient_ID'";
		$Del3 = mysqli_query($conn, $Del3);

		$Del4="Delete From Test_advice where Patient_ID='$Patient_ID'";
		$Del4 = mysqli_query($conn, $Del4);
	}
?>
</body>
</html>

