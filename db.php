<?php
//the script for the connection to mysqli database

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "favicondb";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword, $dbName);

?>