<?php
// Etablerar databas koppling
// Host,username,password,databas.
$con = mysqli_connect("localhost","root","pass","test");
$con->set_charset("utf8mb4");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
?>