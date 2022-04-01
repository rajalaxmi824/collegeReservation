<?php

include 'connection.php';
session_start();

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM logininfo WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if ($result->num_rows == 0) {
			$sql = "INSERT INTO logininfo (email, password) VALUES ('$email', '$password')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			}
      else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	}
  else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  .loginbox{
    border-radius: 10%;
  }
  </style>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="logout.css">
</head>
<body>
  <div class="title">
    <h1 class="title"></h1>
  </div>
  <div class="loginbox">

    <img src=NitteLogo.jfif class="avatar">
    <h1><u>REGISTER</u></h1>
    <form method="post">
      <p>Email id</p>
      <input type ="email" name="email" placeholder="Enter email id">
      <p>Password</p>
      <input type ="password" name="password" placeholder="Enter Password">
      <p>Confirm Password</p>
      <input type ="password" name="cpassword" placeholder="Enter Password">
      <input type="submit" name="submit" value="Register"><br>
      <a href="login.php" style="text-align: center;">Done registering? Sign in here</a>
  </div>
</body>
</html>
