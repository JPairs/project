<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>User login system</title>
   <link rel="stylesheet" href="style.css">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                     
</head>
<body>
    

<img src="images/city1.png" alt="LOGO" class="center" width="200" height="200" >

<button class="export" name="notification" onclick="myFunction()">Check for notifications</button>

<script>
function myFunction() {
 
    window.location.href="server.php?notification='1'";
}
</script>

</body>
</html>