<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: products.php');
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
    $eid=mysqli_real_escape_string($conn, $_POST['email']);
    $pwd=mysqli_real_escape_string($conn, $_POST['password']);
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $city=mysqli_real_escape_string($conn, $_POST['city']);
    $contact=mysqli_real_escape_string($conn, $_POST['contact']);
    $address=mysqli_real_escape_string($conn, $_POST['address']);
    $sql = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name', '$eid', '$pwd', '$contact','$city','$address' );";
    mysqli_query($conn, $sql);
    $id=mysqli_insert_id($con);
    $_SESSION['email'] = $eid;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['contact'] = $contact;
    header("Location: ./products.php");
    exit();
  }
  ?>
