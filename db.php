<?php

<<<<<<< HEAD
/* declare(strict_types=1); */

/* require_once('vendor/autoload.php'); */

/* $dotenv = Dotenv\Dotenv::createImmutable(__DIR__); */
/* $dotenv->load(); */

//
// make a database connection
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

return $pdo;


=======
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
>>>>>>> main
