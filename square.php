<?php
session_start();
require_once('lib.php');
if ($_SESSION['email']) {
  $data['name'] = $_SESSION['name'];
  render("views/square.php", "views/layouts/jumbotron.php", "square.php", $data);
} else {
  render("views/signin_form.php", "views/layouts/jumbotron.php", "signin.php");
}
?>
