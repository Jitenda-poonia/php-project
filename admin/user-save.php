<?php
require_once("config2.php");

$data = $_POST;

//error
$isError = false;

$name =  $data["name"];
$email =  $data["email"];
$ph =  $data["phone"];
$gender =  $data["gender"];
$designation =  $data["designation"];
$pass =  md5($data["password"]);
$confirm_pass =  md5($data["confirm_password"]);


 // To preserve value
$_SESSION["names"] = $name;
$_SESSION["mail"] = $email;
$_SESSION["phone"] = $ph;
$_SESSION["gndr"] = $gender;
$_SESSION["des"] = $designation;
//-----------End----------------



//for unique Email
$selQuery = "SELECT * FROM `users` where email='$email'";
$emailQuery = $con->query($selQuery);
// ----------------------End--------------------
 
if(!($emailQuery->num_rows) && ($pass == $confirm_pass)) {
$insQuery="INSERT INTO `users` (name,email,phone,gender,designation,password) VALUES ('$name','$email','$ph','$gender','$designation','$pass')";
}
if($emailQuery->num_rows){
$isError = true;
$_SESSION["email_error"] = "Email Already exist..."; 
   
}
if($pass != $confirm_pass){
$isError = true;
$_SESSION["password_error"] = "Password does not match..";
}

if($name == ""){
    $isError = true;
    $_SESSION["name_error"] = "Title Is requird field.";
}
if($email == ""){
    $isError = true;
    $_SESSION["email_error"] = "email Is requird field.";
}

if($ph == ""){
    $isError = true;
    $_SESSION["phone_error"] = "Mobile Number Is requird field.";
}
if($gender == ""){
    $isError = true;
    $_SESSION["gender_error"]= "Gender Is requird field.";
}
if($designation == ""){
    $isError = true;
    $_SESSION["designation_error"]= "designation Is requird field.";
}
if($data["password"]== ""){
    $isError = true;
    $_SESSION["password_error"] = "password requird field.";
}


if($isError){
    header("location:add-user.php");
    exit();
}

if($con->query($insQuery)) {
    $_SESSION["success"] = "User added successfully...";
    header("location:user-list.php");
    unset($_SESSION["names"]); 
    unset($_SESSION["mail"]); 
    unset($_SESSION["phone"]); 
    unset($_SESSION["gndr"]); 
    unset($_SESSION["des"]); 
} else {
    $_SESSION["error"] = "Something Wrong...";
    header("location:add-user.php");
}








?>