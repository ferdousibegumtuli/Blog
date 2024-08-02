<?php
    include('../layout/header.php');
    include('../layout/sidebar.php');
    require($rootPath . '/controller/categoryController.php');
?>
<?php
if(isset($_GET['id'])){
    $categoryId = $_GET['id'];
    $categoryController = new CategoryController();
    $categoryGetById = $categoryController->edit($categoryId);
}
if(isset($_POST['submit'])){
    $categoryId = $_GET['id'];
    $categoryName = $_POST['categoryname'];
    $categoryIsUpdate = $categoryController->update($categoryName,$categoryId); 
    if($categoryIsUpdate){
        $_SESSION['editData'] = [
            'msg' => 'Category Edit Successfully',
            'type' => 'success'
        ];
    } 
        header ("Location: index.php");
}
?>
<div id="main">
    <div class="card-body">
        <form action = "edit.php?id=<?php echo $categoryGetById[0]['id']?>" method ="post" class="form form-vertical">
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Category</label>
                            <input type="text" id="first-name-vertical" class="form-control" name="categoryname" value="<?php echo $categoryGetById[0]['category']?>"/>
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
