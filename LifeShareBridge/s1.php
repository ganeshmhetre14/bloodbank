<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
 /* Reset default margin and padding */
body, h1, h2, p {
  margin: 0;
  padding: 0;
}

/* Basic styling */
body {
  font-family: Arial, sans-serif;
}

 header {
            background-color: #bf2020;
            color: white;
            padding: 1rem;
            text-align: center; /* Center align header text */
            display: flex;
            justify-content: center; /* Spread items to the edges */
            align-items: center; /* Center items vertically */
        }

        /* Optionally, decrease the gaps between items */
        header>* {
            margin: 1.5rem; /* Adjust the margin as needed */
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

main {
  padding: 2rem;
}

.hero {
  text-align: center;
  padding: 4rem 0;
  background-color: #f2f2f2;
}

.cta-button {
  display: inline-block;
  background-color: #333;
  color: white;
  padding: 1rem 2rem;
  text-decoration: none;
  border-radius: 4px;
}

.features {
  display: flex;
  justify-content: space-between;
  margin-top: 3rem;
}

.feature {
  flex: 1;
  padding: 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  background-color: #fff;
}

footer {
  text-align: center;
  padding: 1rem;
  background-color: #bf2020;
  color: white;
}


table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f5f5f5;
}

//search bar css
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
  border: 2px solid #ccc;
  border-radius: 50px;
  margin-top: 5px;
}

.button {
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

button {
    padding: 12px 24px;
    width: 120px;
    background-color: #facacd;
    border: 2px solid #c8e3f3;
    cursor: pointer;
    font-size: 14px;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
	border-radius:15px;
}
button:hover {
    background-color: #ddd;
    border-color: #ddd;
    color: #333;
}
button:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(81, 203, 238, 0.5);
}
button:active {
    transform: translateY(1px);
}
button:checked {
    background-color: #0096e8;
    border-color: #0096e8;
    color: #fff;
}
@media screen and (max-width: 600px) {
  header {
    flex-direction: column;
    align-items: flex-center;
    text-color:#2338d5;
  }

  header > * {
    margin: 0.5rem;
  }

  header nav ul {
    flex-direction: column;
  }

  header nav ul li {
    margin: 0.5rem 0;
  }

  main {
    padding: 1rem;
  }

  .hero {
    padding: 2rem 0;
  }
}




 </style>
  <title>Home Page</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="home_page.php">Home</a></li>
        <li><a href="admin_login.php">Blood Bank Login</a></li>
        <li><a href="s1.php">Search Blood</a></li>
        <li><a href="#">Contact</a></li>

      </ul>
    </nav>
  </header>
  <main>  

<form action="" method="POST" height="50%" width="50%" class="form">
<b><h3>Search Here:</h3></b>
<div class="lable" >
City:
<input type="text" name="name" id="name"></br>
Select Blood Group:
<select name="blood" id="blood">
<option value="A+">Select</option>
<option value="A+">A+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
 </select><br>
<div class="search-button"> 
</br><button type="submit">Search</a></button>
<button><a href="companylogin.php">Message</a></button>
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
	
	$qry=mysql_query("Select * from customer where c_blood='$blood' and c_city='$city' ");
	
?>
    <table border='1'>
        <tr>
            <th><input type="checkbox" id="selectAll" onchange="selectAllRows()"> Select All</th>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>DOB</th>
            <th>Last Donated</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Request for Blood</th>
        </tr>
        <?php
        while($row = mysql_fetch_array($qry)) {
        ?>
        <tr>
            <td><input type="checkbox" name="update[]" class="checkbox"></td>
            <td><text><?php echo "<center>".$row['c_id'];?></td>
            <td><?php echo $row['c_name'];?></td>
            <td><?php echo $row['c_blood'];?></td>
            <td><?php echo $row['c_dob'];?></td>
            <td><?php echo $row['c_last_donate'];?></td>
            <td><?php echo $row['c_contact'];?></td>
            <td><?php echo $row['c_email'];?></td>
            <td><?php echo $row['c_city'];?></td>

            <td><button><a href="msg.php?edit=<?php echo $row['c_id'];?>">Message</a></button></td>
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
  
  
</body>
</html>
