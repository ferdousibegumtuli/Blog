<?php
include('../layout/header.php');
if($_SESSION['user'])
{
require($rootPath . '/controller/categoryController.php');
include('../layout/footer.php');
    if(isset($_GET['id'])){
        $categoryId = $_GET['id'];
        $categoryController = new CategoryController();
        $categoryIsDelete = $categoryController->delete($categoryId);
        if($categoryIsDelete){
            $_SESSION['deleteData'] = [
                'msg' => 'Category Delete Successfully',
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