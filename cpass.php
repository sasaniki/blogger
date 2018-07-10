<?php

require("includes/common.php");
$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($conn, $old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($conn, $new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($conn, $new_pass1);

if(isset($_POST['mobile'])){
    $query = "SELECT email,password FROM users WHERE mobile ='" . $_POST['mobile'] . "'";
    echo "hey";
}
else {
  $query = "SELECT email, password FROM users WHERE email ='" . $_POST['email'] . "'";
}
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];
echo $orig_pass;

if ($new_pass != $new_pass1) {
  session_unset($_POST['mobile']);
    header('location: index.php?errorm=The two passwords don\'t match');
}
 else
  {
    if (trim($old_pass)==trim($orig_pass)) {

      if(isset($_POST['mobile'])){
          $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE mobile = '" . $_POST['mobile'] . "'";
      }
      else{
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_POST['email'] . "'";
      }
        mysqli_query($conn, $query) or die($mysqli_error($conn));
        session_unset($_SESSION['mob']);
        header('location: index.php?noerror=Password Updated');
    }
    else
    {
      session_unset($_SESSION['mob']);
        header('location: index.php?errorold=Wrong Old Password');
      }
}
?>
