<?php
require_once ("admin/config2.php");
$data = $_POST;
$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$message = $data["message"];
$isError = false;

if ($name == "") {
    $isError = true;
    $_SESSION["name_error"] = "Name is required field";
}
if ($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is required field";
}
if ($phone == "") {
    $isError = true;
    $_SESSION["phone_error"] = "Phone is required field";
}
if ($message == "") {
    $isError = true;
    $_SESSION["message_error"] = "Message is required field";
}
if ($isError) {
    header("location:contact.php");
    exit();
}
$insQuery = "INSERT INTO `enquiries`(name,email,phone,message) VALUES ('$name','$email','$phone','$message')  ";
$con->query($insQuery);

header("location:index.php");
?>