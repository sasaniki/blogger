<?php
  require "./includes/common.php";
 ?>
<?php
if (isset($_POST['submit'])) {
 $eid = mysqli_real_escape_string($conn, $_POST['email']);
 $pwd = mysqli_real_escape_string($conn, $_POST['password']);

 if (empty($eid) || empty($pwd)) {
   header("Location: ./index.php?loginempty=empty");
   exit();
 }
 else {
   $sql = "SELECT * FROM users WHERE email='$eid'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck < 1) {
     header("Location: ./index.php?loginnm=error");
     exit();
   }
 else {
   if ($row = mysqli_fetch_assoc($result)) {

     if ($pwd!=$row['password']) {
    header("Location: ./index.php?loginnm=error");
     exit();
    } elseif ($pwd==$row['password']) {
       $_SESSION['email'] = $row['email'];
       $_SESSION['id'] = $row['uid'];
       $_SESSION['name'] = $row['fname'];
       $_SESSION['uname'] = $row['uname'];
       $_SESSION['mobile'] = $row['mobile'];
       header("Location: ./index.php");
       exit();
     }
   }
 }
}
 }
  ?>
