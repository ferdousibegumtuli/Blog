<?php
require_once ($rootPath . "/config/DbConfig.php");
class Repository{
    protected $connection = null;
    function __construct()
    {
        $dbConfig = new Dbconfig();
        $this->connection = $dbConfig->getConnection();
    }

    public function get(string $columnName,string $tableName) :array
    {
        $sql = "SELECT $columnName  FROM `$tableName`";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }


    public function insert(string $tableName, string $columnName, string $value): bool 
    {
        $sql = "INSERT INTO `$tableName` ($columnName) VALUES ($value)";
        return $this->connection->exec($sql);
    }

    public function getById(string $columnName, string $tableName, int $idName) :array
    {
        $sql = "SELECT $columnName  FROM `$tableName` WHERE id='$idName'";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }

    public function update(string $tableName, string $columnNameWithValue,int $idName): bool 
    {
        $sql = "UPDATE `$tableName` SET $columnNameWithValue WHERE `id` = '$idName'";
        $prepareSql = $this->connection->prepare($sql);
        return $prepareSql->execute();
    }

    public function delete(string $tabelName, int $idName): bool
    {
        $sql = "DELETE FROM `$tabelName` 
                WHERE `id` = '$idName'";
               return $this->connection->exec($sql);
    }

}
?>