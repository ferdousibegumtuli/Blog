<?php
require_once ($rootPath . "/repository/userRepository.php");
class UserController {
    private $userRepository = null;
    function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function getUserName(int $userId): array
    {
       return $this->userRepository->getUser($userId);
    }
}
?>