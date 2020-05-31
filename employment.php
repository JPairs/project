<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
.move{
      width: 100%
      padding: 8px;
      font-size: 40px;
  }  
</style>
    <meta charset="utf-8">
   <title>Home Page</title>
   <link rel="stylesheet" href="style.css">  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
                      
</head>
<body>


    <div class ="container">
    <br><br>
    <div class="move">
    <center><i class="fa fa-arrow-left" aria-hidden="true"></i> 
    <i class="fa fa-home" aria-hidden="true"></i>
    <i class="fa fa-cog"> </i></center>
    <center><div class="btn"><i class="fa fa-suitcase fa-2x"> Create Job Position</i></div></center>
    </div>
    <img src="images/city1.png" alt="Logo" class="center" width="300" height="250" >
    </div>
    <div class ="containerhidden">
   
    
    
    
    <br><br><br><br><br><br>

    Salary: <br><input type="text" name="name">
    <span class="error">* </span></br>
    

    Address: <br><input type="text" name="name">
    <span class="error">* </span></br>
    

    Number of Employees:<br> <input type="number" id="quantity" name="quantity" min="1" max="100">
    <span class="error">* </span></br>
    

    Dates: <br><input type="date" id="birthday" name="birthday">
    <span class="error">* </span></br>

    Schedule: <br><input type="text" name="name">
    <span class="error">* </span></br>
    

    Gender:<br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other  
  <span class="error">* </span></br>
  
    
    Description: <br><textarea name="comment" rows="5" cols="40"></textarea></br>
    
    <input class="btn" type="submit" name="login" value="Save">
    </div>

</body>
</html>