<?php
  $password='nikhil123';
  $username='root';
  $conect="localhost";
  $database='store';
  $conn=mysqli_connect($conect,$username,$password,$database) or die(mysqli_error($con));
  session_start();
 ?>
