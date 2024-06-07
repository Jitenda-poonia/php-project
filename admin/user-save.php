<?php
require_once ("config2.php");

function is_strong_password($password)
{
    // minumum length 8 character
    if (strlen($password) < 8) {
        return false;
    }

    // atleast 1 numeric value
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }

    // atleast 1 character
    if (!preg_match('/[a-zA-Z]/', $password)) {
        return false;
    }

    // atleast 1 spacial charactr
    if (!preg_match('/[\W_]/', $password)) {  // \W किसी भी non-word character को दर्शाता है
        return false;
    }

    return true;
}

$data = $_POST;

// error
$isError = false;

$name = $data["name"];
$email = $data["email"];
$ph = $data["phone"];
$gender = $data["gender"];
$designation = $data["designation"];
$pass = $data["password"];
$confirm_pass = $data["confirm_password"];

// To preserve value
$_SESSION["names"] = $name;
$_SESSION["mail"] = $email;
$_SESSION["phone"] = $ph;
$_SESSION["gndr"] = $gender;
$_SESSION["des"] = $designation;
// -----------End----------------

// for unique Email
$selQuery = "SELECT * FROM `users` WHERE email='$email'";
$emailQuery = $con->query($selQuery);
// ----------------------End--------------------

if (!($emailQuery->num_rows) && ($pass == $confirm_pass) && is_strong_password($pass)) {
    $hashed_pass = md5($pass);  // md5 hashing ka use
    $insQuery = "INSERT INTO `users` (name, email, phone, gender, designation, password) VALUES ('$name', '$email', '$ph', '$gender', '$designation', '$hashed_pass')";
}

if ($emailQuery->num_rows) {
    $isError = true;
    $_SESSION["email_error"] = "Email already exists...!!";
}
if ($pass != $confirm_pass) {
    $isError = true;
    $_SESSION["password_error"] = "Passwords do not match.";
}
if (!is_strong_password($pass)) {
    $isError = true;
    $_SESSION["password_error"] = "Password must be at least 8 characters long and include at least one number, one letter, and one special character.";
}

if ($name == "") {
    $isError = true;
    $_SESSION["name_error"] = "Name is a required field.";
}
if ($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is a required field.";
}
if ($ph == "") {
    $isError = true;
    $_SESSION["phone_error"] = "Mobile number is a required field.";
}
if ($gender == "") {
    $isError = true;
    $_SESSION["gender_error"] = "Gender is a required field.";
}
if ($designation == "") {
    $isError = true;
    $_SESSION["designation_error"] = "Designation is a required field.";
}
if ($data["password"] == "") {
    $isError = true;
    $_SESSION["password_error"] = "Password is a required field.";
}

if ($isError) {
    header("location:add-user.php");
    exit();
}

if (isset($insQuery) && $con->query($insQuery)) {
    $_SESSION["success"] = "User added successfully...";
    header("location:user-list.php");
    unset($_SESSION["names"]);
    unset($_SESSION["mail"]);
    unset($_SESSION["phone"]);
    unset($_SESSION["gndr"]);
    unset($_SESSION["des"]);
} else {
    $_SESSION["error"] = "Something went wrong...";
    header("location:add-user.php");
}
?>