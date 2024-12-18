<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: admin_login.php");
    exit();
}

if(isset($_GET['logout'])){
    session_destroy();
    header("location: /BloodInformationSystem/index.php");
    exit();
}

?>

