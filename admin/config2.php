<?php
session_start();

function dd($data){
    echo "<pre>";
    print_r($data);
    die();
}
$host = "localhost";//127.0.0.1
$userName = "root";
$password = "";
$database ="php_project";
$con = mysqli_connect($host,$userName,$password,$database);

if(!$con){
    echo "connection not established...";
}
  
?>