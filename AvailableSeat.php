<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['email'])) {
   header("Location: login.php");
}
$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>
</head>
<body style="background: linear-gradient(90deg,#f5f5dc,#dcae96);">
    <marquee style="background:linear-gradient(90deg,#dcae96,#f5f5dc);font-size:25px;">Please book your seats quickly
        <div id="div1" class="fa" style="font-size:25px;"></div>
        <script src="time.js"></script>
    </marquee>
    <div class="logout" style="text-align: right">
      <a href="logout.php">Logout</a>
    </div>
    <?php echo "<h2 style='text-align:center'>Welcome " . $_SESSION['email'] . "</h2>";?>
    <table class="table table-hover table-dark" style="width:80%;margin: auto;">
      <thead>
          <tr>
            <th scope="col">Department</th>
            <th scope="col">Total Seats</th>
            <th scope="col">Available Seats</th>
            <th scope="col">Links</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='AIML'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Artificial Intelligence and Machine Learning</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=AIML' class='btn btn-light btn-link btn-sm' id='AIML'>Reserve Now</a></td>";
                }
                ?>
                </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='BT'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Biotechnology</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=BT' class='btn btn-light btn-link btn-sm' id='BT'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='CV'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Civil Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=CV' class='btn btn-light btn-link btn-sm' id='CV'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='CSE'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Computer Science Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=CSE' class='btn btn-light btn-link btn-sm' id='CSE'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='ECE'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Electronics and Communication Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=ECE' class='btn btn-light btn-link btn-sm' id='ECE'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='EEE'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Electronics and Electrical Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=EEE' class='btn btn-light btn-link btn-sm' id='EEE'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='IS'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Information Science Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=IS' class='btn btn-light btn-link btn-sm' id='IS'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='MECH'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Mechanical Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=MECH' class='btn btn-light btn-link btn-sm' id='MECH'>Reserve Now</a></td>";
                }
                ?>
              </tr>
            <?php
            $records = mysqli_query($con,"select * from seats where Dept='ROBOTICS'"); // fetch data from database
            $data = mysqli_fetch_array($records);
            ?>
              <tr>
                <td>Robotics Engineering</td>
                <td><?php echo $data['TotalSeats']; ?></td>
                <td><?php echo $data['AvailableSeats']; ?></td>
                <?php if($data['AvailableSeats']==0)
                {
                  echo "<td><a href=#>Reserve NOW</a></td>";
                }
                else{
                  echo "<td><a href='form.php?branch=ROBOTICS' class='btn btn-light btn-link btn-sm' id='ROBOTI'>Reserve Now</a></td>";
                }
                ?>
              </tr>
      </tbody>
</table>
</body>
</html>
