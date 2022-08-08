<?php

include_once 'db.php'
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="stylesheet" href="">
</head>
<body>

<form action="login_s.php" method="post">	
	<input type="email" name="email" placeholder="Enter Your Email/Username"> <br>
	<input type="password" name="password" placeholder="Enter Your Password"> <br>
	<button type="submit" name="submit"> login </button>
</form>	
</body>
</html>