<?php
session_start();

function dd($data)
{
    echo "<pre>";
    print_r($data);
    die();
}
$host = "localhost";
$userName = "root";
$password = "";
$database = "php-project";
$con = mysqli_connect($host, $userName, $password, $database);

if (!$con) {
    echo "connection not established...";
}

?>