<?php require "./includes/common.php";
  if (!isset($_SESSION['email'])) {
    header('location: login.php');
  }
  if(isset($_FILES['upload'])){
     $errors= array();
     $file_name = $_FILES['upload']['name'];
     $file_size = $_FILES['upload']['size'];
     $file_tmp = $_FILES['upload']['tmp_name'];
     $file_type = $_FILES['upload']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));

     $expensions= array("jpeg","jpg","png");

     if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
     }

     if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
     }

     if(empty($errors)==true) {
       echo $file_tmp."----".$file_name;
        move_uploaded_file($file_tmp,"blog/".$file_name);
        echo "Success";
     }else{
        print_r($errors);
     }
  }
  else {
    echo "string";
  }
    $today = date("y-m-d");
    $today="20".$today;
    $idd=$_SESSION['id'];
    $title=$_POST['title'];
    $category=$_POST['category'];
    $article=$_POST['article'];
    if ($title==""||$article=="") {
      header("Location: ./index.php");
      exit();
    }
    $sql = "INSERT INTO articles (uid,title,date1,category,blog) VALUES ('$idd','$title','$today','$category','$article');";
    mysqli_query($conn, $sql);
    $id=mysqli_insert_id($conn);
    if(!empty($_POST['tag'])){
    foreach ($_POST['tag'] as $selectedOption)
      {
        $sql = "INSERT INTO articletag (aid,tid) VALUES ('$id','$selectedOption');";
        mysqli_query($conn, $sql);
      }
    }
    header("Location: ./index.php");
    exit();
?>
