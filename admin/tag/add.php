<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
    if(isset($_POST["submit"])){
    require_once ("../../controller/tagController.php");
    $tagName = $_POST["tagname"];
    $tagController = new TagController();
    $tagIsSaved = $tagController->insert($tagName);
        if($tagIsSaved){
            $_SESSION['addData'] = [
                'msg' => 'Tag Add Successfully',
                'type' => 'success'
            ];
        } 
        header ("Location:index.php");
}
?>
<div id="main">
    <h4 class="card-title">TAG</h4>
    <div class="col-md-6">
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
</div>

<?php
    include('../layout/footer.php');
}
else
{
       header("location:../login/index.php");
}
?>