<?php
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: index.php');
  }
  ?>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Namma Blog</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

      <!-- Fonts -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" />
      <!-- Squad theme CSS -->
      <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

  </head>

      <body>
        <?php
          include "./header.php"
        ?>
        <br>
        <br>
        <br>
        <br>
          <div id="content">
              <div class="container-fluid decor_bg" id="login-panel">
                  <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                          <div class="panel panel-primary" >
                              <div class="panel-heading">
                                  <h4>LOGIN</h4>
                              </div>
                              <div class="panel-body">
                                  <p class="text-warning"><i>Login to make Life Instresting</i><p>
                                  <form role="form" action="login_submit.php" method="POST">
                                      <div class="form-group">
                                          <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Password" name="password" required>
                                      </div>
                                      <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                  </form><br/>
                              </div>
                              <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p>
                              <p>Don't remember your password?<a href="forgot.php">Forgot password</a></p></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </body>
  </html>
