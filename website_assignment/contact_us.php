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
				<title>Contact Us</title>
				<link 	rel="stylesheet" href="style.css">
		</head>
		<body id="main">
		
				<h2>Contact Form</h2>
				  <form action="/form/submit" method="POST">
				    <p><label for="fname">Name</label></p>
				    <input type="text" id="fname" name="name" placeholder="Type your name..">
				    <p><label for="lname">Last Name</label></p>
				    <input type="text" id="lname" name="surname" placeholder="Type your last name..">
				    <p><label for="mail">E-mail Address</label></p>
				    <input type="text" id="mail" name="e-mail" placeholder="Type your e-mail..">
				    <p><label for="country">Country</label></p>
				    <select id="country" name="country">
				      <option value="italy">United Kingdom</option>
				      <option value="spain">United States of America</option>
				      <option value="france">Germany</option>
				    </select>
				    <p><label for="message">Message</label></p>
				    <textarea id="message" name="message" placeholder="Type your message.." style="height: 200px"></textarea>
				    <p><input type="submit" value="Send"></p>
				  </form>
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