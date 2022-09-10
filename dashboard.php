<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Dashboard</title>
    <link rel="stylesheet" href="style_1.css" />
    <link rel="stylesheet" href="style.css" />
    
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
            <a href="#news">News</a>
                <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                <a href="login.php">Login</a>
             <a href="registration.php">Sign Up</a>
        <div class="search"><input type="text" placeholder="Search out product.."></div>
    </div>
</head>
<body>

    
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <button><a href="logout.php">Logout</a></p></button>
    </div>  
    
</body>
</html>