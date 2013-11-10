<?php
session_start();
?>
<h1><?= $_SESSION['name']; ?></h1>
<p><?= $_SESSION['email']; ?></p>
