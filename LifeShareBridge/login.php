<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
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


 body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    form {
      max-width: 400px;
      margin: auto;
    }
    label {
      display: block;
      margin-bottom: 8px;
	  font-weight: bold;

	  
    }
    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
	  background: top;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
	
  </style>
</head>
<body background="img/p5.png">
<header>
    <nav>
      <ul>
        <li><a href="5.php">Home</a></li>
        <li><a href="admin_login.php">Blood Bank Login</a></li>
        <li><a href="#">Contact</a></li>
		<li><a href="reg.php">Signup</a></li>
      </ul>
    </nav>
  </header>
<main>
  <form id="registrationForm" action="" Method="POST" >
<center><u><b><H1>Login</h1></b></u></center></br></br>
   

    <label for="contact">Contact Number OR Email:</label>
    <input type="tel" id="contact" name="contact" required></br></br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required></br></br></br>

    <center><button type="submit">Submit</button></center>
  </form>


</body>
</html>
<?php
session_start();
if(isset($_SESSION['login'])){
	header('location:home_page.php');
}

include('config.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$mobile=$_POST['contact'];
	$pass=$_POST['password'];
	
	$qry=mysql_query("Select * from customer where c_contact='$mobile' and c_pass='$pass'");
	
	$row=mysql_fetch_array($qry);
	$count=mysql_num_rows($row);
	
	if($count=1){
		$_SESSION['login']=$mobile;
		header('location:home_page.php');
	}
	else{
		echo "Please Enter correct login details..!";
	}
}
?>