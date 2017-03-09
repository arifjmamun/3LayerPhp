<?php

namespace Models
{
    class Person
    {
        private $Id;
        private $Name;
        private $PhoneNo;
        private $Email;
        private $Address;

//        public function __set($property, $value)
//        {
//            if(property_exists('Person', $property))
//            {
//                $this->$property = $value;
//            }
//            else
//            {
//                echo "The {$property} property doesn't exist";
//            }
//        }
//        public function __get($property)
//        {
//            if(property_exists('Person', $property))
//            {
//                return $this->$property;
//            }
//            else
//            {
//                echo "The {$property} property doesn't exist";
//            }
//        }
        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->Id;
        }

        /**
         * @param mixed $Id
         */
        public function setId($Id)
        {
            $this->Id = $Id;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->Name;
        }

        /**
         * @param mixed $Name
         */
        public function setName($Name)
        {
            $this->Name = $Name;
        }

        /**
         * @return mixed
         */
        public function getPhoneNo()
        {
            return $this->PhoneNo;
        }

        /**
         * @param mixed $PhoneNo
         */
        public function setPhoneNo($PhoneNo)
        {
            $this->PhoneNo = $PhoneNo;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->Email;
        }

        /**
         * @param mixed $Email
         */
        public function setEmail($Email)
        {
            $this->Email = $Email;
        }

        /**
         * @return mixed
         */
        public function getAddress()
        {
            return $this->Address;
        }

        /**
         * @param mixed $Address
         */
        public function setAddress($Address)
        {
            $this->Address = $Address;
        }
    }
}
