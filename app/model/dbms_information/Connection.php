<?php

class Connection{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbms = "dps_dbms__cl13nt_information";
    
    protected function __conn(){
        $conn = new mysqli($this->host,$this->user,$this->pass,$this->dbms);

        return $conn;
    }
}

?>