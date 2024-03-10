<?php
require_once("config2.php");
$bolckId = $_GET["id"];
$DelQuery = "DELETE FROM `blocks` where id=$bolckId";
$con->query($DelQuery);
header("location:block-list.php");


?>