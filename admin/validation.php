<?php
if (!(isset($_SESSION["name"]) && isset($_SESSION["email"]))) {
    $_SESSION["error"] = "you are login first time";
    header("location:index.php");
}

?>