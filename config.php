<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$connection = mysqli_connect($servernim, $username, $alamat, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>