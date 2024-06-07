<?php
require_once ("config2.php");
require_once ("validation.php");

$data = $_POST;
$blockId = $data["id"];
$name = $data["title"];
$hding = $data["heading"];
$odr = $data["ordering"];
$_status = $data["status"];
//  $ident = $data["identifier"];

$_ident = preg_replace("/[^a-zA-Z]/", "", "$name");   //widtoth space  and spacial charchartar
$ident = strtolower($_ident);

$dsc = $data["description"];

// for image

date_default_timezone_set("Asia/Calcutta");
$img = $_FILES["image"]["name"];

$folderName = "upload/";
$imgName = date('Ymdhis') . basename($_FILES["image"]["name"]);

$imgData = $folderName . $imgName;


move_uploaded_file($_FILES["image"]["tmp_name"], $imgData);
//--------------End-----------------

if (!$img) {
    $updateQuery = "UPDATE `blocks` SET title='$name',heading='$hding',description='$dsc',identifier='$ident',ordering=$odr,
    status=$_status where id=$blockId";
} else {
    $updateQuery = "UPDATE `blocks` SET title='$name',heading='$hding',description='$dsc',identifier='$ident',ordering=$odr,
    status=$_status,banner_image='$imgData' where id=$blockId";
}


if ($con->query($updateQuery)) {
    $_SESSION["success"] = "Data update successfully";
    header("location:block-list.php");
} else {
    $_SESSION["error"] = "Data not Save";
    header("location:add-block.php");
}


?>