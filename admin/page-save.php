<?php
 require_once("config2.php");
$data = $_POST;

 $title = $data["title"];
 $heading = $data["heading"];
 $ordering = $data["ordering"];
 $status = $data["status"];
//  $url_key = $data["url_key"];

//   value use title => urlkey(unique/all small letters/ without space) 

$title= preg_replace("/[^a-zA-Z]+/", "", $title);
$url_key = strtolower($title); 

  $description = $data["description"];

 // for image

 date_default_timezone_set("Asia/Calcutta");

 $folderName = "upload/";
 $imgName = date('Ymdhis').basename($_FILES["image"]["name"]);
 
 $imageData = $folderName.$imgName; 
 
 $tmpName = $_FILES["image"]["tmp_name"];
 
 move_uploaded_file($tmpName,$imageData);
//--------------End-----------------

$insQuery = "INSERT INTO `pages`(title,heading,ordering,url_key,description,status,banner_image) 
VALUES('$title','$heading',$ordering,'$url_key','$description','$status','$imageData')";

if($con->query($insQuery)){
   $_SESSION["success"] = "Data Save sussfully";
   header("location:page-list.php");
}else {
    $_SESSION["error"] ="Data not Save"; 
    header("location:add-page.php");
}


?>