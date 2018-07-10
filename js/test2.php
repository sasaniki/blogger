<?php require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>PROFILE</title>

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


  <?php  $idd=$_SESSION['email'];
  $sql = "SELECT * FROM users WHERE email='$idd'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck==0) {
    echo "No Such users found in DB";
  }
  else {
    $row = mysqli_fetch_assoc($result);
    $myid=$row['uid'];
    $sql1 = "SELECT * FROM articles WHERE uid='$myid'";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck = mysqli_num_rows($result1);
    if ($resultCheck==0) {
      echo "NO posts so far";
    }
    else {
      //while($row1 = mysqli_fetch_assoc($result1)){
      $row1 = mysqli_fetch_assoc($result1);
        $post=$row1['blog'];
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
          <a href="#"><?php echo $row['fname']; ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $row1['date']; ?></p>

        <hr>

        <!-- Preview Image -->
        <!--<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
        -->
        <hr>

        <!-- Post Content -->
        <p><?php echo $post; ?></p>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

      </div>
    <?php }
    }
    ?>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Sports</a>
                  </li>
                  <li>
                    <a href="#">Food</a>
                  </li>
                  <li>
                    <a href="#">Poetry</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Project</a>
                  </li>
                  <li>
                    <a href="#">Educational</a>
                  </li>
                  <li>
                    <a href="#">Informational</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
<footer class="py-5 bg-dark" style="max-height:50px">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
