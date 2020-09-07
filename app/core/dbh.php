<?php

class Dbh {
    private $dbServerName;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $charset;
    
    protected function connect() {
        $this->dbServerName = "localhost";
        $this->dbUsername = "root";
        $this->dbPassword = "";
        $this->dbName = "mvc";
        $this->charset = "utf8mb4";

        $dsn = "mysql:host=" . $this->dbServerName  . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
        $dbh = new PDO($dsn, $this->dbUsername, $this->dbPassword);

        return $dbh;
    }
}