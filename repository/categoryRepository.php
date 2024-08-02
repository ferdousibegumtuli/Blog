<?php
require ($rootPath . "/config/DbConfig.php");
class CategoryRepository{
    private $connection = null;
    function __construct()
    {
        $dbConfig = new Dbconfig();
        $this->connection = $dbConfig->getConnection();
    }

    public function getAll() :array
    {
        $sql = "SELECT *  FROM `categories`";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }


    public function getByName(string $categoryName): bool 
    {
        $sql = "INSERT INTO `categories` (`category`) VALUES ('$categoryName')";
        return $this->connection->exec($sql);
    }

    public function getById(int $categoryId) :array
    {
        $sql = "SELECT *  FROM `categories` WHERE id='$categoryId'";
        $prepareQuery = $this->connection->query($sql);
        return $prepareQuery->fetchAll();
    }

    public function getByIdAndName(string $categoryName,int $categoryId): bool {
        $sql = "UPDATE `categories` SET `category` = '$categoryName' WHERE `id` = '$categoryId'";
        $prepareSql = $this->connection->prepare($sql);
        return $prepareSql->execute();
    }

    public function deleteById(int $categoryId): bool
    {
        $sql = "DELETE FROM `categories` 
                WHERE `id` = '$categoryId'";
               return $this->connection->exec($sql);
    }
}
?>
