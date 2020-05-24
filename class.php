<?php

class Employer {
    
    public string $username0;
    public string $password0;
    public string $email0;
    public string $ID_number0;


    public function inform() {

    }
}

class Employee {
    public string $username1;
    public string $password1;
    public string $email1;
    public string $ID_number1;

    public function inform() {

    }
}

class EmployerProfile{
    public string $BrandNameVerification; 
    public string $Name0;
    public string $Address;
    public int $WorkHours0;
    public string $BankAccount;
    public string $SocialMedia0;
    public string $Description0;

    public function GiveTips() {

    }
    public function UpdateProfile0() {

    }
    public function DeleteProfile0() {

    }
}

class EmployeeProfile{
    public string $AMKA;
    public string $IKA;
    public boolean $ResidencePermit;
    public boolean $WorkPermit;
    public string $AFM;
    public string $Name1;
    public string $Lastname;
    public int $BirthDate;
    public string $BankAccount;
    public string $Town;
    public string $CV;
    public string $SocialMedia1;


    public function HighlightErrors() {

    }
    public function UpdateProfile1() {

    }
    public function DeleteProfile1() {

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
    public function CheckForSuccess() {

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
}
>
