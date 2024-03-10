<?php
require_once("config2.php");

$data = $_POST;

 $title = $data["title"];
 $heading = $data["heading"];
 $ordering = $data["ordering"];
 $status = $data["status"];
//  $ident = $data["identifier"];

$_ident =  preg_replace("/[^a-zA-Z]/","","$title");   //widtoth space  and spacial charchartar
$ident = strtolower($_ident);

 $description = $data["description"];

 // for image

 date_default_timezone_set("Asia/Calcutta");

 $folderName = "upload/";
 $imgName = date('Ymdhis').basename($_FILES["image"]["name"]);
 
 $imageData = $folderName.$imgName; 
 
move_uploaded_file( $_FILES["image"]["tmp_name"],$imageData);
//--------------End-----------------

$insQuery = "INSERT INTO `blocks`(title,heading,ordering,identifier,description,status,banner_image) 
VALUES('$title','$heading',$ordering,'$ident','$description','$status','$imageData')";

if($con->query($insQuery)){
   $_SESSION["success"] = "Data Save sussfully";
   header("location:block-list.php");
}else {
    $_SESSION["error"] ="Data not Save"; 
    header("location:add-block.php");
}


?>


