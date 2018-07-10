<?php
  require "./includes/common.php";
 ?>
 <?php
 if (isset($_POST['submit'])) {
   if (!isset($_POST['mobile'])) {
    $eid = mysqli_real_escape_string($conn, $_POST['email']);
    if (empty($eid)) {
      header("Location: ./forgot.php?entry=empty");
      exit();
    }
    else {
      $sql = "SELECT * FROM users WHERE email='$eid'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        header("Location: ./forgot.php?entrym=error");
        exit();
      }
      else {
        $row = mysqli_fetch_assoc($result);
        $to=$eid;
        $otp = rand(100000,999999);
        $subject='Forgot your password';
        $content=$otp;
        $_SESSION['otp']=$otp;
        $_SESSION['ed']=$eid;
        $headers = 'From: arnikhil0@gmail.com';
        mail($to,$subject,$content,$headers);
        echo "Enter OTP";
      }
    }
  }
  else {
      $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
      if (empty($mobile)) {
        header("Location: ./forgot.php?entry=empty");
        exit();
      }
      else {
        $sql = "SELECT * FROM users WHERE mobile='$mobile'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
          header("Location: ./forgot.php?entry=error");
          exit();
        }
        else {
          include('way2sms-api.php');
          $row = mysqli_fetch_assoc($result);
          $otp = rand(100000,999999);
          $uid1=trim('9066369651');
          $pwd1=trim('chiranthan6991');
          $phone=trim($row['mobile']);
          $msg=trim($otp);
          $res = sendWay2SMS($uid1, $pwd1, $phone, $msg);
          $_SESSION['otp']=$otp;
          $_SESSION['mob']=$phone;
          echo "Enter OTP";
        }
      }
  }
      ?>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <form  action="otp.php" method="POST">
            <input type="text" name="otp" >
            <button type="submit" name="button">Submit</button>
        </form>
      </body>
    </html>
            <?php
 }
 ?>
