<?php
require_once("config2.php");

$sliderId = $_POST["id"];


$name = $_POST["title"];
$odr = $_POST["oder"];
$_status = $_POST["status"];

$img = $_FILES["image"]["name"];

date_default_timezone_set("Asia/Calcutta");

$folderName = "upload/";
$imageName = date('Ymdhis').basename($_FILES["image"]["name"]);
$imgData = $folderName.$imageName;


move_uploaded_file($_FILES["image"]["tmp_name"], $imgData);

if(!$img){
    $updateQuery = "UPDATE `sliders` SET title='$name',ordering=$odr,satuts='$_status' where id=$sliderId ";
}else {
    $updateQuery = "UPDATE `sliders` SET title='$name',ordering=$odr,satuts='$_status',image='$imgData' where id=$sliderId"; 
}

if($con->query($updateQuery)){
    $_SESSION["success"] = "Data upadate successfuly";
    header("location:slider-list.php");
}else {
    $_SESSION["error"] = "Data not upadate";
    header("location:slider-edit.php?id=$sliderId");
}



?>