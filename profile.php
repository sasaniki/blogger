<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">

</head>

<body >
  <div class="col-lg-offset-5" style="padding-top:30px">
    <a href="index.php" ><button type="button" class="btn btn-primary">Home</button></a>
  </div>
  <?php
  $idd=$_SESSION['email'];
  $sql = "SELECT * FROM users WHERE email='$idd'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck==0) {
    header("Location: ./index.php?profile=error");
    exit();
  }
  else{
    $row = mysqli_fetch_assoc($result);
    $eid=$row['email'];
    $fname=$row['fname'];
    $lname=$row['lname'];
    $uname=$row['uname'];
    $a=$row['PP'];
    $myid=$row['uid'];
    $mob=$row['mobile'];
    ?>
	 	<div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="<?php echo $a;?>"  style="height:100px; border-radius:40px; width:100px; border:0; padding:0px;  " alt="default"></div>
      <h1><?php echo $fname." ".$lname;?></h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="javascript:change1()" class="sel">Bio</a></li>
        </ul>
      </nav>

       <section id="bio" style="display:block">
       	<p class="setting"><span>E-mail Address </span><?php echo $eid;?></p>

        <p class="setting"><span>Language </span> English(US)</p>

        <p class="setting"><span>User Name </span><?php echo $uname;?></p>

        <p class="setting"><span>Mobile NO</span><?php echo $mob;?></p>

        <p class="setting"><span>No of blogs posted </span><?php
        $sql1 = "SELECT count(aid) as total FROM articles WHERE uid='$myid'";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck = mysqli_num_rows($result1);
           $row1= mysqli_fetch_assoc($result1);
           echo $row1['total'];
          ?></p>

      </section>

    <?php } ?>
      </div><!-- @end #content -->
  </div><!-- @end #w -->


</body>

</html>
