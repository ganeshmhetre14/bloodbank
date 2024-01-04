<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        header>* {
            margin: 1rem; /* Adjust the margin as needed */
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around; /* Center align navigation links */
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: underline 0.3s ease-in-out; /* Smooth underline transition */
        }

        header nav ul li a:hover {
            text-decoration: underline;
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
            display: inline-block; /* Inline block for better alignment */
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
            justify-content: space-around; /* Center align features on larger screens */
        }

        .feature {
            flex: 1;
            width: calc(33.33% - 1rem); /* Three columns on larger screens */
            margin: 0.5rem; /* Add margin for spacing */
            text-align: center;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        footer {
            text-align: center;
            padding: 1rem;
        }

        /* Media queries for smaller screens */
        @media (max-width: 768px) {
            header nav ul {
                flex-direction: column; /* Stack navigation links vertically on smaller screens */
            }

            .feature {
                width: calc(50% - 1rem); /* Two columns on smaller screens */
            }
        }
    </style>
    <title>Home Page</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="5.php">Home</a></li>
                <li><a href="admin_login.php">Nearby Blood Bank</a></li>
                <li><a href="s1.php">Search Blood</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Request For Blood</a></li>
                <li><a href="r1.php">Become Donor</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to Our Website</h1>
            <p>Your go-to destination for amazing content.</p>
            <a href="#" class="cta-button">Learn More</a>
        </section>

        <section class="features">
            <div class="feature">
                <h2>Feature 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="feature">
                <h2>Feature 2</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="feature">
                <h2>Feature 3</h2>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
</body>

</html>
