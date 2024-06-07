<?php
require_once ("config2.php");
require_once ("validation.php");

$sliderid = $_GET["id"];
$sliderQuery = "DELETE FROM `sliders` where id='$sliderid'";
$con->query($sliderQuery);
header("location:slider-list.php");
?>