<?php

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
	<h1 style="text-align: center;"> Convert to Favicon Using PHP </h1>

<form action="converter.php" method="post" enctype="multipart/form-data">


 <h2 style="text-align: center;"> Select image to upload: </h2>

  <input type="file" name="fileToUpload" id="fileToUpload">
  
	<button type="submit" value="Upload Image" name="submit"> Covert to Favicon </button>
</form>
	
</body>
</html>