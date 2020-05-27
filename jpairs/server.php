<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
$username="";
$email = "";
$errors = array();
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $ID_Number=mysqli_real_escape_string($db, $_POST['ID_Number']);
    //elegxos gia kapoio error
    if (empty($username)) {
    array_push($errors, "Username is required");
    }
    if(empty($email)) {
    array_push($errors, "Email is required");
    }   
    if(empty($password_1)) {
    array_push($errors, "Password is required");
    }
    if(empty($password_2)) {
    array_push($errors, "Password is required");
    } 
    if($password_1 != $password_2){
    array_push($errors, "Passwords do not match");
    }
    if(strlen($password_1) < 8){
    array_push($errors, "Password must be at least 8 characters");
    }
    // elenxos kefalaiwn , ari8mwn kai special xarakthrwn
    if(!preg_match('/[A-Z]/', $password_1)){
    // There is one uppercase
        [array_push($errors, "Password must contain at least one uppercase letter")];
    }
    if(!preg_match('/[0-9]/', $password_1)){
    
        [array_push($errors, "Password must contain at least one number")];
    }
    if (!preg_match("/\W/", $password_1)){
        // one or more of the 'special characters' found in password
        [array_push($errors, "Password must contain at least one special character")];
    }
    if(count($errors) == 0 ){
        $insertion = "INSERT INTO user (Username,Password,Email,ID_Number) VALUES ('$username','$password_1', '$email', '$ID_Number')";
        mysqli_query($db, $insertion);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Welcome to the club";
        $_SESSION['boolean'] = false;

        header('location: select.php');
          
    }
    
}



if(isset($_POST['login'])) {
 
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);
    if(empty($username)) {
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
        
    if(count($errors) === 0 ) {
        
        $query= "SELECT * FROM user WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $query);
        $rows=mysqli_fetch_assoc($result);
        $speciality= $rows['Speciality'] ;    
        if(mysqli_num_rows($result) >= 1) {
                
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "KALOSHRTHES";
            $_SESSION['boolean'] = false;
            if ($speciality===true){
                header('location: homepage0.php');
            }else{
                header('location: homepage1.php');
            }
        

         }else{
        array_push($errors, "Wrong username/password. Try again");
       
        }  
    } 
        mysqli_free_result($result);
    }



    function abc($name){
        echo "asd";
    }
?>