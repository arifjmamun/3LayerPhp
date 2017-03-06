<?php
namespace DAL {

    use Models\Person;

    class PersonGateway extends DBconnection
    {
        public function AddPerson(Person $person)
        {
            $query = "INSERT INTO Person(Name, PhoneNo, Email, Address)VALUES(?,?,?,?)";
            $db = $this->Open();
            $stmt = $db->prepare($query);
            $stmt->bind_param("ssss", $person->getName(), $person->getPhoneNo(), $person->getEmail(), $person->getAddress());
            return $stmt->execute();
        }

        public function GetAllPerson()
        {
            $persons = [];
            $query = "SELECT * FROM Person";
            $db = $this->Open();
            $result = $db->query($query);
            if($result->num_rows>0)
            {
                while ($row = $result->fetch_assoc())
                {
                    $person = new Person();
                    $person->setId($row['Id']);
                    $person->setName($row['Name']);
                    $person->setPhoneNo($row['PhoneNo']);
                    $person->setEmail($row['Email']);
                    $person->setAddress($row['Address']);
                    array_push($persons, $person);
                }
                $result->free();
            }
            return $persons;
        }
    }
}