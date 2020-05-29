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

    public function inform() {

    }
}

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
$noumero = 8;

//$keepo->UpdateProfile("STAMI","douleuei","asasd",$noumero,"asasd","asasd","asasd");

class EmployeeProfile{
    var $AMKA;
    var $IKA;
    var $ResidencePermit;
    var $WorkPermit;
    var $AFM;
    var $Name1;
    var $Lastname;
    var $BirthDate;
    var $BankAccount;
    var $Town;
    var $CV;
    var $SocialMedia1;


    
    public function UpdateProfile() {

    }
    public function DeleteProfile() {

    }
}

class Employment{
    public string $Description;
    public string $WorkHours;
    public double $PaymentPerHour;
    public boolean $Sex;
    public int $NumberOfEmployees;
    public int $Date;
    public boolean $Open;

    public function UpdateEmployment() {

    }
    public function DeleteEmployment() {

    }
}

class criteria{
    public string $profession;
    public string $Adress;
    public int $Dates;
    public int $TimeSchedule;
    public double $PaymentPerHour;
}

class VoluntaryWork{
    public string $Description;
    public int $DateTime;
    public string $Address;
    public string $Purpose;
    public int $NumberOfVolunteers;


    public function Inform() {

    }
    public function RefreshList() {

    }
    public function PostReward() {

    }
}

class Rating{
    var $success;

    public function CheckForSuccess() {
        $query= "SELECT success FROM  WHERE username='$newusername'";
        $result = mysqli_query($db, $query);
        $rows=mysqli_fetch_assoc($result);
        $bool= $rows['success'] ;
        return $bool;
    }
    public function WarningRating() {

    }
    public function RatingControl() {

    }
    public function CheckForDays() {

    }
}

class Help{
    public function HelpForProfile() {

    }
    public function HelpForCriteriaEmployment() {

    }
    public function HelpForPayment() {

    }
    public function Other() {

    }
}

class ClientSupport{
    public function ShowAnswer() {

    }
}

class Match{

}

class Payment{
    public double $TotalPayment
    public double $Commission;

    public function Inform() {

    }
    public function Error() {

    }
    public function Update() {

    }
}

class Open extends Employment{

}

class substitude extends Employee{

}

class Bank{
    public function Validate() {

    }
    public function VerifyBankAccount() {

    }
}

class Database{
    public function DeleteJob() {

    }
    public function SaveJob() {

    }
    public function Validation() {

    }
}*/
?>