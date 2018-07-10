<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: index.php');
  }
  $eeid = mysqli_real_escape_string($conn, $_POST['email']);
  $sql = "SELECT id FROM users WHERE email='$eeid";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck>0) {
    header("Location: ./index.php?signup=error");
    exit();
  }
  else {
    $target_dir = "";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $filePath = realpath($target_dir);
    $pf=$filePath."\profile\\".$target_file;
    echo $pf;
    $eid=mysqli_real_escape_string($conn, $_POST['email']);
    $pwd=mysqli_real_escape_string($conn, $_POST['password']);
    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $uname=mysqli_real_escape_string($conn, $_POST['uname']);
    $pp=mysqli_real_escape_string($conn, $pf);
    $sql = "INSERT INTO users (fname,lname,uname,password,email,pp) VALUES ('$fname','$lname','$uname' , '$pwd','$eid', '$pp');";
    mysqli_query($conn, $sql);
    $id=mysqli_insert_id($con);
    $_SESSION['email'] = $eid;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $fname;
    $_SESSION['uname'] = $uname;
    header("Location: ./index.php");
    exit();
  }
  ?>
