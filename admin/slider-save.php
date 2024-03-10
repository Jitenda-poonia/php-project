<?php
require_once("config2.php");
$data = $_POST;
$title = $data["title"];
$oder = $data["oder"];
$status = $data["status"];

$file = $_FILES;

$_SESSION["title"] = $title;
$_SESSION["oder"] = $oder;
$_SESSION["status"] = $status;
$_SESSION["image"] = $file["image"];

// print_r($_SESSION["image"]);
// dd($file);

$isError = false;


if($title ==""){
    $isError = true;
    $_SESSION["title_error"] = "Title is required field";
}
if($oder ==""){
    $isError = true;
    $_SESSION["oder_error"] = "Odering is required field";
}
if($status ==""){
    $isError = true;
    $_SESSION["status_error"] = "Status is required field";
}
if($file["image"]["name"] ==""){
    $isError = true;
    $_SESSION["image_error"]= "image a required field";
    
}
if($isError){
    header("location:add-slider.php");
    exit();
}


//for file
$folderName = "upload/";
date_default_timezone_set("Asia/Calcutta");
$imgName = date('Ymdhis').basename($_FILES["image"]["name"]);
$imageData = $folderName.$imgName; 
move_uploaded_file($_FILES["image"]["tmp_name"],$imageData);
// -------------end--------------


$insQuery = "INSERT INTO `sliders`(image,title,ordering,satuts) VALUES('$imageData','$title',$oder,' $status')";
if($con->query($insQuery)){
    $_SESSION["success"] = "Data Save sussfully";
    unset($_SESSION["title"]);
    unset($_SESSION["oder"]);
    unset($_SESSION["status"]); 
    unset($_SESSION["image"]); 
    header("location:slider-list.php");
}else {
    $_SESSION["error"] ="Data not Save";
    header("location:add-slider.php");
}
?>  