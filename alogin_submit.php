<?php
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: index.php');
  }
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
     header("Location: ./index.php?loginad=error");
     exit();
   }
 else {
   if ($row = mysqli_fetch_assoc($result)) {
     $check='yes';
      if (($pwd==$row['password']) && $row['admin']==$check) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['uid'];
        $_SESSION['name'] = $row['fname'];
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['admin'] = 'yes';
       header("Location: ./test4.php");
       exit();
     }
     else if($row['admin']!=$check){
       header("Location: ./index.php?loginnad=error");
        exit();
     }
     else {
    header("Location: ./index.php?loginad=error");
     exit();
    }
   }
 }
}
 }
  ?>
