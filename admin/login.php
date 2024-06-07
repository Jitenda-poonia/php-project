<?php
require_once ("config2.php");
$data = $_POST;
$email = $data["email"];
$password = md5($data["password"]);
// dd($password); 
$selQuery = "SELECT * FROM `users` where email='$email' and password='$password'";
$userData = $con->query($selQuery);

if ($userData->num_rows) {
    $_user = mysqli_fetch_assoc($userData);

    // Admin pannel me name , email & user logintime show ke liye
    $_SESSION['name'] = $_user['name'];
    $_SESSION['email'] = $_user['email'];
    $_SESSION['user_id'] = $_user["id"]; //user login time show ke liye
    // --------------------------------------------------------

    // ---------------User_logs me UserId insert --------------------------

    $userId = $_user["id"];
    $insQuery = "INSERT INTO `user_logs` (user_id) VALUES ($userId)";
    $con->query($insQuery);

    $_SESSION['success'] = "User Login Successfuly!!";
    header("location:dashboard.php");

} else {
    $_SESSION['error'] = "Email & Password Invalid Please Tray Again!!";
    header("location:index.php");

}




?>