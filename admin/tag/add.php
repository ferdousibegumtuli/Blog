<?php
    include('../layout/header.php');
    include('../layout/sidebar.php');
?>
<div id="main">
    <h4 class="card-title">TAG</h4>
    <div class="card-body">
        <form action = "add.php" method ="post" class="form form-vertical">
            <div class="form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="first-name-vertical">Tag</label>
                            <input type="text" id="first-name-vertical" class="form-control" name="tagname" placeholder="Tag Name">
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
if(isset($_POST["submit"])){
    require ("../../controller/tagController.php");
    $tagName = $_POST["tagname"];
    $tagController = new TagController();
    $tagIsSaved = $tagController->insert($tagName);
    if($tagIsSaved){
        $_SESSION['addData'] = [
            'msg' => 'Tag Add Successfully',
            'type' => 'success'
        ];
    } 
    header ("Location: index.php");

}
?>
<?php
    include('../layout/footer.php');
?>