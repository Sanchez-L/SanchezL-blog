<?php
class Database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $databbase;
            
    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->databaase = $database;
    }
}

