<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Reset some default styles */
    body, h1, h2, p {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    header {
      background-color: #bf2020;
      color: white;
      padding: 1rem;
      text-align: center;
    }

    nav {
      background-color: #333;
      color: white;
      padding: 0.5rem;
      text-align: center;
    }

    nav a {
      text-decoration: none;
      color: white;
      margin: 0 15px;
    }

    main {
      padding: 20px;
    }

    .hero {
      text-align: center;
      padding: 2rem 0;
      background-color: #f2f2f2;
    }

    .call-to-action {
      text-align: center;
      margin-top: 20px;
    }

    .donate-button {
      display: inline-block;
      background-color: #bf2020;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .donate-button:hover {
      background-color: #a50000;
    }

    .photo-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .photo {
      width: 30%;
      border-radius: 8px;
      overflow: hidden;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1rem;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
	
  </style>
</head>
<body>

  <header>
    <h1>Blood Donation Center</h1>
  </header>

  <nav>
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="reg.php">Regirastraion</a>
    <a href="#contact">Contact Us</a>
  </nav>

  <main>
    <div class="hero">
      <h2>Welcome to our Blood Donation Center</h2>
      <p>Your contribution can save lives. Join us in the mission to make a difference!</p>
    </div>

    <div class="call-to-action">
      <a href="reg.php" class="donate-button">Donate Now</a>
    </div>

    <div class="photo-container">
      <img src="img/p1.jpeg" alt="Photo 1" class="photo">
      <img src="img/p2.png" alt="Photo 2" class="photo">
      <img src="img/p3.jpeg" alt="Photo 3" class="photo">
    </div>
  </main>

  <footer>
    <p>&copy; 2024 Blood Donation Center. All rights reserved.</p>
  </footer>

</body>
</html>
