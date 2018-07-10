<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
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
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" style="background-color:#67b0d1; color:white;">
        <div class="container">

                <a class="navbar-brand" href="index.php">
                    <h1 style=" color:white;">BMSIT BLOG</h1>
                </a>
        </div>
    </nav>
  <?php
  if(isset($_GET['cat'])){$cate=$_GET['cat'];}
  if(!isset($_GET['cat'])){$cate="sports";}

    $sql = "SELECT  * FROM articles,users WHERE category='$cate' and articles.uid=users.uid";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck==0) {
     header("Location: ./rblog.php?blog=nocat");
     exit();
    }
    else {
      ?>
      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><a href="rblog.php?article=<?php echo $row['aid'];?>"><?php echo $row['title'];?></a></h2>
            <p class="card-text" id="myform">
            <?php   echo $row['blog'];
             ?>
           </p>

          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $row['date1']; ?>
            <a href="#"><?php echo $row['fname']; ?></a>
          </div>
        </div>
        <?php
      }?>

    </div>

      <?php

    }


?>
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

    </form>
    </div>
  </div>



</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
