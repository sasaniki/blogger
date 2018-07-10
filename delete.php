<?php
  require "./includes/common.php";
  if (isset($_POST['submitd'])) {
    $uid=$_POST['uid'];
    echo $uid;
    $sql1 = "select * form users WHERE uid='$uid'";
    $result1 = mysqli_query($conn, $sql1);
    if(!($row = mysqli_fetch_assoc($result1)))
    {
      $_SESSION['error']='user';
      header("Location: ./test4.php");
      exit();
    }
    $sql = "delete from users WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
     exit();
  }
  else if (isset($_POST['submitda'])) {
    $aid=$_POST['aid'];
    $sql1 = "select * from articles WHERE aid='$aid'";
    $result1 = mysqli_query($conn, $sql1);
    if(!($row = mysqli_fetch_assoc($result1)))
    {
      $_SESSION['error']='article';
      header("Location: ./test4.php");
      exit();
    }
    $sql = "delete from articles WHERE aid='$aid'";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
     exit();
  }
  else if (isset($_POST['submitac'])) {
    $cat=$_POST['cat'];
    $sql1 = "select * from category WHERE cat='$cat'";
    $result1 = mysqli_query($conn, $sql1);
    if($row = mysqli_fetch_assoc($result1))
    {
      $_SESSION['exist']='category';
      header("Location: ./test4.php");
      exit();
    }
    $sql = "insert into category values('$cat')";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
     exit();
  }
  else if (isset($_POST['submitdc'])) {
    $cat=$_POST['cat'];
    $sql1 = "select * from category WHERE cat='$cat'";
    $result1 = mysqli_query($conn, $sql1);
    if(!($row = mysqli_fetch_assoc($result1)))
    {
      $_SESSION['error']='category';
      header("Location: ./test4.php");
      exit();
    }
    $sql = "delete from category where cat='$cat'";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
     exit();
  }
  else if (isset($_POST['submitdt'])) {
    $cat=$_POST['tag'];
    $sql1 = "select * from tag WHERE tagname='$cat'";
    $result1 = mysqli_query($conn, $sql1);
    if(!($row = mysqli_fetch_assoc($result1)))
    {
      $_SESSION['error']='Tag';
      header("Location: ./test4.php");
      exit();
    }
    $sql = "delete from tag where tagname='$cat'";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
     exit();
  }
  else if (isset($_POST['submitat'])) {
    $cat=$_POST['tag'];
    $sql1 = "select * from tag WHERE tagname='$cat'";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck = mysqli_num_rows($result1);
    if($row = mysqli_fetch_assoc($result1))
    {
      $_SESSION['exist']='tag';
      echo "hi";
      header("Location: ./test4.php");
      exit();
    }
    $sql = "INSERT INTO tag (tagname) VALUES ('$cat')";
    $result = mysqli_query($conn, $sql);
    header("Location: ./test4.php");
    exit();
  }
  else {
  header("Location: ./test4.php?uns=yes");
  exit();
  }
?>
