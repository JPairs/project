<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>Home Page</title>
   <link rel="stylesheet" href="style.css">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
                      
</head>
<body>
    
    <div class ="container">
    <img src="images/city1.png" alt="Paris" class="center" width="300" height="300" >
    </div>
    <div class ="containerhidden">
    <button class="export" name="notification" onclick="myFunction()">Check for notifications</button>

<script>
function myFunction() {
 
    window.location.href="server.php?notification='1'";
}
</script>
<br><br>
    <i class="fa fa-gavel" aria-hidden="true"></i>
    <p> 
             <b><font size="4" color="black">Hi,Lelouch! Interested in working?</font></b>
            </p> 
    <button class="btn"><i class="fa fa-search">    Search Open Job Positions</i></button>
    <button class="btn"><i class="fa fa-list">   Select Criteria</i></button>
    <button class="btn"><i class="fa fa-user">   My Profile</i></button>
    <button class="btn"><i class="fa fa-cog">   Settings</i></button>
    <input class="btn" type="submit" name="login" value="Log out">
    
    
        

</div>

</body>
</html>