<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet1.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="background">

    <div class="container-login">
      <div class="login-section">
          <img src="img/userimage.png">
          <br>
          <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
            <br>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <br>
            <br>
            <button type="submit" class="login-button" name="login_user">Login</button>
        </form>
      </div>
    </div>
 
</body>
</html>