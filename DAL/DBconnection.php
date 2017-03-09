<?php

namespace DAL {

    use mysqli;

    abstract  class DBconnection
    {
        private static $HostName;
        private static $UserName;
        private static $Password;
        private static $DBName;

        public function __construct()
        {
            DBconnection::$HostName = 'localhost';
            DBconnection::$UserName = 'root';
            DBconnection::$Password = '';
            DBconnection::$DBName = 'Info_Db';
        }

        public function Open()
        {
            $connection = new mysqli(DBconnection::$HostName, DBconnection::$UserName, DBconnection::$Password, DBconnection::$DBName);
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