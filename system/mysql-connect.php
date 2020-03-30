<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "atto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    mysqli_connect_error();
    header('Location: error/db');
}
