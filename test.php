<?php
session_start();
if (!$_SESSION['name']) {
  $_SESSION['name'] = "Mo-" . rand(1,5000);
}
?>

{"message":"Hello <?= $_SESSION['name'] ?>"}
