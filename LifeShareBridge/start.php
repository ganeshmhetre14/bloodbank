<html>
<head>
<style>
/* CSS for big button */
.big-button {
  display: inline-block;
  padding: 30px 20px;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgb(0 0 0 / 54%);
  transition: background-color 0.3s, transform 0.2s;
  cursor: pointer;
}

.big-button:hover {
  background-color: #0056b3;
  transform: scale(1.05);
}

/* Optional: Add more styles for different states (active, disabled, etc.) */

/* CSS for form */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.form-container {
  max-width: 400px;
  margin: 100px auto;
  padding: 100px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
}

h1 {
  text-align: center;
}

button {
  display: block;
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s;
}

button a {
  color: #fff;
  text-decoration: none;
}

button:hover {
  background-color: #45a049;
}
.logo-container {
  text-align: center;
  margin-bottom: 20px;
}

.logo-image {
  max-width: 300px;
  height: auto;
}
</style>
</head>
<body class="body">
<form action="" Method="POST" class="form-container">
<div class="logo-container">
<img class="logo-image" src="img/logo.png" alt="logo">
</div>
<h1 class="h1">For Login Click below</h1>
<button class="big-button"><a href="">Donor Registration</a></button></br>
<button class="big-button"><a href="">Donor Login</a></button></br>
<button class="big-button"><a href="">Seceptionist Login</a></button></br>

</form>
</body>
</html>
