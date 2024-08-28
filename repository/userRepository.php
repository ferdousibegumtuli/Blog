<?php
require_once ($rootPath ."/repository/repository.php");
class UserRepository extends Repository{
    private const TABLE_NAME = 'users';

    public function getUser(int $userId) :array
    {
        return $this->getById('*',self::TABLE_NAME,$userId);
    }


}
?>