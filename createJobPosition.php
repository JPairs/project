<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
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
    <i class="fa fa-arrow-left" aria-hidden="true"></i>   
    <i class="fa fa-home" aria-hidden="true"></i>
    <i class="fa fa-cog">   Settings</i>
    
    <div class="btn"><i class="fa fa-user">   Create Job Position</i></div>
    <i class="fa fa-suitcase" aria-hidden="true"></i>
    <br><br>

    Salary: <input type="text" name="name">
    <span class="error">* </span>
    <br><br>

    Address: <input type="text" name="name">
    <span class="error">* </span>
    <br><br>

    Number of Employees: <input type="number" id="quantity" name="quantity" min="1" max="100">
    <span class="error">* </span>
    <br><br>

    Dates: <input type="date" id="birthday" name="birthday">
    <br><br>

    Schedule: <input type="text" name="name">
    <span class="error">* </span>
    <br><br>

    Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other  
  <span class="error">* </span>
  <br><br>
    
    Description: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <input class="btn" type="submit" name="login" value="Save">
    </div>

</body>
</html>