      <?php if ($GLOBALS['error']) { echo $GLOBALS['error']; } ?>
      <form class="form-signin" action="signin.php" method="post">
        <input type="text" name="email" class="form-control" placeholder="Email address" autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
