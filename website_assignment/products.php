<!DOCTYPE html>
	<html lang="en-GB">
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
	<article>
		<article>
		<head>
				<title>Products</title>
				<link 	rel="stylesheet" href="style.css">
				<form class="search-form">
					<input type="text" colourpads="Search...">
					<button type="submit">Go</button>
				  </form>
		</head>
		<body>
			<div id="main">
				<?php
				// Establish a connection to the database
				$servername = "localhost";
				$username = "your_username";
				$password = "your_password";
				$dbname = "your_database";
			
				$conn = new mysqli($servername, $username, $password, $dbname);
			
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
			
				// Retrieve products from the database
				$sql = "SELECT * FROM Items";
				$result = $conn->query($sql);
			
				if ($result->num_rows > 0) {
					// Output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p>" . $row["Item_name"] . "</p>";
						echo '<img src="' . $row["image_filename"] . '" alt="' . $row["Item_name"] . '" width="128" height="128">';
					}
				} else {
					echo "0 results";
				}
			
				$conn->close();
				?>
			</div>
				
				
		</body>
		<footer>
			<p>Matthew Lange 2022</p>
			<a href = "products.html">Products</a>
				<a href = "about_us.html">About Us</a>
				<a href = "contact_us.html">Contact Us</a>
				<a href = "customer_reviews.html">Customer Reviews</a>
				<a href = "media.html">See our products in action!</a>
			</footer>
	</html>