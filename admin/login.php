<?php
require_once("config2.php");
$data = $_POST;
 $email = $data["email"];
 $password = md5($data["password"]);
// dd($password);
$selQuery = "SELECT * FROM `users` where email='$email' and password='$password'";
$userData = $con->query($selQuery); 

if($userData->num_rows){
$_user = mysqli_fetch_assoc($userData);

$userId = $_user["id"];
 
 $_SESSION['user_id'] = $_user["id"]; //login ka time nikalen ke liye

 $_SESSION['name'] = $_user['name'];
 $_SESSION['email'] = $_user['email'];
 
 $insQuery = "INSERT INTO `user_logs` (user_id) VALUES ($userId)";
 $con->query($insQuery);
 
 $_SESSION['success'] = "Login successfuly";
 header("location:dashboard.php");

}else {
    $_SESSION['error'] = "Email and password invalid.";
 header("location:index.php");

}




?>