<?php

session_start();

if (isset($_SESSION["user_id"])) {
    $pdo = require __DIR__ . "/db.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $pdo->query($sql);
    
    $user = $result->fetch();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["username"]) ?> Welcome to your Dashboard</p>
        

        <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Kindly upload the picture to covert to favicon: OR 
            Post you link below</p>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="text" name="link" id="link">
        <input type="submit" value="Convert Now" name="submit">        
        </form>

        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="sign_in.html">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
