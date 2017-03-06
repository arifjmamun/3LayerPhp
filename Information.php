<?php

class Information
{
    public function DisplayData(Person $person)
    {
        echo "Name is: ".$person->Name."<br>";
        echo "Age: ".$person->Age."<br>";
        echo "Phone Number: ".$person->Phone."<br>";
        echo "Email Address: ".$person->Email."<br><br>";
    }
}