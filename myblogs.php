<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  if (isset($_GET['blog'])) {
  if ($_GET['blog']=='no') {
    echo "<script>alert('No blogs ');</script>";
  }
  }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>MY BLOGS</title>
  <link href="bs/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
	<link href="color/default.css" rel="stylesheet">
</head>
  <body >
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
    <br>
    <br>
    <br>
    <?php if (!isset($_GET['blog'])) {
      ?>
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">BLOGS
          </h1>

          <!-- Blog Post -->
          <?php
            $myeid=$_SESSION['email'];
            $sql = "SELECT  * FROM articles,users WHERE email='$myeid' and articles.uid=users.uid";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck==0) {
              header("Location: ./myblogs.php?blog=no");
              exit();
            }
            else {
              while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><a href="rblog.php?article=<?php echo $row['aid'];?>"><?php echo $row['title'];?></a></h2>
              <p class="card-text" id="myform">
              <?php
              if(isset($_GET['more']))
              {
                echo $row['blog'];
              }
              else {
                  echo substr($row['blog'],0,100);
              }
               ?>
             </p>
               <?php
               if(!isset($_GET['more']))
               {
                ?>
              <form >
              <button name="more" type="submit" value="ok" class="btn btn-primary">Read More &rarr;</button>
            </form>
            <?php
              }
            ?>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row['date1']; ?>
              <a href="#"><?php echo $row['fname']; ?></a>
            </div>
          </div>
        <?php
        }
        }
        ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>
    </div>
<?php }
 else {
 ?>
 <div class="container">
  <a href="blog.php"><strong>Want to write a BLOG?</strong></a>
 </div>
<?php } ?>

</body>
</html>
