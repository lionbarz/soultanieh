<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>Soultanieh</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="/">Home</a></li>
          <li><a href="about.php">About</a></li>
          <?php
            if ($_SESSION['email']) {
              echo '<li><a href="logout.php">Sign out</a></li>';
            } else {
              echo '<li><a href="signin.php">Sign in</a></li>';
            }
          ?>
        </ul>
        <h3 class="text-muted">Soultanieh</h3>
      </div>

      <?php include($main_file); ?>

      <div class="footer">
        <p>&copy; Soultanieh 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script>
    <?php 
      if ($main_controller) {
        echo "window.history.replaceState('Object', 'Title', '/$main_controller');";
      }
    ?>
  </script>
  </body>
</html>

