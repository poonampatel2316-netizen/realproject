<?php
include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nevexa - PG & Hostel Management</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/owl.theme.green.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/stlye.css">
  <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

  <div class="bo">
    <div class="box1">
      <h2 class="title">Registration</h2>

<form action="" method="POST" enctype="multipart/form-data">
      <div class="tabs">
    <button class="tab">Student</button>
    <button class="tab">Owner</button>
    <button class="tab">Warden</button>
  </div>


      <div class="mb-3">
        <label class="label">Full Name</label>
        <input type="text" class="form-control input" placeholder="Enter your full name" name="username">
      </div>

      <div class="mb-3">
        <label class="label">Phone Number</label>
        <input type="tel" class="form-control input" placeholder="Enter your Phone number" name="mobile">
      </div>

      <div class="mb-3">
        <label class="label">Email Address</label>
        <input type="email" class="form-control input" placeholder="Enter your email" name="email">
      </div>

      <div class="mb-3">
        <label class="label">Hostel/PG Name</label>
        <input type="text" class="form-control input" placeholder="Enter hostel or PG name" name="PGname">
      </div>

      <div class="mb-3">
        <label class="label">Password</label>
        <input type="password" class="form-control input" placeholder="••••••••" name="password">
      </div>

      <div class="mb-4">
        <label class="label">Confirm Password</label>
        <input type="password" class="form-control input" placeholder="••••••••" name="confirmpassword">
      </div>

      <button type="submit" class="btn btn-primary w-100 btn-main"
        name="CreateAccount">Create Account</button>
      </form>

      <p class="text-center mt-3 small">Already have an account? <a href="login.php"
          class="fw-bold text-decoration-none">Login</a></p>
    </div>
  </div>

 <?php
    if(isset($_POST['CreateAccount'])){
        $username=trim($_POST["username"])??'';
         $email=trim($_POST["email"])??'';
          $mobile=trim($_POST["mobile"])??''; 
          $PGname=trim($_POST["PGname"])??''; 
          $password=trim($_POST["password"])??'';
           $Confirmpassword=trim($_POST["confirmpassword"])??'';


           
    $nevexa="insert into hostal(username,email,mobile,PGname,password,confirmpassword)
    values('$username','$email','$mobile','$PGname','$password','$Confirmpassword')";
    if(mysqli_query($conn, $nevexa)){
      echo "your database successfuly created";
    }else{
      echo "failed try again";
    }

          if(empty($username)){
            echo"user name should be not empty !";
           }elseif(strlen($username)<8){
             echo"username should be atleast 8 empty !";
            }elseif (!preg_match("/^[A-Za-z. ]{8,}$/", $username)) {
              echo "Invalid username format";
             
            }elseif(empty($email)){
            echo" email not should be empty";
            }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
              echo"invalid email format ! please currect it ";
              }elseif (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email)) {
              echo "Invalid email format";
            
            }elseif(empty($mobile)){
             echo"mobile number should be not empty !";
            }elseif(!is_numeric($mobile)){
             echo" mobile number must be a numeric value";
          }elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
               echo "Invalid mobile number";
            }elseif(strlen($mobile)<10 || strlen($mobile)>10){
             echo"mobile number must be 10 digit !";

            }elseif(empty($PGname)){
             echo "pgname not empty";
            
            }elseif(empty($password)){
             echo" password not empty";
            }elseif(strlen($password)<=8 && strlen($password)>=10){
             echo"password length should not be 8 to 10";
            
            }elseif(empty($confirmpassword)){
             echo" confirmpassword not empty";
            }elseif($Confirmpassword !==$password){
             echo"password and confirm password not matched! please try again";
            }
    }
   
    ?>

</body>

</html>