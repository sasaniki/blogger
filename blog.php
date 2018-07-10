<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>BLOG</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/multiselect.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.min.js"></script>
  <script src="http://harshniketseta.github.io/popupMultiSelect/dist/javascripts/multiselect.min.js"></script>
  <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
</head>
  <body >
    <script type="text/javascript">
  $("#my-language").multiselect(
      {
        title: "Select Language",
        maxSelectionAllowed: 5
      });
</script>
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" style="background-color:#67b0d1; color:white;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1>BMSIT BLOG</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php"><?php echo $_SESSION['uname'];?></a></li>
            <li><a href="setting.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="col-lg-8" style="padding-left:auto;">
    <form class="" action="blog_submit.php" method="post" enctype="multipart/form-data">

    <div class="card my-4">
      <h5 class="card-header">ARTICLE:</h5>
      <div class="card-body">
        <form>
          <div class="form-group">
            <span>Title</span>
            <textarea class="form-control" rows="1" name="title" required></textarea>
          </div>
          <div class="form-group">
            <label >Category:</label>
              <select class="form-control" name="category" id="sel1">
                <?php $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while($resultCheck>0){
                  $row=mysqli_fetch_assoc($result);
                ?>
                <option value="<?php echo $row['cat'];?>"><?php echo $row['cat'];?></option>
                <?php
                  $resultCheck-=1;
                } ?>
              </select>
          </div>
          <div class="form-group">
              <span>Tag</span>
              <select multiple name="tag[]" id="my-language">
                <?php $sql = "SELECT * FROM tag";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                while($resultCheck>0){
                  $row=mysqli_fetch_assoc($result);
                ?>
                <option value="<?php echo $row['tid'];?>"><?php echo $row['tagname'];?></option>
                <?php
                  $resultCheck-=1;
                } ?>
              </select>
          </div>
          <div class="form-group">
            <span>Picture</span>
            <input type="file" name="upload">
          </div>
          <div class="form-group">
            <span>Write a Article</span>
            <textarea class="form-control" rows="3" name="article" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

  </form>
  </div>
  <script type="text/javascript">
    $("#my-language").multiselect(
        {
          title: "Select Tags",
          maxSelectionAllowed: 5
        });
  </script>
</body>
</html>
