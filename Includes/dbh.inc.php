<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "secret";
$dBName = "login_db";
$port = 3307;



$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName, $port);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo ("you got here");

?>