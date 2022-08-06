<?php
//the Script that run the sign up page
include_once 'db.php';


// to make it secure add mysqli_real_escape_string
$username = mysqli_real_escape_string($conn, $_POST['username']);
$Email = mysqli_real_escape_string($conn, $_POST['email']);
$Password = mysqli_real_escape_string($conn, $_POST['password']);



$sql = "INSERT INTO register (username, user_email, user_password ) VALUES ('$username','$Email', '$Password');";
mysqli_query($conn, $sql);

header("Location: index.php?signup=success");
?>