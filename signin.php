<?php
$logged_in = false;
if ($logged_in) {
  $email = htmlspecialchars($_POST["email"]);
  echo 'Hello ' . $email . '!';
  echo 'Pass ' . htmlspecialchars($_POST["password"]) . '!';

  session_start();
  // store session data
  $_SESSION['email']=$email;
  echo '<a href="view_room.php">watch</a>';
} else {
  $error = "Bad username/password combination.";
  include('index.php');
}
?>
