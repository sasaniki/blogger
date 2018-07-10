<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: index.php');
  }
  $eeid = mysqli_real_escape_string($conn, $_POST['email']);
  $sql = "SELECT * FROM users WHERE email='$eeid'";
  $result = mysqli_query($conn, $sql);
  if (($row1 = mysqli_fetch_assoc($result))) {
    header("Location: ./index.php?signup=error");
    exit();
  }
    $moid = mysqli_real_escape_string($conn, $_POST['mobile']);
    $sql1 = "SELECT * FROM users WHERE mobile='$moid'";
    $result1 = mysqli_query($conn, $sql1);
    if (($row1 = mysqli_fetch_assoc($result1))) {
      header("Location: ./index.php?signup=error");
      exit();
    }
  else {
    if(isset($_FILES['image'])){
       $errors= array();
       $file_name = $_FILES['image']['name'];
       $file_size = $_FILES['image']['size'];
       $file_tmp = $_FILES['image']['tmp_name'];
       $file_type = $_FILES['image']['type'];
       $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

       $expensions= array("jpeg","jpg","png");

       if(in_array($file_ext,$expensions)=== false){
          $errors[]="extension not allowed, please choose a JPEG or PNG file.";
       }

       if($file_size > 2097152) {
          $errors[]='File size must be excately 2 MB';
       }

       if(empty($errors)==true) {
         echo $file_tmp."----".$file_name;
          move_uploaded_file($file_tmp,"profile/".$file_name);
          echo "Success";
       }else{
          print_r($errors);
       }
    }

    $target_dir = "";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $filePath = realpath($target_dir);
    echo $target_file;
    $pf=".\profile\\".$target_file;
    $eid=mysqli_real_escape_string($conn, $_POST['email']);
    $pwd=mysqli_real_escape_string($conn, $_POST['password']);
    $fname=mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $uname=mysqli_real_escape_string($conn, $_POST['uname']);
    $mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
    $age=mysqli_real_escape_string($conn, $_POST['age']);
    $pp=mysqli_real_escape_string($conn, $pf);
    if ($target_file=='') {
      $sql = "INSERT INTO users (fname,lname,age,uname,password,email,mobile) VALUES ('$fname','$lname','$age','$uname' , '$pwd','$eid','$mobile');";
    }
   else{
    $sql = "INSERT INTO users (fname,lname,age,uname,password,email,mobile,pp) VALUES ('$fname','$lname','$age','$uname' , '$pwd','$eid','$mobile', '$pp');";
    }
    mysqli_query($conn, $sql);
    $id=mysqli_insert_id($conn);
    $_SESSION['email'] = $eid;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $fname;
    $_SESSION['uname'] = $uname;
    header("Location: ./index.php");
    exit();
  }

  ?>
