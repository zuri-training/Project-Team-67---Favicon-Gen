<?php

$hostname = "localhost";
$dbname = "myFaviproDB";
$username = "root";
$password = "mysql";

$mysqli = new mysqli("hostname", "dbname", "username", "password") ;

     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);

         if($conn) {
            echo "success"; 
        } 
        else {
            die("Error". mysqli_connect_error()); 
        } 
    ?>
