<?php
/*//the script for the connection to mysqli database

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "favicondb";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword, $dbName);
*/

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>