<?php
require ($rootPath . "/config/DbConfig.php");
class Repository{
    protected $connection = null;
    function __construct()
    {
        $dbConfig = new Dbconfig();
        $this->connection = $dbConfig->getConnection();
    }

    public function get(string $tableName,string $columnName) :array
    {
        $sql = "SELECT $tableName  FROM `$columnName`";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }


    public function insert(string $tabelName, string $columnName, string $value): bool 
    {
        $sql = "INSERT INTO `$tabelName` ($columnName) VALUES ('$value')";
        return $this->connection->exec($sql);
    }

    public function store(string $tableName, string $columnName, int $idName) :array
    {
        $sql = "SELECT $tableName  FROM `$columnName` WHERE id='$idName'";
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