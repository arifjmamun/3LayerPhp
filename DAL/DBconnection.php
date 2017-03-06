<?php

namespace DAL {

    use mysqli;

    abstract  class DBconnection
    {
        private $HostName;
        private $UserName;
        private $Password;
        private $DBName;

        public function __construct()
        {
            $this->HostName = 'localhost';
            $this->UserName = 'root';
            $this->Password = '';
            $this->DBName = 'Info_Db';
        }

        public function Open()
        {
            $connection = new mysqli($this->HostName, $this->UserName, $this->Password, $this->DBName);
            if ( $connection->connect_error) {
                die('Database connection failed');
            }
            return $connection;
        }

        public function Close()
        {
            if (isset($connection)) {
                $connection->close();
            }
        }
    }
}