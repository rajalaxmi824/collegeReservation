<?php
include 'connection.php';
session_start();
$email_value = $_SESSION['email'];
$branch_value=$_GET['branch'];
if(isset($_POST['submit'])){
  $student_name = $_POST['student_name'];
  $fname = $_POST['fname'];
  $mob_no = $_POST['mob_no'];
  $email = $_POST['email'];
  $houseno = $_POST['houseno'];
  $area = $_POST['area'];
  $landmark = $_POST['landmark'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pincode = $_POST['pincode'];
  $gender = $_POST['gender'];
  $blood_group = $_POST['blood_group'];
  $dob = $_POST['dob'];
  $branch=$_POST['branch'];
  $sql = "INSERT INTO student_form (student_name, fname, mob_no, email, houseno, area, landmark, city, state, pincode, gender, blood_group, dob,branch) VALUES ('$student_name', '$fname', '$mob_no', '$email', '$houseno', '$area', '$landmark', '$city', '$state', '$pincode', '$gender', '$blood_group', '$dob','$branch')";
  $result = mysqli_query($con, $sql);
  if($result){
    echo "<script>alert('Wow! registration complete')</script>";
    $update="UPDATE seats set AvailableSeats=AvailableSeats-1 where AvailableSeats>0 and Dept='$branch'";
    if(mysqli_query($con,$update))
    {
      echo "<script>alert('Successfully booked your seat!')</script>";
    }
    else {
      echo "<script>Could not update</script>";
    }
    header('Location:Completed.html');
  }
  else{
    echo "<script>alert('This email id already exists and user has submitted the form.')</script>";
    header('Location:logout.php');
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
  background: linear-gradient(120deg,#cc2b5e,#753a88);
}
* {
  box-sizing: border-box;
}

option:first-child{
  color: #ccc;
}

input[type=text],input[type=tel],input[type=email],input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

input[type=text]:focus {
  border: 3px solid #555;
}

input[type=tel]:focus {
  border: 3px solid #555;
}

input[type=email]:focus {
  border: 3px solid #555;
}

input[type=date]:focus {
  border: 3px solid #555;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.heading{
  background-color: black;
  color: white;
}
h1{
  padding: 10px;
  font-size: 42px;
  text-align: center;
}
a{
  color:white;
  text-align: right;
  font-size: 12px;
}
</style>
</head>
<body>
<div class="heading">
<h1>Student Form<span><a href="logout.php">Logout</a></span></h1>
</div>
<p>Complete the form to continue the seat reservation process.</p>

<div class="container">
  <form method="POST" action="">
  <div class="row">
    <div class="col-25">
      <label for="name">Student Name<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="student_name" placeholder="Student Name" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Father's Name/Guardian's Name<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="fname" placeholder="Father's Name" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="gender1">Gender<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="radio" id="male" name="gender" value="MALE">
      <label for="maler">Male</label>
      <input type="radio" id="female" name="gender" value="FEMALE">
      <label for="femaler">Female</label>
      <input type="radio" id="other" name="gender" value="OTHER">
      <label for="otherr">Other</label>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="dobt">Date of Birth<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="date" name="dob" placeholder="YYYY-MM-DD" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phoneno">Mobile Number<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="tel" name="mob_no" placeholder="Mobile Number" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <?php echo "<input type='email' name='email' placeholder='Email' value=$email_value readonly>"; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="branch">Branch<span style="color:red;">*</label>
    </div>
    <div class="col-75">
     <?php echo "<input type='text' name='branch' placeholder='branch' value=$branch_value readonly>";?>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="">Flat, House no., Building, Company, Apartment<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="houseno" placeholder="Flat, House no., Building, Company, Apartment" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">Area, Street, Sector, Village<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="area" placeholder="Area, Street, Sector, Village" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">Landmark</label>
    </div>
    <div class="col-75">
      <input type="text" name="landmark" placeholder="Landmark">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">Town/City<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="city" placeholder="Town/City" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">State<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="state" placeholder="State" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="">Pin Code<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <input type="text" name="pincode" placeholder="pincode" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Blood Group<span style="color:red;">*</label>
    </div>
    <div class="col-75">
      <select name="blood_group">
        <option value="" disabled>Choose...</option>
        <option value="O+" name="blood_group" >O +ve</option>
        <option value="A+" name="blood_group">A +ve</option>
        <option value="B+" name="blood_group">B +ve</option>
        <option value="AB+" name="blood_group">AB +ve</option>
        <option value="O-" name="blood_group">O -ve</option>
        <option value="A-" name="blood_group">A -ve</option>
        <option value="B-" name="blood_group">B -ve</option>
        <option value="AB-" name="blood_group">AB -ve</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <label><span style="color:red; font-weight: bold;">*</span><b>Required Field</b></label>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name='submit'>
  </div>
  </form>
</div>

</body>
</html>
