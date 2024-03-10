<?php 
require_once("config2.php");

$id = $_POST["s_id"];
// echo $id;

$updateQuery = "UPDATE enquiries SET status=2 WHERE id=$id";
$con->query($updateQuery);


?>
<button class="btn btn-success">Read</button>