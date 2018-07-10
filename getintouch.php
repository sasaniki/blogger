<?php
  require "./includes/common.php";
  $n=$_POST['name1'];
  $to='pavanhoysal97@gmail.com';
  $em1=$_POST['email1'];
  $content1=$_POST['message'];
  $subject=$_POST['subject'];
  $content="Name = ".$n.nl2br("\n")."email = ".$em1.nl2br("\n")."query".$content1;
  $headers = 'From: arnikhil0@gmail.com';
  if($n!=null&&$em1!=null&&$content1!=null&&$n!=null&&$n!=null)
  mail($to,$subject,$content,$headers);
  else {
    echo "hey";
  }
  header("Location: ./index.php");
  exit();
 ?>
