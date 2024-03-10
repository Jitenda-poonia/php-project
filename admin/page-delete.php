<?php
require_once("config2.php");

$sliderid = $_GET["id"];
$pageQuery = "DELETE FROM `pages` where id='$sliderid'";
$con->query($pageQuery);
header("location:page-list.php");
?>