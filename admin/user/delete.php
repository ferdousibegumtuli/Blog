<?php
include('../layout/header.php');
if($_SESSION['user'])
{
require($rootPath . '/controller/userController.php');
include('../layout/footer.php');
    if(isset($_GET['id'])){
        $userId = $_GET['id'];
        $userController = new UserController();
        $userIsDelete = $userController->delete($userId);
        if($userIsDelete){
            $_SESSION['deleteData'] = [
                'msg' => 'User Delete Successfully',
                'type' => 'success'
            ];
        } 
            header ("Location: index.php");
    }
}
 else
{
        header("location:../login/index.php");
}
?>