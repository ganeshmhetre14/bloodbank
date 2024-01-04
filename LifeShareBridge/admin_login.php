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
.flex-container {
  display: flex;

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
}
footer {
  text-align: center;
  padding: 1rem;
  background-color: #bf2020;
  color: white;
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
    }
    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
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
<body background="img/bc.jpg">
<header>
    <nav>
      <ul>
         <li><a href="5.php">Home</a></li>
        <li><a href="#">Contact</a></li>
		<li><a href="login.php">Signin</a></li>
		<li><a href="r1.php">Signup</a></li>
      </ul>
    </nav>
  </header></br></br>
<center><u><b><H1>Admin Login</h1></b></u></center></br></br>
  <form id="registrationForm" >
   

    <label for="contact">Username:</label>
    <input type="tel" id="contact" name="contact" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <center><button type="button" onclick="submitForm()">Submit</button></center></br>
    <center><a href="admin_register.php"><button type="button" onclick="submitForm()">Add your Blood Bank</button></a></center>

  </form>

  <script>
    function submitForm() {
      // You can add JavaScript code here to handle form submission, validation, etc.
      // For a basic example, you can use the form's "action" attribute to send data to a server.
      // Example: document.getElementById("registrationForm").action = "your_server_endpoint";
      // Then, submit the form: document.getElementById("registrationForm").submit();
    }
  </script>

</body>
</html>
