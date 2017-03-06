<?php

class Person
{
    public $Name;
    public $Age;
    public $Phone;
    public $Email;

    public function __construct($name, $age, $phone, $email)
    {
        $this->Name = $name;
        $this->Age = $age;
        $this->Phone = $phone;
        $this->Email = $email;
    }

    public function DisplayInfo()
    {
        echo "Name is: ".$this->Name."<br>";
        echo "Age: ".$this->Age."<br>";
        echo "Phone Number: ".$this->Phone."<br>";
        echo "Email Address: ".$this->Email;
    }
}