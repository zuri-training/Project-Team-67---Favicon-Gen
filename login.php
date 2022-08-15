<?php

  session_start();

  $pdo = require_once 'db.php';


  $identifier = $_POST['identifier'];
  $password = $_POST['password'];

  $sql = "SELECT id FROM users WHERE email = '{$identifier}' OR username = '{$identifier}' AND password = '{$password}' LIMIT 1";

  $statement = $pdo->query($sql);



  while ($user = $statement->fetch()) {
    $_SESSION["user_id"] = $user['id'];
  }

  header("Location: index.php");
?>








