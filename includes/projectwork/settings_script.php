<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($conn, $old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($conn, $new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($conn, $new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($conn, $query) or die($mysqli_error($conn));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>
