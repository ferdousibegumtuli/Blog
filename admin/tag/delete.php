<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    require($rootPath . '/controller/tagController.php');
    include('../layout/footer.php');

    if(isset($_GET['id'])){
        $tagId = $_GET['id'];
        $tagController = new TagController();
        $tagIsDelete = $tagController->delete($tagId);
        if($tagIsDelete){
            $_SESSION['deleteData'] = [
                'msg' => 'Tag Delete Successfully',
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