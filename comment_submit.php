<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  $uid=$_SESSION['id'];
  $aid=$_SESSION['aid'];
  $text=$_POST['comment'];
  echo $uid;
  echo $aid;
  echo $text;
  $sql = "INSERT INTO comment (uid,aid,text1) VALUES ('$uid','$aid','$text');";
  mysqli_query($conn, $sql);
  header("Location: ./rblog.php?article=$aid");
  exit();
?>
