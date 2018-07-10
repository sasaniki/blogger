<?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require "./includes/common.php";
  if (isset($_SESSION['email']))
  {
     header('location: products.php');
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
  <?php
    //$root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "./includes/header.php"
  ?>
  <div id="content">
      <!--Main banner image-->
      <div id = "banner-image">
          <div class="container">
              <center>
                  <div id="banner-content">
                      <h1>We sell lifestyle.</h1>
                      <p>Flat 40% OFF on premium brands </p>
                      <br/>
                      <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                  </div>
              </center>
          </div>
      </div>
      <!--Main banner image end-->

      <!--Item categories listing-->
      <div class="container">
          <div class="row text-center" id="item_list">
              <div class="col-sm-4">
                  <a href="products.html#cameras" >
                      <div class="thumbnail">
                          <img src="camera.jpg" alt="">
                          <div class="caption">
                              <h3>Cameras</h3>
                              <p>Choose among the best available in the world.</p>
                          </div>
                      </div>
                  </a>
              </div>

              <div class="col-sm-4">
                  <a href="products.html#watches" >
                      <div class="thumbnail">
                          <img src="watch.jpg" alt="">
                          <div class="caption">
                              <h3>Watches</h3>
                              <p>Original watches from the best brands.</p>
                          </div>
                      </div>
                  </a>
              </div>

              <div class="col-sm-4">
                  <a href="products.html#shirts" >
                      <div class="thumbnail">
                          <img src="shirt.jpg" alt="">
                          <div class="caption">
                              <h3>Shirts</h3>
                              <p>Our exquisite collection of shirts.</p>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
      <!--Item categories listing end-->
  </div>
      <?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
      include "./includes/footer.php" ?>
  </body>
</html>
