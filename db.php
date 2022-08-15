<?php

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


