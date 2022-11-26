<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect('localhost','root','','onlineshop',3307);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
