<?php
require_once("config2.php");

$data = $_POST;
 $pageId= $data["id"];

 
 $name = $data["title"];
 $hding = $data["heading"];
 $dsc = $data["description"];
//  $url = $data["url_key"];

 $title= preg_replace("/[^a-zA-Z]+/", "", $name);
 $url = strtolower($title); 

 $odr = $data["ordering"];
 $_status = $data["status"];
 
 $img = $_FILES["image"]["name"];
 date_default_timezone_set("Asia/Calcutta");

$folderName = "upload/";
$imageName = date('Ymdhis').basename($_FILES["image"]["name"]);
$imgData = $folderName.$imageName;


move_uploaded_file($_FILES["image"]["tmp_name"],$imgData);

if(!$img){
    $updateQuery = "UPDATE `pages` SET title='$name',heading='$hding',description='$dsc',url_key='$url',ordering=$odr,
    status=$_status where id=$pageId";
}else {
    $updateQuery = "UPDATE `pages` SET title='$name',heading='$hding',description='$dsc',url_key='$url',ordering=$odr,
    status=$_status,banner_image='$imgData' where id=$pageId";
}
   


if($con->query($updateQuery)){
    $_SESSION["success"] = "Data upadate successfuly";
    header("location:page-list.php");
}else {
    $_SESSION["error"] = "Data not upadate";
    header("location:page-edit.php");
}



?>