<?php
require_once ("config2.php");
require_once ("validation.php");

$userid = $_GET["id"];
$userQuery = "DELETE FROM `users` where id='$userid'";
$con->query($userQuery);
header("location:user-list.php");
?>