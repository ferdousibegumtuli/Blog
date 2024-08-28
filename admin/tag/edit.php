<?php
    include('../layout/header.php');
    include('../layout/sidebar.php');
    require($rootPath . '/controller/tagController.php');
?>
<?php
if(isset($_GET['id'])){
    $tagId = $_GET['id'];
    $tagController = new TagController();
    $tagGetById = $tagController->edit($tagId);
}
if(isset($_POST['submit'])){
    $tagId = $_GET['id'];
    $tagName = $_POST['tagname'];
    $tagIsUpdate = $tagController->update($tagName,$tagId); 
    if($tagIsUpdate){
        $_SESSION['editData'] = [
            'msg' => 'Tag Edit Successfully',
            'type' => 'success'
        ];
    } 
        header ("Location: index.php");
}
?>
<div id="main">
    <div class="card-body">
        <form action = "edit.php?id=<?php echo $tagGetById[0]['id']?>" method ="post" class="form form-vertical">
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Tag</label>
                            <input type="text" id="first-name-vertical" class="form-control" name="tagname" value="<?php echo $tagGetById[0]['tag']?>"/>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary me-1 mb-1" name="submit" value="Submit"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
    include('../layout/footer.php');
?>
