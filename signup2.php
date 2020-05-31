<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>User registration system</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                             
</head>
<body>
<div class ="container">
    <img src="images/city1.png" alt="Paris" class="center" width="300" height="300" >
    </div>
    <div class ="containerhidden">
    
            <h2>We 've sent a 7-digit password to your email address. Fill the password to verify your account!</h2>
            <br><br><br>
            <div class="loginbox">
            <h2> Verification password</h2>
            <form method="post" action="register.php">
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
            <input type="number" min="0" max="9"/>
          
            <input class="btn" type="submit" name="Continue" value="Continue">
            <form> 
            </div>
    </div>
</body>
</html>