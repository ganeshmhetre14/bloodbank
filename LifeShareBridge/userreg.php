<html>
<head>
  <link rel="stylesheet" href="user.css">
   <link rel="stylesheet" href="select.css">
  <style>
</style>
</head>

<body>
<center>
<form action="" method="POST"><br><br><br>
<h1>Fill Details</h1>

First Name:
<input type="text" name="fname" id="fname"><br><br>

Last Name:
<input type="text" name="lname" id="lname"><br><br>

 Date Of Birth:
<input type="date" name="dob" id="dob" class="input"><br><br>

Select Blood Group:
<div class="select">
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
</div>
 Last Date of Blood Donet:
<input type="date" name="last" id="last"><br><br>

Contact No.:
<input type="text" name="cont" id="cont"><br><br>

Address:
<input type="text" name="add" id="add"><br><br>

<button type="submit">Submit</button>
</h3>
</form>
</center>
</body>
</html>

<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
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