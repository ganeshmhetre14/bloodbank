<?php
include"c_lock.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
 /* Basic styling */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
        header {
            background-color: #bf2020;
            color: white;
            padding: 0rem;
            text-align: center; /* Center align header text */
            display: flex;
            justify-content: center; /* Spread items to the edges */
            align-items: center; /* Center items vertically */
            /*height: 250px;*/
        }

        /* Optionally, decrease the gaps between items */
        header>* {
            margin: 01.5rem; /* Adjust the margin as needed */
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


nav ul {
  list-style: none;
  display: flex;
  justify-content: space-around; /* Center align navigation links */
  padding: 0;
  margin: 0;
}

nav a {
  text-decoration: none;
  color: white;
  padding: 1rem;
}

main {
  padding: 1rem;
}

.hero {
  text-align: center;
  padding: 2rem 0;
  background-color: #f2f2f2;
}

.cta-button {
  display: block; /* Change to block to take full width */
  background-color: #333;
  color: white;
  padding: 1rem;
  text-align: center; /* Center align button text */
  text-decoration: none;
  border-radius: 4px;
  margin: 1rem 0; /* Add margin for spacing */
}

.features {
  display: flex;
  flex-wrap: wrap;
}

.feature {
  flex: 1;
  width: calc(50% - 1rem); /* Two columns on smaller screens */
  padding: 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  margin: 0.5rem; /* Add margin for spacing */
}

footer {
  text-align: center;
  padding: 1rem;
}

/* Media queries for smaller screens */
@media (max-width: 768px) {
  nav ul {
    flex-direction: column; /* Stack navigation links vertically on smaller screens */
  }

  .feature {
    width: calc(100% - 1rem); /* Full width on smaller screens */
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
        <li><a href="req_blood.php">Request Blood</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="clogout.php">Logout</a></li>

      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <h1>Welcome to Our Website</h1></br>
      <p>"Step into a world of compassion and lifesaving impact at 
	  our online Blood Bank. </br>Every visit, every click, and every contribution 
	  matters – welcome to a community</br> dedicated to connecting hearts, saving lives, 
	  one drop at a time."

</p></br>
      <a href="donat.php" class="cta-button">Donate</a>
    </section>
    <section class="features">
      <div class="feature">
        <h2>Empowering Hope</h2></br>
        <p>Welcome to our online Blood Bank, 
		where every drop counts and saves lives! 
		Discover a seamless and user-friendly 
		platform dedicated to connecting donors 
		with those in need. </p>
      </div>
      <div class="feature">
        <h2>Empowering Lifesavers</h2></br>
        <p>Explore our comprehensive database 
		of donors, find the closest donation 
		centers, and schedule appointments 
		effortlessly. Our website ensures a 
		secure and efficient process for both 
		donors and recipients, fostering a 
		community committed to making a 
		life-saving impact.</p>
      </div>
      <div class="feature">
        <h2>Bridging Lives</h2></br>
        <p> Join us in the mission to bridge 
		the gap between those in need and 
		those willing to donate – because 
		together, we can make a difference 
		that truly matters.</p>
      </div>
    </section>
  </main>
  <footer>
    <p>Uniting hearts, saving lives – join us in making a life-changing difference today.<p>
  </footer>
</body>
</html>
