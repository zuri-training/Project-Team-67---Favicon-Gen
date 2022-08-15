<?php

$hostname = "localhost";
$dbname = "myFaviproDB";
$username = "root";
$password = "mysql";

$mysqli = new mysqli("hostname", "dbname", "username", "password") ;

                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
