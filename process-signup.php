<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $pdo = require_once 'db.php';

  $sql = 'INSERT INTO users (username, email, password) VALUES(:username, :email, :password)';

  $statement = $pdo->prepare($sql);

  $statement->execute(
    [
      ':username' => $username,
      ':email' => $email,
      ':password' => $password
    ]
  );

  header("Location: index.php?signup=success");
?>






