<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "login_db";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}