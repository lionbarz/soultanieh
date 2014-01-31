<?php

session_start();
unset($_SESSION['email']);

require_once('lib.php');
render('views/home.php', 'views/layouts/jumbotron.php', 'index.php');
?>
