<?php
if(isset($_GET['login'])){
	header("Location: login.php");
}
if(isset($_GET['signup'])){
	header("Location: signup.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NMAMIT</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="NitteLogo.jfif">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Feedback</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To NMAM Institute of Technology</h1>
			<h3>Book your seats now!</h3>
			<div class="buttons">
                <form method="get">
                    <input type="submit" value="Login" name="login">
                    <input type="submit" value="Register" class="btn2" name="signup">
                </form>
			<!--<button onclick="login.php">Login</button>
			<button class="btn2" onclick="signup.php">Register</button>-->
		</div>
		</div>
</body>
</html>