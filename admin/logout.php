<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
$_SESSION['success'] = "User Logout Successfuly!!";
header("location:index.php");


?>