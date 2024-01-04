<html>
<head>
<style>
</style>
<script>
function showDetails() {
            var option = document.querySelector('input[name="answer"]:checked').value;
            var additionalDetailsDiv = document.getElementById("additional-details");

            if (option === "true") {
                additionalDetailsDiv.innerHTML = '';
            } else if (option === "false") {
                additionalDetailsDiv.innerHTML = '<label>For Repeat Donor';
            }
        }
</script>
 <link rel="stylesheet" type="text/css" href="donat1.css">
 </head>
<body>
<center>
<form action="" method="POST"><br>
<div class="photos">
  <img src="img/logo.png" alt="Logo" width="300" height="200">
</div>
<u><h2>Blood Donation Application Form</h2></u>
</br>
<h3>
        <input type="radio" name="answer" value="true" id="true" onclick="showDetails()">
        First Time Donor&nbsp&nbsp
        <input type="radio" name="answer" value="false" id="false" onclick="showDetails()">
    Repeat Donor&nbsp&nbsp
	</h3>
</br>

<label>First Name:</label>
<input type="text" name="fname" id="fname"><br><br>

<label>Last Name:</label>
<input type="text" name="lname" id="lname"><br><br>

 <label for="date">Date Of Birth:</label>
<input class="dob"type="date" name="dob" id="dob"><br><br>
<label>Select Blood Group:</label>
<select name="blood" id="blood"><br><br>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
 </select><br><br>

 <label>Last Date of Blood Donet:</label>
<input class="dob" type="date" name="last" id="last"><br><br>
<label>Contact No.:</label>
<input type="text" name="cont" id="cont"><br><br>

<label>Address:</label>
<input type="text" name="add" id="add"><br><br>


<button type="submit">Submit</button>
</h3>
</form>
</center>
</body>
</html>
<div id="additional-details"></div>
<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["option"])) {
		$selectedOption = $_POST["option"];
        $additionalDetails = $_POST[$selectedOption . '_details'] ;

        if (!empty($additionalDetails)) {
            echo "<p>You chose: $selectedOption</p>";
            echo "<p>Additional Details: $additionalDetails</p>";
        } else {
            echo "<p>You chose: $selectedOption</p>";
            echo "<p>No additional details provided.</p>";
        }
	}
		
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['dob'];
	$d=$_POST['blood'];
	$e=$_POST['last'];
	$f=$_POST['cont'];
	$g=$_POST['add'];
	
	$qry=mysql_query("insert into blood_bank.new_doner(d_first_name,
	d_last_name,d_dob,d_blood_group,d_last_date_donate,
	d_phone,d_address)values('$a','$b','$c','$d','$e','$f','$g')");
	
	if($qry==true)
	{
		echo"<h4><center>"."Data Sucessfully Inserted"."</h3></center>";
	}
	else
	{
		echo"Fill Data First..!!";
	}
}
else{
	echo"request method is not post";
}
?>