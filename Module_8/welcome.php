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

  <legend class="page-title"> Users</legend>

  <div class="container">
    <div class="child">

<?php


$urlEmail = $_GET['email'];

$usersFile = fopen( 'users.csv', 'r' );

echo '<table>';

while (  ( $userData = fgetcsv( $usersFile ) ) !== false ) {
  if($urlEmail == $userData[2]){}
echo '<tr>';
echo '<td>' ."Hello ". $userData[0] .  '</td>';
echo '</tr>';

}

echo '</table>';

fclose( $usersFile );
 

?>
    </div>

  </div>

  </body>
</html>