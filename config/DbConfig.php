<?php
class DbConfig{
    private $hostName = "localhost:3306";
    private $userName = "root";
    private $password = "";
    private $database = "blog";

    public function getConnection():PDO
    {
        return new PDO("mysql:host=$this->hostName;dbname=$this->database",
                    $this->userName,
                    $this->password
        );
    }
}
?>