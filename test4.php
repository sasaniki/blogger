<?php
  require "./includes/common.php";
  if (isset($_GET['uns'])) {
    echo "<script>alert('Unsucessful');</script>";
  }
  if (isset($_SESSION['error'])) {
    $abc=$_SESSION['error'];
    echo "<script>alert('no such $abc');</script>";
    unset($_SESSION['error']);
  }
  if (isset($_SESSION['exist'])) {
    $abc=$_SESSION['exist'];
    echo "<script>alert('$abc exists');</script>";
    unset($_SESSION['exist']);
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <title>likes</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


</head>
<body>
  <?php
    include "./header.php"
  ?>
  <br>
  <br>
  <br>
  <div style="padding:20px; width:auto">


  <table class="table-bordered table-striped" >
  <tr>
    <th style="width:50px">AID</th>
    <th>LIKES</th>
  </tr>


<?php  if($result=mysqli_query($conn,"CALL counter")){
        while($row=mysqli_fetch_row($result)){
          ?>
          <tr>
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
          </tr>
      <?php
      }
      }
?>
</table>
</div>
  <div id="content">
      <div class="container-fluid decor_bg" id="login-panel">
          <div class="row">
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>REMOVE USERS</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>Delete a user</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="User id" name="uid" >
                              </div>
                              <button type="submit" name="submitd" class="btn btn-primary">remove</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>REMOVE ARTICLE</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>Delete a article</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Article id" name="aid" >
                              </div>
                              <button type="submit" name="submitda" class="btn btn-primary">remove</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>ADD CATEGORY</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>add a category</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Category" name="cat" >
                              </div>
                              <button type="submit" name="submitac" class="btn btn-primary">add</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>DELETE CATEGORY</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>delete a Category</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Category" name="cat" >
                              </div>
                              <button type="submit" name="submitdc" class="btn btn-primary">remove</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>ADD TAG</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>add a tag</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Tag" name="tag" >
                              </div>
                              <button type="submit" name="submitat" class="btn btn-primary">add</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>
              <div class="col-md-4 ">
                  <div class="panel panel-primary" >
                      <div class="panel-heading">
                          <h4>DELETE TAG</h4>
                      </div>
                      <div class="panel-body">
                          <p class="text-warning"><i>delete a tag</i><p>
                            <form  action="delete.php" method="post">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Tag" name="tag" >
                              </div>
                              <button type="submit" name="submitdt" class="btn btn-primary">remove</button><br><br>
                            </form><br/>
                      </div>
                    </div>
              </div>

          </div>
      </div>
  </div>
  <div id="content">
      <div class="container-fluid decor_bg" id="login-panel">
          <div class="row">

          </div>
      </div>
  </div>
  </body>
</html>
