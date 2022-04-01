<?php
include 'connection.php';
session_start();
if (isset($_SESSION['email'])) {
   header("Location: next.php");
 }
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="select * from logininfo where email='".$email."' AND password='".$password."' limit 1";
  $result=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)==1){
      echo '<script>alert("You have successfully logged in")</script>';
      $_SESSION['email'] = $row['email'];
      header('Location: next.php');
    exit();
  }
  else{
    echo '<script>alert("You have entered Incorrect Information")</script>';
    exit();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="logout.css">
  <meta name="viewport" content="width=device-width, intiial-scale=1.0">
</head>
<body>
  <div class="title">
    <h1 class="title"></h1>
  </div>
  <div class="loginbox">

    <img src=NitteLogo.jfif class="avatar">
    <h1><u>LOGIN</u></h1>
    <form method="post">
      <p>Email Id</p>
      <input type ="email" name="email" placeholder="Enter email">
      <p>Password</p>
      <input type ="password" name="password" placeholder="Enter Password">
      <input type="submit" name="login" value="Login"><br>
      <a href="signup.php">If not registered, Click here</a>
  </div>
</body>
</html>
