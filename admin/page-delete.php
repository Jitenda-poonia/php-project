<?php
require_once ("config2.php");
require_once ("validation.php");

$sliderid = $_GET["id"];
$pageQuery = "DELETE FROM `pages` where id='$sliderid'";
$con->query($pageQuery);
header("location:page-list.php");
?>