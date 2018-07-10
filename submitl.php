<?php
require "./includes/common.php";
 if (!isset($_SESSION['email'])) {
   header('location: login.php');
 }
 if (isset($_POST['bt'])) {
$myaid=$_GET['article'];
$id=$_SESSION['id'];
$sql = "INSERT INTO likes values('$id','$myaid')";
mysqli_query($conn, $sql);
header("Location: ./rblog.php?article=$myaid");
exit();
}
echo "hi";
 ?>
