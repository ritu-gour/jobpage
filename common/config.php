<?php


// Create connection

$con = mysqli_connect('localhost', 'root', '', 'tnplab');
//echo $conn;
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>