<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>Home Page</title>
   <link rel="stylesheet" href="style.css">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
      <style>
      .move{
          border-top-right-radius:5px;
      }
      </style>                
</head>
<body>
    
    <div class ="container">
    
    <img src="images/city1.png" alt="Logo" class="center" width="300" height="300" >
    </div>
    
    <div class ="containerhidden">
    <center><i class="fa fa-gavel fa-5x" aria-hidden="true"></i><center>
    <p> 
             <b><font size="4" color="black">Hi,Lelouch! Interested in working?</font></b>
            </p> 
    <button class="btn" name="notification" onclick="myFunction()"><i class="fa fa-bell" aria-hidden="true">Check for notification</i> </button>

<script>
function myFunction() {
 
    window.location.href="server.php?notification='1'";
}
</script>

<div class="move">

   
    </div>
   
    <button class="btn"><i class="fa fa-search">    Search Open/Voluntary Job Positions</i></button>
    <button class="btn"><i class="fa fa-list">   Select Criteria</i></button>
    <button class="btn"><i class="fa fa-user">   My Profile</i></button>
    <button class="btn"><i class="fa fa-cog">   Settings</i></button>
    <input class="btn" type="submit" name="login" value="Log out">
    <button class="btn"><i class="fa fa-question-circle" aria-hidden="true"></i>   Support</i></button>
    
    
        

</div>

</body>
</html>