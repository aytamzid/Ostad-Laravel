<?php

include_once 'functions.php';
if ( isset( $_POST['submit'] ) ) {

    registration();
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <title>Assignment Module 8</title>
</head>
  <body>

  <legend class="page-title">Registration Form</legend>

  <div class="container">
    <div class="child">
      <form method="post" action="register.php" enctype="multipart/form-data">

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" ><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" ><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" ><br><br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="confirmPassword" id="confirmPassword" ><br><br>

        <label for="picture">Profile Picture:</label>
        <input type="file" name="picture" id="picture" ><br><br>

        <button type="submit" name="submit">Submit</button><br>

        
      </form>
      <span class="new-here">Already a Member? <a href="login.php"> Login Now!</a></span>
    </div>
  </div>

  </body>
</html>