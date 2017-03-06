<?php

namespace BLL {

    spl_autoload_register(function($name){
        require_once '../'.str_replace('\\','/',$name).'.php';
    });

    use DAL\PersonGateway;
    use Models\Person;

    class PersonManager
    {
        public function AddPerson(Person $person)
        {
            $_gateway = new PersonGateway();
            return $_gateway->AddPerson($person);
        }

        public function GetAllPerson()
        {
            $_gateway = new PersonGateway();
            return $_gateway->GetAllPerson();
        }
    }
}