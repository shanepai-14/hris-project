<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dvc-hris";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }

?>