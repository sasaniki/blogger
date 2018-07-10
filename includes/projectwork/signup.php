<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: products.php');
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="sty.css">

  </head>
  <body>
    <?php
      include "./includes/header.php"
    ?>
    <br>
    <br>
    <br>
    <div class="container-fluid decor_bg" id="content">
        <div class="row">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>SIGN UP</h2>
                    <form  action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name"  required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                        </div>
                        <div class="form-group">
                            <input  type="text" class="form-control"  placeholder="City" name="city" required>
                        </div>
                        <div class="form-group">
                            <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
  </body>
</html>
