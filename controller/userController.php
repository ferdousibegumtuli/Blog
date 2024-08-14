<?php
require_once ($rootPath . "/repository/userRepository.php");
class UserController {
    private $userRepository = null;
    function __construct() {
        $this->userRepository = new UserRepository();
    }
    public function getUserName(int $userId):array
    {
        return $this->userRepository->getFromDb($userId);
    }

    public function index() :array
    {
        return $this->userRepository->getAll();
    }

    public function insert(
        string $userName,
        string $userFullname,
        string $userPassword,
        int $userStatus
    ): bool
    {
       return $this->userRepository->getUser($userName,$userFullname,$userPassword,$userStatus);
    }

    public function update(
        int $userId,
        string $userName,
        string $userFullName,
        ?string $password,
        int $userStatus
    ): bool
    {
        $userUpdatePassword = null;
        if($password)
        {
            $userUpdatePassword = password_hash($password, PASSWORD_DEFAULT);  
        }
       return $this->userRepository->updateUser($userId,$userName,$userFullName,$userStatus,$userUpdatePassword);
    }

    public function delete(int $userId): bool
    {
       return $this->userRepository->deleteById($userId);
    }

}
?>