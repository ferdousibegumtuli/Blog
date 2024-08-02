<?php
require ("../repository/loginRepository.php");
class LoginController{
    private $loginRepository = null;
    function __construct()
    {
        $this->loginRepository = new LoginRepository();
    }

    public function login(string $userName, string $password):bool
    {
        $user =  $this->loginRepository->getUserByUserAndPassword($userName,$password);
        if ($user){
            if (password_verify($password, $user[0]['password'])) {
                return true;
            }
            return false; 
        }else {
            return false;
        } 
    }
    
}
?>