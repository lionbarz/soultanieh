<?php
session_start();

$logged_in = false;
$email = htmlspecialchars($_POST["email"]);
$passw  = htmlspecialchars($_POST["password"]);
$referer = htmlspecialchars($_POST["referer"]);

require_once('lib.php');
if ($email) {
  $db = get_db_info();
  $con = mysqli_connect($db["location"], $db["user"], $db["pass"], $db["db"]);
  if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "SELECT * FROM User WHERE email = '$email' and password = sha1('".$email.$passw."')";
  $result = mysqli_query($con, $sql);
  if ($row = mysqli_fetch_array($result)) {
    $_SESSION['email']=$email;
    $_SESSION['name'] =$row['name'];
    $data['email'] = $_SESSION['email']; 
    $data['name'] = $_SESSION['name']; 
    render('views/profile.php','views/layouts/jumbotron.php', 'profile.php', $data);
  } else {
    $error = "Bad username/password combination.";
    render('views/signin_form.php','views/layouts/jumbotron.php', 'signin.php');
  }
} else {
  render('views/signin_form.php','views/layouts/jumbotron.php', 'signin.php');
}
?>
