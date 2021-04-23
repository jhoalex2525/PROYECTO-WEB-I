<?php
class DBConnection{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "werommatesdata";

    public function connect(){
        $dbConnection = new mysqli($this->host, $this->username, $this->password, $this->database);
        return $dbConnection;
    }
}

?>