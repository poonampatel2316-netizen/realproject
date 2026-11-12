<?php
  include "db.php";
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
  <div class="box">
  <div class="b">
  <h4 class="t"> Welcome back</h4>
  <span class="s"> sing in to your account</span>
   <div class="g">
    <button class="g1 n" type="button">Student</button>
    <button class="g1 n" type="button">Owner</button>
    <button class="g1 n" type="button">Warden</button>
  </div>
  
  <form id="f" action ="" method="POST" enctype="multipart/form-data">
    <label class="l">Email or Phone Number</label>
    <input type="text" id="em" class="form-control i mb-3" name="email" placeholder=" Enter your email">

    <label class="l">Password</label>
    <input type="password" id="pw" class="form-control i mb-3" name="password" placeholder="••••••••">
   <!-- <span style="position:absolute; right:2px; button:10%; transform:translateY(-10%);">👁</span> -->

    <div class="d-flex justify-content-between mb-3">
      <small><input type="checkbox" id="rm"> Remember me</small>
      <a href="#" class="small text-decoration-none">Forgot password?</a>
    </div>

    <button type="submit" class="btn w-100 c" name="login">Login</button>
  </form>

  <p class="text-center small mt-3">Don't have an account? <a href="#">Create account</a></p>
  
  <div id="msg" class="mt-3 small text-center text-success fw-bold"></div>
</div>
</div>
    <?php
    if(isset($_POST['login'])){

    $email = trim($_POST["email"])??'';
    $password=trim($_POST["password"])??'';

$nevexadata="insert into pglogin(email,password)values('$email',' $password')";
if(mysqli_query($conn, $nevexadata)){
      echo "your database successfuly created";
    }else{
      echo "failed try again";
    }

     if(empty($email)){
         echo" email not should be empty";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"invalid email format ! please currect it ";
    }elseif (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email)) {
       echo "Invalid email format";
    } elseif(empty($password)){
       echo" password not empty";
    }elseif(strlen($password)<=8 && strlen($password)>=10){
        echo"password length should not be 8 to 10";
    }
    
        // $sql = "SELECT id, name, email, password  FROM users  WHERE email = ? OR phone = ? LIMIT 1";
               
               
    }          
?>
</body>
</html>