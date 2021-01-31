<html>
  <body>
      <form method="post">
        <input type="submit" name="reg" value="register">&nbsp;&nbsp;
        <input type="submit" name="log" value="login">
      </form>
  </body>
</html>
<?php
  if (isset($_POST['reg'])) {
    header("Location:P12register.php");
  }
  elseif (isset($_POST['log'])) {
    header("Location:P12login.php");
  }
?>
