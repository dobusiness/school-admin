<?php
    class db{
        // Properties
        private $dbhost = 'localhost';
        private $dbuser = 'serprosa_admin';
        private $dbpass = 'serprosac$2017';
        private $dbname = 'serprosa_capacitacion';
        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }