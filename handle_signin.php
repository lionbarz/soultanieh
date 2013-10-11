<?php
$email = htmlspecialchars($_POST["email"]);
echo 'Hello ' . $email . '!';
echo 'Pass ' . htmlspecialchars($_POST["password"]) . '!';

session_start();
// store session data
$_SESSION['email']=$email;

?>
<a href="watch_room.php">watch</a>
