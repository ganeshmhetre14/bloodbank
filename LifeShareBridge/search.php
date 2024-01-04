<!DOCTYPE html>
<html>
<head>
<style>
.body {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: #f2f2f2;
}

.form {
	padding-top: 50px;
  display: flex;
  flex-direction: column;
  align-items: baseline;
  justify-content: center;
  width: 100%;
  height: 300px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 
}

.lable {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px;
}

input[type="text"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5px;
}

button {
  padding: 10px 20px;
  background-color: #F44336;
  color: #fff;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  margin-top: 10px;
}
b{
	display:flex;
	align-items:inline;
}

a {
  text-decoration: none;
  color: #fff;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 1px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

.checkbox {
  margin-left: 5px;
}


</style>	

</head>
<body >
<form action="" method="POST" height="50%" width="50%" class="form">
<b><h3>Search Here:</h3></b></br>
<div class="lable">
City:
<input type="text" name="name" id="name">
Select Blood Group:
<select name="blood" id="blood"><br><br>
<option value="A+">Select</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
 </select><br><br>
<div class="b"> 
<button type="submit">Search</button><button><a href="">Message</a></button>
<button><a href="companylogin.php">Back</a></button>
</div>
</div>
</form>
</body>
</html>


<html>
<body>
<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$blood=$_POST['blood'];
	$city=$_POST['name'];
	
	$qry=mysql_query("Select * from customer where 
	 c_blood='$blood' and c_city='$city' ");
	
?>
    <table border='1'>
        <tr>
            <th>Select All<input type="checkbox" id="selectAll" onchange="selectAllRows()"></th>
            <th>Sr No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Blood Group</th>
            <th>DOB</th>
            <th>Last Donated</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Request for Blood</th>
        </tr>
        <?php
        while($row = mysql_fetch_array($qry)) {
        ?>
        <tr>
            <td><input type="checkbox" name="update[]" class="checkbox"></td>
            <td><text><?php echo "<center>".$row['d_id'];?></td>
            <td><?php echo $row['d_first_name'];?></td>
            <td><?php echo $row['d_last_name'];?></td>
            <td><?php echo $row['d_blood_group'];?></td>
            <td><?php echo $row['d_dob'];?></td>
            <td><?php echo $row['d_last_date_donate'];?></td>
            <td><?php echo $row['d_phone'];?></td>
            <td><?php echo $row['d_address'];?></td>
            <td><button><a href="update.php?edit=<?php echo $row['d_id'];?>">Message</a></button></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <?php
}
    ?>
    
    <script>
        // Function to select or deselect all checkboxes
        function selectAllRows() {
            const checkboxes = document.querySelectorAll('.checkbox');
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkAllCheckbox = document.getElementById('checkAll');

            for (let i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = selectAllCheckbox.checked;
            }

            // Update the "Select All" checkbox in the table header
            checkAllCheckbox.checked = selectAllCheckbox.checked;
        }
    </script>
</body>
</html>