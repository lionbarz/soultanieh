<?php
  session_start();
  require_once('lib.php');
  $data['email'] = $_SESSION['email']; 
  $data['name'] = $_SESSION['name']; 
  render('views/profile.php', 'views/layouts/jumbotron.php', 'profile.php', $data);
?>
