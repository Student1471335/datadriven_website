<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.html");
    exit(); // Stop further execution
}

// If logged in, display the members area
?>

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
	<article>
<head>  
    <meta charset="UTF-8">
    <title>Members Page</title>
    <link 	rel="stylesheet" href="style.css">
</head>


<div
    <h1>Welcome to the Members Area, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is a restricted area for registered members only. Here you can access exclusive content just for memebers and can add new item for sale .</p>
    <p> you can items to sell here</p>
<h2>Add New Item</h2>
<form action="add_item.php" method="post">
    <label for="item_name">Item Name:</label><br>
    <select id="item_name" name="item_name" required>
        <option value="blackpads">Black Pads</option>
        <option value="bluepads">Blue Pads</option>
        <option value="redpads">Red Pads</option>
        <option value="whitepads">White Pads</option>
    </select><br>
    
    <label for="stock">Stock:</label><br>
    <input type="number" id="stock" name="stock" required><br>
    
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" required><br>
    
    <input type="submit" value="Add Item">
</form>
<?php
// Establish a connection to the database
$servername = "localhost";
$username = "_username";
$password = "password";
$dbname = "user_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get item details from the form
$item_name = $_POST['item_name'];
$stock = $_POST['stock']; // This will be 1 by default due to the HTML form setup
$price = $_POST['price'];

// Insert the item into the database
$sql = "INSERT INTO Items (Item_name, stock, Price) VALUES ('$item_name', '$stock', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New item added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>

    <a href="logout.php" style="padding: 10px 20px; background-color: aqua; color: black; border: none; broder-radius: 3px; cursor: pointer; font-size: 13px; text-decoration: none; display: inline-block:">Logout</a>
</div>

</body>
</html>