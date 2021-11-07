<?php
	include("navbar.php");
	include("background.php");
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Form 1</title>
	</head>
	<style>
	.button_position{
			margin-top: 20px;
			margin-left:500px;
		}
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
	#Address_Title{
			font-size: 18px;
		}
	.link_position{
			margin-left:500px;
			font-weight: bold;
			font-size: 18px;

		}
	.success_message{
			margin-left:400px;
			font-weight: bold;
			font-size: 18px
	}
	</style>
	
	<body>
		<h1 style="text-align:center;text-decoration: underline;">Patient Admission Form</h1><br><br>

		<form class = "form_layout" action = "Form 1.php" method = "post">
			<label>Date of Admission:&emsp;<input type="Text" name="Date_of_admission">(DD/MM/YYYY)</label><br>

			<label>Name: <input type="Text" name="First_Name" required>(First Name)<span style="color: red"> *</span>&emsp;<input type="Text" name="Middle_Name">(Middle Name)&emsp;<input type="Text" name="Last_Name"  required>(Last Name)<span style="color: red"> *</span></label><br>
			<label>Date of Birth:<input type="Text" name="Date_of_Birth">(DD/MM/YYYY)</label><br>
			<label>
			Mobile(1): <input type="Text" name="Mobile_1">&emsp;Mobile(2): <input type="Text" name="Mobile_2"></label><br>
			<br><label id = "Address_Title">

			Present Address:</label><br><label>
			&emsp;Street No/Village: <input type="Text" name="PAD_Street_No">&emsp;Street Name: <input type="Text" name="PAD_Street_Name"><br></label><label>
			&emsp;Area: <input type="Text" name="PAD_Area">&emsp;Thana: <input type="Text" name="PAD_Thana">&emsp;District: <input type="Text" name="PAD_District">
			</label><br>

			<label id = "Address_Title">Permanent Address:</label><br>
			<label>&emsp;Street No/Village: <input type="Text" name="PerAD_Street_No">&emsp;Street Name: <input type="Text" name="PerAD_Name"></label><br>
			<label>&emsp;Area: <input type="Text" name="PerAD_Area">&emsp;Thana: <input type="Text" name="PerAD_Thana">&emsp;District: <input type="Text" name="PerAD_District"></label><br>

			<label>Profession:</label><br>
			&emsp;<label><input type="Radio" name="Profession" value="Government Job"checked>Government Job&nbsp;<input type="Radio" name="Profession" value="Private Job">Private Job&nbsp; 
			<input type="Radio" name="Profession" value="Business">Business&nbsp;<input type="Radio" name="Profession" value="Farmer">Farmer&nbsp;
			<input type="Radio" name="Profession" value="Retired">Retired&nbsp;<input type="Radio" name="Profession" value="Other">
			Other&nbsp;</label><br>

			<label>
			Amount Deposited:
			<input type="Text" name="Amount_Deposited"></label><br>
			<label>
			Choice:&emsp;
			<input type="Radio" name="Choice" value="Cabin"checked>Cabin<input type="Radio" name="Choice" value="Ward">Ward
			</label><br>
			<label>Signature:
			<input type="Text" name="Signature"></label><br>
			<label>Name: <input type="Text" name="Name_of_Person_Admitted"></label><br>
			<label>Relation with the Patient:<input type="Text" name="RP"></label><br>	

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
				$Date_of_admission = $_POST['Date_of_admission'];
				$First_Name = $_POST['First_Name'];
				$Middle_Name = $_POST['Middle_Name'];
				$Last_Name = $_POST['Last_Name'];
				$Date_of_Birth = $_POST['Date_of_Birth'];
				$Mobile_1 = $_POST['Mobile_1'];
				$Mobile_2 = $_POST['Mobile_2'];
				$PAD_Street_No = $_POST['PAD_Street_No'];
				$PAD_Street_Name = $_POST['PAD_Street_Name'];
				$PAD_Area  = $_POST['PAD_Area'];
				$PAD_Thana = $_POST['PAD_Thana'];
				$PAD_District= $_POST['PAD_District'];
				$PerAD_Street_No = $_POST['PerAD_Street_No'];
				$PerAD_Name = $_POST['PerAD_Name'];					
				$PerAD_Area = $_POST['PerAD_Area'];	
				$PerAD_Thana  = $_POST['PerAD_Thana'];	
				$PerAD_District = $_POST['PerAD_District'];
				$Profession = $_POST['Profession'];
				$Amount_Deposited = $_POST['Amount_Deposited'];
				$Choice = $_POST['Choice'];
				$Signature = $_POST['Signature'];
				$Name_of_Person_Admitted= $_POST['Name_of_Person_Admitted'];
				$RP= $_POST['RP'];
				
				$result = 

				"INSERT INTO Patient(Date_of_admission,First_Name,Middle_Name,Last_Name,
				Date_of_Birth,Mobile_1,Mobile_2,
				PAD_Street_No,PAD_Street_Name,PAD_Area,PAD_Thana,PAD_District,
				PerAD_Street_No,PerAD_Name,PerAD_Area,PerAD_Thana,PerAD_District,
				Profession,Amount_Deposited,Choice,
				Signature,Name_of_Person_Admitted,RP) 
				
				VALUES('$Date_of_admission','$First_Name','$Middle_Name','$Last_Name',
				'$Date_of_Birth','$Mobile_1','$Mobile_2',
				'$PAD_Street_No','$PAD_Street_Name','$PAD_Area','$PAD_Thana','$PAD_District',
				'$PerAD_Street_No','$PerAD_Name','$PerAD_Area','$PerAD_Thana','$PerAD_District',
			    '$Profession','$Amount_Deposited','$Choice','$Signature','$Name_of_Person_Admitted','$RP')";
				
				$result = mysqli_query($conn, $result);
				
				echo "<div class=\"success_message\">";
				echo "Your registration is succesfully completed.Thank You.";
				echo "</div>";
				
				$result2="Select MAX(Patient_ID)From patient";
				$result2 = mysqli_query($conn, $result2);
				$row = mysqli_fetch_array($result2);
				//echo $row[0];
				$result3="Insert into Bill_Patient(Patient_ID,bill) VALUES('$row[0]',0)";
				$result3 = mysqli_query($conn, $result3);
				
				
				if($Choice=='Ward'){
					$query="Select tab1.MIN_Ward,MIN(Bed_No)
							From Ward,(Select MIN(Ward_ID) as MIN_Ward From Ward where W_Status='Empty') as tab1 
							where W_Status='Empty' and Ward_ID=(Select MIN(Ward_ID) as MIN_Ward From Ward where W_Status='Empty')";
					$query=mysqli_query($conn,$query);
					$row2 = mysqli_fetch_array($query);
					
					$query2="Insert Into patient_ward(Patient_ID,Ward_ID,Bed_No) VALUES('$row[0]','$row2[0]','$row2[1]')";
					$query2 = mysqli_query($conn,$query2);
					$query3="Update Bill_Patient
							set bill=bill+(Select Rent From Ward Natural Join patient_ward where patient_ward.Patient_ID='$row[0]')
							where Bill_Patient.Patient_Id='$row[0]'";//echo $row[0];
					$query3 = mysqli_query($conn,$query3);
					
					$query4 =  "Update Ward
								Set W_Status='Occupied'
								where Ward_ID='$row2[0]' and Bed_No='$row2[1]'";
					$query4 = mysqli_query($conn,$query4);					
				}
				else{
					$query5="Select MIN(Cabin_ID)
							From Cabin 
							where C_Status='Empty'";
					
					$query5= mysqli_query($conn,$query5);
					
					$row3 = mysqli_fetch_array($query5);
					
					$query6="Insert Into patient_cabin(Patient_ID,Cabin_ID) VALUES('$row[0]','$row3[0]')";
					$query6 = mysqli_query($conn,$query6);
					
					$query7="Update Bill_Patient
							set bill=bill+(Select Rent From Cabin Natural Join patient_Cabin where patient_cabin.Patient_ID='$row[0]')
							where Bill_Patient.Patient_Id='$row[0]'";
					$query7 = mysqli_query($conn,$query7);
					
					$query8 =  "Update Cabin
								Set C_Status='Occupied'
								where Cabin_ID='$row3[0]'";
					$query8 = mysqli_query($conn,$query8);					
					
				}
				
				echo "<div class=\"link_position\">";
				echo "<a href=\"Form 2.php?id=$row[0]\">For The Receipt Press here</a>";
				echo "</div>";

			}
			
?>

