<?php
session_start();

if (!isset($_SESSION['email'])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  body{
    margin:0;
    padding: 0;
    font-family: montserrat;
    background: linear-gradient(120deg,#dcae96,#f5f5dc);
    height:100vh;
    overflow: hidden;
  }
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 37%;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
  <div style="text-align:right;"><a href="logout.php">Logout</a></div>
  <h1 style="text-align:center;">Hello student!</h1>
  <?php echo "<p style='text-align:center; font-size:25px;'>Your email id:- " . $_SESSION['email'] . "</p>";?>
  <form method="get" action="AvailableSeat.php">
    <button class="button" style="vertical-align: middle" type="submit"><span>Click here to continue the admission process</span></button>
</form>
</body>
</html>
