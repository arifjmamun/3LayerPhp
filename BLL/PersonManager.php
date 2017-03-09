<?php

namespace BLL {

    require_once 'autoloader.php';

    use DAL\PersonGateway;
    use Models\Person;


    class PersonManager
    {
        public function IsPersonExist($email)
        {
            $_gateway = new PersonGateway();
            $rowCouunt = $_gateway->IsPersonExist($email);
            return $rowCouunt>0;
        }
        public function AddPerson(Person $person)
        {
            $_gateway = new PersonGateway();
            if(!$this->IsPersonExist($person->getEmail())){
                $affectedRow = $_gateway->AddPerson($person);
                return $affectedRow>0 ? "Data Saved" : "Data not saved";
            }
            return "The person by the email exists!";
        }

        public function GetAllPerson()
        {
            $_gateway = new PersonGateway();
            return $_gateway->GetAllPerson();
        }
    }
}