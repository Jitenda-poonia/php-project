<?php
require_once ("config2.php");
$userId = $_POST["id"];

$isError = false;

$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$designation = $_POST["designation"];
$pass = md5($_POST["password"]);
$confirm_pass = md5($_POST["confirm-pass"]);


//for unique Email
$selQuery = "SELECT * FROM `users` where email='$email'";
$emailQuery = $con->query($selQuery);
// dd($emailQuery);
// ----------------------End--------------------


if ($emailQuery->num_rows) {
    $isError = true;
    $_SESSION["email_error"] = "Email Already exist...";

}

if ($pass != $confirm_pass) {
    $isError = true;
    $_SESSION["password_error"] = "Password does not match..";
}

if ($name == "") {
    $isError = true;
    $_SESSION["name_error"] = "Title Is requird field.";
}
if ($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "email Is requird field.";
}

if ($phone == "") {
    $isError = true;
    $_SESSION["phone_error"] = "Mobile Number Is requird field.";
}
if ($gender == "") {
    $isError = true;
    $_SESSION["gender_error"] = "Gender Is requird field.";
}
if ($designation == "") {
    $isError = true;
    $_SESSION["designation_error"] = "designation Is requird field.";
}
if ($_POST["password"] == "") {
    $isError = true;
    $_SESSION["password_error"] = "password requird field.";
}

if ($isError) {
    header("location:user-edit.php?id=$userId");
    exit();
}


if (!$emailQuery->num_rows) {
    $updateQuery = "UPDATE `users` SET name='$name',email='$email',gender='$gender',phone='$phone',
designation='$designation',password='$pass' where id=$userId";

} else {
    $updateQuery = "UPDATE `users` SET name='$name',gender='$gender',phone='$phone',
designation='$designation',password='$pass' where id=$userId";

}

$update = $con->query($updateQuery);

header("location:user-list.php");

?>