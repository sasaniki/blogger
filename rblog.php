<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  if (isset($_GET['search'])) {
  if ($_GET['search']=='error') {
    echo "<script>alert('Enter field/wrong format');</script>";
  }
  }
  if (isset($_GET['blog'])) {
  if ($_GET['blog']=='no') {
    echo "<script>alert('No blogs on that day/by user/by title');</script>";
  }
  if ($_GET['blog']=='nocat') {
    echo "<script>alert('No blogs in that Category');</script>";
  }
  }
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>MOST POPULAR</title>

    <link href="bs/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">BMSIT BLOG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['uname'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="setting.php">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
  if (!isset($_GET['article'])) {
   $idd=$_SESSION['email'];
  $sql = "SELECT  uid,aid,count(uid) FROM likes group by (aid) order by count(uid) desc";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck==0) {
    //no articles with likes
  }
  else {
    $row = mysqli_fetch_assoc($result);

    $myaid=$row['aid'];
    $sql1 = "SELECT * FROM articles WHERE aid='$myaid'";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck = mysqli_num_rows($result1);
    if ($resultCheck==0) {
      //wrong article selection
    }
    else {
      //while($row1 = mysqli_fetch_assoc($result1)){
      $row1 = mysqli_fetch_assoc($result1);
        $post=$row1['blog'];
        $myid=$row1['uid'] ;
        $_SESSION['aid'] =$myaid ;
        ?>
  <!-- Page Content -->
  <div class="container" style="padding-top:54px">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $row1['title']; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?php

          $sql4 = "SELECT * FROM users WHERE uid='$myid'";
          $result4 = mysqli_query($conn, $sql4);
          $row4 = mysqli_fetch_assoc($result4);
          echo $row4['fname']; ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $row1['date1']; ?></p>


        <!-- Preview Image -->
        <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        -->
        <hr>

        <!-- Post Content -->
        <p><?php echo $post; ?></p>
        <hr>

        <form action="submitl.php?article=<?php echo $myaid;?>" method="post">
          <?php
          $t=$_SESSION['id'];
          $sql9 = "SELECT * FROM likes WHERE  uid='$t' and aid='$myaid'";
          $result9 = mysqli_query($conn, $sql9);
          if (!mysqli_fetch_assoc($result9)) {
             ?>
            <button type="submit" name="bt" class="btn btn-primary btn-sm">
              Like
            </button>
          <?php
        }else{?>
          <button type="button" class="btn btn-primary btn-sm" disabled>
            Like
          </button>
        <?php }
        ?>
        </form>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="comment_submit.php" method="post">
              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <?php
        $sql2 = "SELECT text1,uid FROM comment WHERE  aid='$myaid'";
        $result2 = mysqli_query($conn, $sql2);
        while($row2=mysqli_fetch_assoc($result2)) {
          $tid=$row2['uid'];
          $sql5 = "SELECT * FROM users WHERE uid='$tid'";
          $result5 = mysqli_query($conn, $sql5);
          $row5 = mysqli_fetch_assoc($result5);
          $a=$row5['PP'];
         ?>
        <div class=" media mb-4 " style="margin-right:5px;">
          <img class="d-flex mr-3 rounded-circle" src="<?php echo $a; ?>" alt="" style="height:35px;width:35px;">
          <div class="media-body">
            <h5 class="mt-0"><?php
            echo $row5['fname']; ?></h5>
            <?php echo $row2['text1']; ?>
          </div>
        </div>
        <?php
            }
            ?>
      </div>
    <?php
        }
    }
  }
    else{
    $myaid=$_GET['article'];
    $_SESSION['aid']=$myaid;
    $sql = "SELECT * FROM articles,users WHERE aid='$myaid' and users.uid=articles.uid";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    ?>
    <div class="container" style="padding-top:54px">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?php echo $row['title']; ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?php
            echo $row['fname']; ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $row['date1']; ?></p>


          <!-- Preview Image -->
          <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
          -->
          <hr>

          <!-- Post Content -->
          <p><?php echo $row['blog']; ?></p>
          <hr>
          <form action="submitl.php?article=<?php echo $myaid;?>" method="post">
            <?php
            $t=$_SESSION['id'];
            $sql9 = "SELECT * FROM likes WHERE  uid='$t' and aid='$myaid'";
            $result9 = mysqli_query($conn, $sql9);
            if (!mysqli_fetch_assoc($result9)) {
               ?>
              <button type="submit" name="bt" class="btn btn-primary btn-sm">
                Like
              </button>
            <?php
          }else{?>
            <button type="button" class="btn btn-primary btn-sm" disabled>
              Like
            </button>
          <?php }
          ?>
          </form>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="comment_submit.php" method="post">
                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <?php
          $sql2 = "SELECT * FROM comment WHERE  aid='$myaid' order by uid,tss desc";
          $result2 = mysqli_query($conn, $sql2);
          while($row2=mysqli_fetch_assoc($result2)) {
            $tid=$row2['uid'];
            $sql5 = "SELECT * FROM users WHERE uid='$tid'";
            $result5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_assoc($result5);
            $a=$row5['PP'];
           ?>
          <div class=" media mb-4 " style="margin-right:5px;">
            <img class="d-flex mr-3 rounded-circle" src="<?php echo $a; ?>" alt="" style="height:35px;width:35px;">
            <div class="media-body">
              <h5 class="mt-0"><?php
              echo $row5['fname']; ?></h5>
              <?php echo $row2['text1']; ?>
            </div>
          </div>
          <?php
              }
              ?>
        </div>
  <?php } ?>
      <div class="col-md-4">

        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <form class="" action="sear_submit.php" method="post">
              <div class="form-group">
                <span >Search By:</span>
                  <select class="form-control" name="search_by" id="sel1">
                    <option value="date1" selected>Date</option>
                    <option value="title">Title</option>
                    <option value="uname">User Name</option>
                  </select>
              </div>
            <div class="input-group">
              <input type="text" class="form-control" name="text2" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>

          </form>
          </div>
        </div>

        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="sbc.php?cat=sports">Sports</a>
                  </li>
                  <li>
                    <a href="sbc.php?cat=food">Food</a>
                  </li>
                  <li>
                    <a href="sbc.php?cat=poetry">Poetry</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="sbc.php?cat=project">Project</a>
                  </li>
                  <li>
                    <a href="sbc.php?cat=travel">travel</a>
                  </li>
                  <li>
                    <a href="sbc.php?cat=informational">Informational</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
<a href="<?php $prev_post = get_previous_post(); echo $_SERVER['HTTP_REFERER']; ?>">Back &gt;</a>
<footer class="py-5 bg-dark" style="max-height:50px">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
