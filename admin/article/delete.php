<?php
    include('../layout/header.php');
    require($rootPath . '/controller/articleController.php');
?>

<?php
if(isset($_GET['id'])){
    $articleId = $_GET['id'];
    $articleController = new ArticleController();
    $articleIsDelete = $articleController->delete($articleId);
    if($articleIsDelete){
        $_SESSION['deleteData'] = [
            'msg' => 'Article Delete Successfully',
            'type' => 'success'
        ];
    } 
        header ("Location: index.php");
}
?>
<?php
    include('../layout/footer.php');
?>