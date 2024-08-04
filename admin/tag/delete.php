<?php
include('../layout/header.php');
require($rootPath . '/controller/tagController.php');
?>
<?php
    include('../layout/footer.php');
?>
<?php
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
?>