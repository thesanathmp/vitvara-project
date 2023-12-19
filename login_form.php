<?php

@include 'config.php';
session_start();

// Define fixed email and password details
$adminCredentials = array(
    'email' => 'admin@gmail.com',
    'password' => md5('1234'),
    'name' => 'Admin'
);

$employeeCredentials = array(
    'email' => 'employee@gmail.com',
    'password' => md5('1234'),
    'name' => 'Employee'
);

$newUserCredentials = array(
   'email' => 'new@gmail.com',
   'password' => md5('1234'),
   'name' => 'newuser'
);

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    // Check against fixed credentials
    if ($email == $adminCredentials['email'] && $pass == $adminCredentials['password']) {
        $_SESSION['user_name'] = $adminCredentials['name'];
        header('location:admin_profile.php');
    } elseif ($email == $employeeCredentials['email'] && $pass == $employeeCredentials['password']) {
        $_SESSION['user_name'] = $employeeCredentials['name'];
        header('location:vit1.html');
    } else {
        header('location:vendor.html'); // Redirect any user to the vendor page
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login" class="form-btn">
   </form>

</div>

</body>
</html>