<?php

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}


session_start();
session_destroy();
header("Location:login.php");
?>