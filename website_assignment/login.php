<!DOCTYPE html>
<html lang="en">
<article>
    <header>
				<h1>Cricket Gear Store</h1>
				<p>By Matthew Lange</p>
				<p>The one stop for all the cricket gear you will need.</p>
				<nav>
					<ul class="main-nav">
						<li><a href= "index.php">about_us</a></li>
						<li><a href= "products.php">products</a></li>
						<li><a href= "customer_reviews.php">customer_reviews</a></li>
						<li><a href= "media.php">media</a></li>
						<li><a href= "login.php">Login</a></li>
						<li><a href= "members.php">Members</a></li>
						<li class="push"><a href= "search.php">search</a></li>
						<li class="push"><a href= "contact_us.php">contact_us</a></li>
					</ul>
				</nav>
			</header>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
    <h2>Login Form</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "users_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the provided credentials are valid
$sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If the query returns a row, it means the user exists and the credentials are correct
    // Set a cookie with username
    setcookie("username", $username, time() + (7200), "/"); // Cookie expires in 2 hours
    // Redirect to the members page or any other page
    header("Location: members.php"); 
} else {
    // If no row is returned, the credentials are incorrect
    // redirect back to the login page with an error message
    echo "Error no user found";
    header("Location: login.php");
}

$conn->close();
?>

<!-- Registration Form -->
<div id="register-form">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="reg-username">Username/Email:</label>
        <input type="text" id="reg-username" name="reg-username" required><br>
        
        <label for="reg-password">Password:</label>
        <input type="password" id="reg-password" name="reg-password" required><br>
        
        <button type="submit">Register</button>
    </form>
</div>
<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "users_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['reg-username'];
$password = $_POST['reg-password'];

// Check if the username already exists in the database
$sql = "SELECT * FROM Users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // If username exists, display an error message
    echo "Username already exists. Please choose a different username.";
} else {
    // If username is available, insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Set a cookie with username upon successful registration
        setcookie("username", $username, time() + (7200), "/"); // cookie expires in 2 hours
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</body>
</html>
