<?php
// include the database
include_once 'db.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page </title>
	<link rel="stylesheet" href="">
</head>
<body>
<!-- form to fill -->
<form action="signup.php" method="post">
	<input type="text" name="username" placeholder="Enter Your Username"> <br>	
	<input type="email" name="email" placeholder="Enter Your Email"> <br>
	<input type="password" name="password" placeholder="Enter Your Password"> <br>
	<button type="submit" name="submit"> Register </button>
</form>
	
</body>
</html>