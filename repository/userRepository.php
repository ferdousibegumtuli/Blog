<?php
require_once ($rootPath ."/repository/repository.php");
class UserRepository extends Repository{
    private const TABLE_NAME = 'users';
    public function getFromDb($userId):array
    {
        return $this->getByID('*',self::TABLE_NAME,$userId);
    }

    public function getAll() :array
    {
        return $this->get('*', self::TABLE_NAME);
    }

    public function getUser(
        string $userName,
        string $userFullname,
        string $password,
        int $userStatus
    ): bool 
    {
        return $this->insert(self::TABLE_NAME,'user_name,full_name,password,status',"'$userName','$userFullname','$password','$userStatus'");
    }

    public function updateUser(
        int $userId,
        string $userName,
        string $userFullname,
        int $userStatus,
        ?string $userUpdatePassword
    ): bool {
       $value = "`user_name` = '$userName',`full_name` = '$userFullname',`status`= '$userStatus'";
       if(!empty($userUpdatePassword))
       {
            $value = $value . ",`password`= '$userUpdatePassword'";

       }
        return $this->update(self::TABLE_NAME, $value ,$userId);
        
    }

    public function deleteById(int $userId): bool
    {
        return $this->delete(self::TABLE_NAME,$userId);
    }


}
?>