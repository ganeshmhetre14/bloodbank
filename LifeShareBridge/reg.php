<html>
<head>
<style>
/* Reset default margin and padding */
body, h1, h2, p {
  margin: 0;
  padding: 0;
}

/* Basic styling */
body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

header {
  background-color: #bf2020;
  color: white;
  padding: 1rem;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Optionally, decrease the gaps between items */
header > * {
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

/* Form styles for mobile view */
form {
  max-width: 400px;
  margin: auto;
}

label {
  display: block;
  margin-bottom: 8px;
  text-align: left;
  font-weight: bold;
}

input, select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  box-sizing: border-box;
  background: transparent;
}

button {
        padding: 12px 24px;
        background-color: #f1f1f1;
        border: none;
        cursor: pointer;
        font-size: 14px;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    button:hover {
    background-color: #ddd;
    color: #333;
}
button:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(81, 203, 238, 0.5);
}
button:active {
    transform: translateY(1px);
}

/* Media query for screens smaller than 600px */
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
<header>
    <nav>
      <ul>
         <li><a href="5.php">Home</a></li>
        <li><a href="admin_login.php">Blood Bank Login</a></li>
        <li><a href="#">Contact</a></li>
		<li><a href="login.php">Signin</a></li>
      </ul>
    </nav>
  </header></br>
<body align="center"  background="img/frame.png">
<form method="POST" action="" >

<u><h1>Register Here</h1></u></label></br>

<form id="registrationForm" action="" Method="POST">

<label>Full Name:</label>
<input type="text" name="name" id="name"></br></br>
<label>Age:</label>
<input type="text" name="age" id="age"></br></br>
<label>Select Blood Group:</label>
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
</Select>
<label>Aadhar:</label>
<input type="text" name="aadhar" id="aadhar"></br></br>
<label>Contact:</label>
<input type="text" name="cont" id="cont"></br></br>
<label>Email:</label>
<input type="Email" name="email" id="email"></br></br>
<label>Password:</label>
<div class="pass">
<input type="text" name="pass" id="pass"></br></br>

<center><button type="submit">Submit</button></center>

</form>
</body>
</html>
<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$bg=$_POST['bg'];
	$aadhar=$_POST['aadhar'];
	$cont=$_POST['cont'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$qry=mysql_query("Insert into a1.customer(c_name,c_age,c_blood,c_aadhar,c_contact,c_email,c_pass)
						Values('$name','$age','$bg','$aadhar','$cont','$email','$pass')");
						
	if($qry==true){
		header('location:login.php');
	}
	else{
		echo "Not";
	}
}
