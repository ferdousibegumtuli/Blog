<?php
require_once("../config/DbConfig.php");

class LoginRepository{
    private $connection = null;
    function __construct()
    {
        $dbConfig = new Dbconfig();
        $this->connection = $dbConfig->getConnection();
    }
    public function getUserByUserAndPassword(string $userName,string $password): array {
        $sql = "SELECT * FROM `users` WHERE `user_name`='$userName'AND`status` = '1'";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();    
    }
}
?>