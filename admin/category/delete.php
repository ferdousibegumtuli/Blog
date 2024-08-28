<?php
include('../layout/header.php');
require($rootPath . '/controller/categoryController.php');
?>
<?php
    include('../layout/footer.php');
?>
<?php
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
?>