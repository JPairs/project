<?php

class Employer{
    
    var $username0;
    var $paraliptis;
    var $minima;


    public function inform($paraliptis,$minima){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO inform(paraliptis,minima)  VALUES ('$paraliptis','$minima')";
        mysqli_query($db,$insertion); 
    }
    
}
$kappa = new Employer;
$kappa->username0="asds";
$kappa->inform("STAMI","douleuei");


class Employee {
    var $username;
    var $password;
    var $email;
    var $ID_number;
    var $paraliptis;
    var $minima;

    public function inform($paraliptis,$minima){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO inform(paraliptis,minima)  VALUES ('$paraliptis','$minima')";
        mysqli_query($db,$insertion); 
    }
    
}
$kappa = new Employee;
$kappa->username0="asds";
$kappa->inform("STAMI","douleuei");
    


class EmployerProfile{
    var $BrandNameVerification; 
    var $Name;
    var $Address;
    var $WorkHours;
    var $BankAccount;
    var $SocialMedia;
    var $Description;

    public function UpdateProfile($BrandNameVerification,$Name,$Address,$WorkHours,$BankAccount,$SocialMedia,$Description){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "UPDATE employerprofile SET  BrandNameVerification = '$BrandNameVerification' , Name = '$Name' , Address = '$Address' , WorkHours = '$WorkHours' , BankAccount = '$BankAccount' , SocialMedia = '$SocialMedia' , Description = '$Description';";
        mysqli_query($db,$insertion); 
    }
    
    public function CreateProfile($BrandNameVerification,$Name,$Address,$WorkHours,$BankAccount,$SocialMedia,$Description){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $creation = "INSERT INTO employerprofile(BrandNameVerification,Name,Address,WorkHours,BankAccount,SocialMedia,Description) VALUES ('$BrandNameVerification','$Name','$Address','$WorkHours','$BankAccount','$SocialMedia','$Description');";
        mysqli_query($db,$creation); 
    }
    public function DeleteProfile(){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $deletion = "DELETE FROM employerprofile";
        mysqli_query($db,$deletion); 
    }
    
}
$keepo = new EmployerProfile;


//$keepo->UpdateProfile("STAMI","douleuei","asasd",$noumero,"asasd","asasd","asasd");

class EmployeeProfile{
    var $AMKA;
    var $IKA;
    var $ResidencePermit;
    var $WorkPermit;
    var $AFM;
    var $Name;
    var $Lastname;
    var $BirthDate;
    var $BankAccount;
    var $Town;
    var $CV;
    var $SocialMedia;


    public function CreateProfile($AMKA,$IKA,$ResidencePermit,$WorkPermit,$AFM,$Name,$Lastname,$BirthDate,$BankAccount,$Town,$CV,$SocialMedia){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $creation = "INSERT INTO employeeprofile(AMKA,IKA,Address,ResidencePermit,WorkPermit,AFM,Name,Lastname,BirthDate,BankAccount,Town,CV,SocialMedia) VALUES ('$AMKA','$IKA','$Address','$ResidencePermit','$WorkPermit','$AFM','$Name','$Lastname','$BirthDate','$BankAccount','$Town','$CV','$SocialMedia');";
        mysqli_query($db,$creation); 
    }
    public function UpdateProfile($AMKA,$IKA,$ResidencePermit,$WorkPermit,$AFM,$Name,$Lastname,$BirthDate,$BankAccount,$Town,$CV,$SocialMedia){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "UPDATE employeeprofile SET  AMKA = '$AMKA' , IKA = '$IKA' , ResidencePermit = '$ResidencePermit' , WorkPermit = '$WorkPermit' , AFM = '$AFM' , Name = '$Name' , Lastname = '$Lastname', BirthDate = '$BirthDate' , BankAccount = '$BankAccount' , Town = '$Town' , CV = '$CV' , SocialMedia = '$SocialMedia';";
        mysqli_query($db,$insertion); 
    }
    }
    public function DeleteProfile(){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $deletion = "DELETE FROM employeeprofile";
        mysqli_query($db,$deletion); 
    }
}
$keepo = new EmployeeProfile;

class Employment{
    var $Description;
    var $WorkHours;
    var $PaymentPerHour;
    var $Sex;
    var $NumberOfEmployees;
    var $Date;
    var $Open;

    public function CreateEmployment($Description,$WorkHours,$PaymentPerHour,$Sex,$NumberOfEmployees,$Date,$Open){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $creation = "INSERT INTO employment(Description,WorkHours,PaymentPerHour,Sex,NumberOfEmployees,Date,Open) VALUES ('$Description','$WorkHours','$PaymentPerHour','$Sex','$NumberOfEmployees','$Date','$Open');";
        mysqli_query($db,$creation); 
    }
    public function UpdateEmployment($Description,$WorkHours,$PaymentPerHour,$Sex,$NumberOfEmployees,$Date,$Open){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "UPDATE employment SET  Description = '$Description' , WorkHours = '$WorkHours' , PaymentPerHour = '$PaymentPerHour' , Sex = '$Sex' , NumberOfEmployees = '$NumberOfEmployees' , Date = '$Date' , Open = '$Open';";
        mysqli_query($db,$insertion); 
    }
    public function DeleteEmployment(){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $deletion = "DELETE FROM employment";
        mysqli_query($db,$deletion); 
    }
}
$keepo = new Employment;

class Criteria{
    var $profession;
    var $Adress;
    var $Dates;
    var $TimeSchedule;
    var $PaymentPerHour;

    public function CreateCriteria($profession,$Adress,$Dates,$TimeSchedule,$PaymentPerHour){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $creation = "INSERT INTO criteria(Profession,Adress,Dates,TimeSchedule,PaymentPerHour) VALUES ('$profession','$Adress','$Dates','$TimeSchedule','$PaymentPerHour');";
        mysqli_query($db,$creation); 
    }
    public function UpdateCriteria($profession,$Adress,$Dates,$TimeSchedule,$PaymentPerHour){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "UPDATE criteria SET  Profession = '$profession' , Adress = '$Adress' , Dates = '$Dates' , TimeSchedule = '$TimeSchedule' , PaymentPerHour = '$PaymentPerHour';";
        mysqli_query($db,$insertion); 
    }
    public function DeleteCriteria(){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $deletion = "DELETE FROM criteria";
        mysqli_query($db,$deletion); 
    }
}
$keepo = new Criteria;

class VoluntaryWork{
    var $Description;
    var $DateTime;
    var $Address;
    var $Purpose;
    var $NumberOfVolunteers;
    var $paraliptis;
    var $minima;
    var $CON="Confirmed";


    public function inform($paraliptis,$minima){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO inform(paraliptis,minima)  VALUES ('$paraliptis','$minima')";
        mysqli_query($db,$insertion); 
    }
    public function RefreshList() {

    }
    public function PostReward() {
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO user(CompletedVoluntary)  VALUES ('$CON')";
        mysqli_query($db,$insertion); 
    }
}
$keepo = new VoluntaryWork;

class Rating{
    var $success;
    var $monthNow= date("m");
    var $dayNow= date("d");
    var $MyEndDate;
    
    public function CheckForSuccess() {
        $query= "SELECT success FROM  WHERE username='$newusername'";
        $result = mysqli_query($db, $query);
        $rows=mysqli_fetch_assoc($result);
        $bool= $rows['success'] ;
        return $bool;
    }
    public function WarningRating() {
        var $rating="Canceled Job!";
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $kritikh = "INSERT INTO employerprofile(rating) VALUES ('$rating');";
        mysqli_query($db,$creation); 
    }
    
}
$keepo = new Rating;

class Help{

  
}

class ClientSupport{
   
}

class Match{

}

class Payment{
    public double $TotalPayment
    public double $Commission;

    public function inform($paraliptis,$minima){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO inform(paraliptis,minima)  VALUES ('$paraliptis','$minima')";
        mysqli_query($db,$insertion); 
    }
    public function inform($paraliptis,$minima){
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO inform(paraliptis,minima)  VALUES ('$paraliptis','$minima')";
        mysqli_query($db,$insertion); 
    }
    public function total($wres,$paymentperhour){
$all=$wres*$paymentperhour+($wres*$paymentperhour)*10/100;
return $all;
    }
    
    public function UpdatePayment($wres,$paymentperhour){
        $all=$wres*$paymentperhour+($wres*$paymentperhour)*10/100;
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "UPDATE payment SET  TotalPayment = '$all';";
        mysqli_query($db,$insertion); 
    }
}
$keepo = new Payment;

class Open extends Employment{

}

class substitude extends Employee{

}

class Bank{
    public function VerifyBankAccount($bank,$wres,$paymentperhour) {
        $all=$wres*$paymentperhour+($wres*$paymentperhour)*10/100;
        $ypoloipo=$bank-$all;
        if ($ypoloipo >= 0 ) {
            return true;
        
        }else{
        return false;
        }
    }
}

class Database{
    var $employement_ID;
    var $Description;
    $deleted='deleted';
    public function DeleteJob($employement_ID) {
        $db = mysqli_connect('localhost', 'root', '', 'JPairs') or die("could not connect to database");
        $insertion = "INSERT INTO employment(Employment_ID)  VALUES ('$deleted')";
        mysqli_query($db,$insertion); 

    }
}
?>