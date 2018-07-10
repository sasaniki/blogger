<?php
require "./includes/common.php";
 if ($_SESSION['email']!=null) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ./index.php");
	exit();
}
header("Location: ./index.php");
exit();
 ?>
