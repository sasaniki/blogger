<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="sty.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        //$a=$_GET['error'];
                        //if($a=='yes')
                        //echo "<br><br><b class='red'>" . $a . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
