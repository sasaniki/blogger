<?php
  require "./includes/common.php";
  if ( isset($_SESSION['email'])) {
      header('location: index.php');
  }
  if(isset($_SESSION['otp']))
  {
    if(isset($_SESSION['ed']))
    {
    $opt=$_POST['otp'];
    $otp1=$_SESSION['otp'];
    echo "$opt";
    echo "$otp1";
    if($opt==$otp1){
      ?>
      <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">
        <title>SETTINGS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/animate.css" rel="stylesheet" />
          <!-- Squad theme CSS -->
          <link href="css/style.css" rel="stylesheet">
      	<link href="color/default.css" rel="stylesheet">
      </head>
          <body>
            <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" style="background-color:#67b0d1; color:white;">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <h1>BMSIT BLOG</h1>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="profile.php"><?php echo $_SESSION['uname'];?></a></li>
                    <li><a href="setting.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
                    </div>
                </div>
            </nav>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
              <div class="container-fluid" id="content">
                  <div class="row">
                      <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                          <h4>Change Password</h4>
                          <?php
                          $email=$_SESSION['ed'];
                          $sql = "SELECT  * FROM users WHERE email='$email' ";
                          $result = mysqli_query($conn, $sql);
                          $row = mysqli_fetch_assoc($result);
                          ?>
                          <form action="cpass.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" value="<?php echo $email;?>" required = "true">
                            </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="old-password"  value="<?php echo $row['password'];?> " >
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                              </div>
                              <button type="submit" class="btn btn-primary">Change</button>
                          </form>
                      </div>
                  </div>
              </div>
          </body>

      </html>
      <?php
      session_unset($_SESSION['otp'],$_SESSION['ed']);
    }
    else {
      header("Location: ./forgot.php?error=yes");
      exit();
    }
  }
  else {
    $opt=$_POST['otp'];
    $otp1=$_SESSION['otp'];
    echo "$opt";
    echo "$otp1";
    if($opt==$otp1){
      ?>
      <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="description" content="">
          <meta name="author" content="">
        <title>SETTINGS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/animate.css" rel="stylesheet" />
          <!-- Squad theme CSS -->
          <link href="css/style.css" rel="stylesheet">
      	<link href="color/default.css" rel="stylesheet">
      </head>
          <body>
            <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" style="background-color:#67b0d1; color:white;">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <h1>BMSIT BLOG</h1>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="setting.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
                    </div>
                </div>
            </nav>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
              <div class="container-fluid" id="content">
                  <div class="row">
                      <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                          <h4>Change Password</h4>
                          <?php
                          $mobile=$_SESSION['mob'];
                          $sql = "SELECT  * FROM users WHERE mobile='$mobile'";
                          $result = mysqli_query($conn, $sql);
                          $row = mysqli_fetch_assoc($result);
                          $pass=$row['password'];
                          ?>
                          <form action="cpass.php?" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?>" required = "true">
                            </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="old-password"  value="<?php echo trim($pass);?> " >
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                              </div>
                              <button type="submit" class="btn btn-primary">Change</button>
                          </form>
                      </div>
                  </div>
              </div>
          </body>

      </html>
      <?php
      session_unset($_SESSION['otp'],$_SESSION['mob']);
    }
    else {
      header("Location: ./forgot.php?error=yes");
      exit();
    }
  }
  }
  else {
    header("Location: ./index.php");
    exit();
  }
?>